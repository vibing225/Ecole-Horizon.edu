<?php
// Get current page for navigation highlighting
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- Elite Sticky Navigation -->
<nav class="navbar">
    <div class="container">
        <div class="nav-container">
            <!-- Logo -->
            <a href="./" class="logo">
                <div class="logo-icon">NH</div>
                <div class="logo-text">
                    <h1>Nouveaux Horizon</h1>
                    <p>École d'Excellence</p>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <ul class="nav-menu">
                <li><a href="./" class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Accueil</a></li>
                <li><a href="about.php" class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">À Propos</a></li>
                <li><a href="academics.php" class="nav-link <?php echo ($current_page == 'academics.php') ? 'active' : ''; ?>">Programmes</a></li>
                <li><a href="admissions.php" class="nav-link <?php echo ($current_page == 'admissions.php') ? 'active' : ''; ?>">Admissions</a></li>
                <li><a href="news.php" class="nav-link <?php echo ($current_page == 'news.php') ? 'active' : ''; ?>">Actualités</a></li>
                <li><a href="contact.php" class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
                <li><a href="contact.php" class="btn btn-luxury">Inscription</a></li>
            </ul>

            <!-- Mobile Menu Toggle -->
            <div class="mobile-menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <ul class="mobile-nav-menu">
                <li><a href="./" class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Accueil</a></li>
                <li><a href="about.php" class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">À Propos</a></li>
                <li><a href="academics.php" class="nav-link <?php echo ($current_page == 'academics.php') ? 'active' : ''; ?>">Programmes</a></li>
                <li><a href="admissions.php" class="nav-link <?php echo ($current_page == 'admissions.php') ? 'active' : ''; ?>">Admissions</a></li>
                <li><a href="news.php" class="nav-link <?php echo ($current_page == 'news.php') ? 'active' : ''; ?>">Actualités</a></li>
                <li><a href="contact.php" class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
                <li><a href="contact.php" class="btn btn-luxury" style="margin-top: 1rem;">Inscription</a></li>
            </ul>
        </div>
    </div>
</nav>