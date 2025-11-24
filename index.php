<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Menyisipkan file CSS untuk header dan tampilan halaman utama -->
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Home | Portfolio</title>
</head>
<body>
    <!-- Mouse trail effect -->
    <script src="assets/js/mousetrail.js"></script>
    
    <!-- Navbar -->
    <nav class="navbar">
        <a href="index.php" class="nav-link active">HOME</a>
        <a href="ideas.php" class="nav-link inactive">IDEAS</a>
        <a href="projects.php" class="nav-link inactive">PROJECT</a>
        <a href="about.php" class="nav-link inactive">ABOUT</a>
        <a href="contact.php" class="nav-link contact">CONTACT ME</a>
    </nav>

    <!-- Grid utama berisi semua card tampilan home -->
    <div class="home-grid">
        <!-- Card gambar -->
        <div class="bento-card home-card">
            <img src="assets/images/home-card-1.jpg" alt="Card 1">
        </div>
        <div class="bento-card home-card">
            <img src="assets/images/home-card-2.jpg" alt="Card 2">
        </div>
        <div class="bento-card home-card">
            <img src="assets/images/home-card-3.jpg" alt="Card 3">
        </div>
        <!-- Card Gambar hero -->
        <div class="bento-card home-hero">
            <img src="assets/images/home-hero.jpg" alt="Hero Image">
        </div>
        <!-- Card quote & hashtag -->
        <div class="bento-card quote-card">
            <div class="romaji">しんきいってん</div>
            <div class="japanese">「心機一転」</div>
            <div class="quote">
                “changing one’s attitude; turning over a new leaf; getting a fresh start”
            </div>
            <!-- Hashtag utama bidang -->
            <div class="chip-row">
                <div class="chip">#WEBDEV</div>
                <div class="chip">#UI/UX</div>
                <div class="chip">#COMPSCI</div>
            </div>
        </div>
    </div>
</body>
</html>
