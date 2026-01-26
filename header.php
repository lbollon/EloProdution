<header role="banner">
    <div class="logo">
        <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
    </div>
    <div class="site-title"><h1>ELO PRODUCTION</h1></div>
    <div class="header-spacer" style="width: 50px;"></div>
</header>
<nav role="navigation">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="catalog.php">Offres</a></li>
        <li><a href="projects.php">Projets</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="cart.php" style="color: #db2777;">Panier (<?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>)</a></li>
    </ul>
</nav>