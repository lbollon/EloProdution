<div id="particles-js"></div>

<header role="banner">
    
    <div class="header-left">
        <a href="index.php" class="logo-link">
            <img src="img/eloprod.jpg" alt="Logo Elo Prod">
        </a>
    </div>

    <nav role="navigation" class="header-center">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="catalog.php">Offres</a></li>
            <li><a href="projects.php">Projets</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <div class="header-right">
        <a href="cart.php" class="cart-btn">
            <span>Panier</span>
            <span class="cart-count">
                <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>
            </span>
        </a>
    </div>

</header>