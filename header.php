<div id="particles-js"></div>

<header role="banner">
    <div class="header-left">
        <a href="index.php" class="logo-link">
            <img src="./img/eloprod.jpg" alt="Elo Production">
        </a>
    </div>

    <nav class="header-center">
        <ul>
            <li><a href="index.php" <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'class="active"' : ''; ?>>Accueil</a></li>
            <li><a href="catalog.php" <?php echo basename($_SERVER['PHP_SELF']) == 'catalog.php' ? 'class="active"' : ''; ?>>Offres</a></li>
            <li><a href="projects.php" <?php echo basename($_SERVER['PHP_SELF']) == 'projects.php' ? 'class="active"' : ''; ?>>Projets</a></li>
            <li><a href="contact.php" <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'class="active"' : ''; ?>>Contact</a></li>
        </ul>
    </nav>

    <div class="header-right" style="display: flex; align-items: center; gap: 20px;">
        
        <a href="cart.php" class="cart-btn">
            <span>Panier</span>
            <div class="cart-count">
                <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>
            </div>
        </a>

        <div class="burger-menu" id="burger-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>
</header>

<div class="mobile-nav-overlay" id="mobile-nav">
    <button class="close-menu">&times;</button>
    <nav>
        <a href="index.php">Accueil</a>
        <a href="catalog.php">Offres</a>
        <a href="projects.php">Projets</a>
        <a href="contact.php">Contact</a>
    </nav>
</div>