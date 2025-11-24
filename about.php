<!DOCTYPE html>
<html lang="en">
<head>
    <title>About | Portfolio</title>
    <!-- CSS untuk layout halaman about & header navbar -->
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/about.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <a href="index.php" class="nav-link inactive">HOME</a>
        <a href="ideas.php" class="nav-link inactive">IDEAS</a>
        <a href="projects.php" class="nav-link inactive">PROJECT</a>
        <a href="about.php" class="nav-link active">ABOUT</a>
        <a href="contact.php" class="nav-link contact">CONTACT ME</a>
    </nav>

    <!-- Container konten utama About -->
    <div class="about-main">
        <!-- Bagian atas (profil developer dan akun GitHub) -->
        <div class="about-top">
            <!-- Card info diri developer -->
            <div class="about-dev-card">
                <div class="about-title">DEVELOPER</div>
                <div class="about-name">SIDQI RAAFI AL FAUZAN</div>
                <div class="about-desc">UI/UX DESIGNER | MOBILE DEVELOPER</div>
                <div class="about-section-title">SKILLS</div>
                <div class="about-skills">
                    <span class="chip">FLUTTER</span>
                    <span class="chip">WEBSITE</span>
                    <span class="chip">ANDROID</span>
                    <span class="chip">GIT</span>
                    <span class="chip">FIREBASE & CLOUD</span>
                    <span class="chip">MYSQL</span>
                </div>
            </div>
            <!-- Card profil GitHub & foto diri -->
            <div class="about-profile-card">
                <div class="profile-card-left">
                    <div class="about-github">@SidqiRaafi</div>
                    <div class="profile-btn-wrap">
                        <a href="https://github.com/SidqiRaafi" target="_blank" class="about-github-btn">VISIT ME ON GITHUB</a>
                    </div>
                </div>
                <div class="profile-img-square">
                    <img src="assets/images/profile.png" alt="Profile Picture" class="profile-img-actual">
                </div>
            </div>
        </div>
        <!-- Bagian bawah: visitor dan teknologi/logo yang dipakai -->
        <div class="about-bottom-tab">
            <div class="about-bottom-grid">
                <div class="visitor-card">
                    <span class="visitor-count"><?php include 'counter.php'; ?></span> VISITOR
                </div>
                <div class="logo-card">
                    <img src="assets/images/logo-flutter.png" alt="Flutter Logo" class="logo-img">
                </div>
                <div class="logo-card">
                    <img src="assets/images/logo-firebase.png" alt="Firebase Logo" class="logo-img">
                </div>
                <div class="logo-card">
                    <img src="assets/images/logo-kotlin.png" alt="Kotlin Logo" class="logo-img">
                </div>
            </div>
        </div>
    </div>
    <!-- Efek mouse trail -->
    <script src="assets/js/mousetrail.js"></script>
</body>
</html>
