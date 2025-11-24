<?php
// Inisialisasi variabel notifikasi hasil submit dan error
$submitted = false;
$error = '';

// Proses validasi form jika ada request POST dari user
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $subject = trim($_POST['subject'] ?? '');
    $inquiry = trim($_POST['inquiry'] ?? '');
    // Validasi field wajib, jika ada error tampilkan pesan
    if (!$email)      $error = 'Please enter a valid email address.';
    elseif (empty($subject))   $error = 'Please enter a subject.';
    elseif (empty($inquiry))   $error = 'Please enter your inquiry.';
    else $submitted = true;
}
?>