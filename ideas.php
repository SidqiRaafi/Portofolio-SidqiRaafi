<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ideas | Portfolio</title>
    <!-- CSS untuk layout halaman ideas & header navbar -->
    <link rel="stylesheet" href="assets/css/ideas.css">
    <link rel="stylesheet" href="assets/css/header.css">
</head>
<body>
    <!-- Efek mouse stars pada halaman -->
    <script src="assets/js/mousetrail.js"></script>
    
    <!-- Navbar -->
    <nav class="navbar">
        <a href="index.php" class="nav-link inactive">HOME</a>
        <a href="ideas.php" class="nav-link active">IDEAS</a>
        <a href="projects.php" class="nav-link inactive">PROJECT</a>
        <a href="about.php" class="nav-link inactive">ABOUT</a>
        <a href="contact.php" class="nav-link contact">CONTACT ME</a>
    </nav>
    
    <!-- Header bar untuk judul dan notifikasi submit ide -->
    <div class="ideas-header-bar">
        <span class="chip-header">USERS SUGGESTIONS / IDEAS</span>
        <div id="popup">Idea Submitted!</div>
    </div>
    
    <!-- Kontainer utama untuk list ide di kiri dan form di kanan -->
    <div class="ideas-container">
        <!-- Tab kiri: daftar ide/saran user -->
        <div class="left-tab">
            <div id="ideas-list"></div>
        </div>
        <!-- Tab kanan: form submit ide -->
        <div class="right-tab">
            <span class="chip-form-header">IDEAS FORM</span>
            <form id="ideas-form" autocomplete="off">
                <div class="label-title">TITLE</div>
                <input type="text" id="title" name="title" maxlength="30" placeholder="Insert Title..." required>
                <div class="label-descriptions">DESCRIPTIONS</div>
                <textarea id="descriptions" name="descriptions" maxlength="150" placeholder="Insert Descriptions..." required></textarea>
                <button type="submit" class="submit-btn">SUBMIT</button>
            </form>
        </div>
    </div>

    <!-- Script untuk logic AJAX/DOM ideas -->
    <script src="assets/js/ideas.js"></script>
</body>
</html>
