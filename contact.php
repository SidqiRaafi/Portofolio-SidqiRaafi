<?php include 'data/contact_form.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact | Portfolio</title>
    <!-- CSS untuk layout halaman contact & header navbar -->
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/contact.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <a href="index.php" class="nav-link inactive">HOME</a>
        <a href="ideas.php" class="nav-link inactive">IDEAS</a>
        <a href="projects.php" class="nav-link inactive">PROJECT</a>
        <a href="about.php" class="nav-link inactive">ABOUT</a>
        <a href="contact.php" class="nav-link contact active">CONTACT ME</a>
    </nav>

    <!-- Grid utama halaman kontak: kiri form, kanan profil & visitor -->
    <div class="contact-main">
        <!-- Card/konten form pertanyaan atau saran -->
        <div class="contact-form-card">
            <h2 class="form-title">INQUIRIES FORM</h2>
            <form method="POST" id="contactForm">
                <label for="email" class="form-label">E-MAIL</label>
                <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email..." required>
                <label for="subject" class="form-label">SUBJECT</label>
                <input type="text" id="subject" name="subject" class="form-input" placeholder="Enter subject..." required>
                <label for="inquiry" class="form-label">INQUIRIES</label>
                <textarea id="inquiry" name="inquiry" class="form-textarea" rows="6" placeholder="Enter your inquiry..." required></textarea>
                <button type="submit" class="form-submit-btn">SUBMIT</button>
            </form>
        </div>
        <!-- Card profil (gambar) dan visitor counter -->
        <div class="contact-profile-visitor-card">
            <img src="assets/images/profile.png" alt="Profile Picture" class="profile-card-img">
            <div class="visitor-block">
                <div class="visitor-number"><?php include 'counter.php'; ?></div>
                <div class="visitor-label">VISITORS</div>
            </div>
        </div>
    </div>

    <!-- Popup tampilan jika form berhasil dikirim -->
    <?php if ($submitted): ?>
    <div class="popup-overlay" id="popupOverlay">
        <div class="popup-box">
            <h3>Thank You!</h3>
            <p>Thank you for sending your inquiries. We will get back to you soon.</p>
            <button onclick="closePopup()" class="popup-close-btn">OK</button>
        </div>
    </div>
    <?php endif; ?>
    <!-- Popup tampilan jika form error (validasi gagal) -->
    <?php if ($error): ?>
    <div class="popup-overlay" id="popupOverlay">
        <div class="popup-box">
            <h3>Error</h3>
            <p><?php echo htmlspecialchars($error); ?></p>
            <button onclick="closePopup()" class="popup-close-btn">OK</button>
        </div>
    </div>
    <?php endif; ?>

    <!-- Efek mouse trail dan fungsi tutup popup -->
    <script src="assets/js/mousetrail.js"></script>
    <script>
        // Fungsi untuk menutup popup overlay
        function closePopup() {
            document.getElementById('popupOverlay').style.display = 'none';
        }
    </script>
</body>
</html>
