<?php
// Menghubungkan ke database dan inisialisasi koneksi
require_once 'data/db_config.php';

// Fungsi untuk menampilkan teks ke HTML
function escape($str) {
    return htmlspecialchars($str, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

// Fetch aksi dari parameter GET
$action = $_GET['action'] ?? '';

// Fetch semua data ide pengguna
if ($action === 'fetch') {
    $sql = "SELECT number, title, descriptions FROM user_ideas ORDER BY number ASC";
    $result = $conn->query($sql);

    if ($result && $result->num_rows) {
        // Loop semua ide dan tampilkan sebagai card
        while ($row = $result->fetch_assoc()) {
            echo '<div class="idea-card">';
            echo '  <div class="idea-row">';
            echo '      <span class="chip-number">#' . escape($row['number']) . '</span>';
            echo '      <span class="chip-title">' . escape($row['title']) . '</span>';
            echo '  </div>';
            echo '  <div class="chip-description">' . escape($row['descriptions']) . '</div>';
            echo '</div>';
        }
    } else {
        // Jika belum ada ide di database
        echo '<div style="padding:44px;text-align:center;color:var(--primary-text);">No ideas yet.</div>';
    }
    exit;
}

// Bagian untuk submit data ide baru
if ($action === 'submit') {
    $title = trim($_POST['title'] ?? '');
    $descriptions = trim($_POST['descriptions'] ?? '');

    // Validasi panjang data (title/deskripsi)
    if(strlen($title) > 30 || strlen($descriptions) > 150){
        echo json_encode(['success'=>false, 'error'=>'Too long']);
        exit;
    }
    $stmt = $conn->prepare("INSERT INTO user_ideas (title, descriptions) VALUES (?, ?)");
    if (!$stmt) {
        echo json_encode(['success'=>false, 'error'=>'SQL error']);
        exit;
    }
    $stmt->bind_param('ss', $title, $descriptions);
    if ($stmt->execute()) {
        echo json_encode(['success'=>true]);
    } else {
        echo json_encode(['success'=>false, 'error'=>'Insert failed']);
    }
    $stmt->close();
    exit;
}

// Error 400 untuk aksi yang tidak dikenali
http_response_code(400);
echo json_encode(['success'=>false, 'error'=>'Unsupported action']);
