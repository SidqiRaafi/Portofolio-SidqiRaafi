<?php
// Konfigurasi koneksi database
$servername = "localhost";
$username    = "root";
$password    = "";
$dbname      = "portofolio";

// Membuat koneksi ke MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Validasi koneksi, tampilkan pesan jika gagal
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set karakter encoding MySQL (supaya support Unicode/multi-bahasa)
$conn->set_charset("utf8mb4");
?>
