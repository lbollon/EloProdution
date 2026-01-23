<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact - Elo Production</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>

    <header role="banner">
        <div class="logo"><a href="index.php"><img src="img/logo.png" alt="Logo"></a></div>
        <div class="site-title"><h1>ELO PRODUCTION</h1></div>
        <div class="cart-link"><a href="cart.php">Panier (<?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>)</a></div>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="catalog.php">Prestations</a></li>
            <li><a href="contact.php" aria-current="page">Contact</a></li>
        </ul>
    </nav>

    <main class="contact-container">
        <div class="map-section">
            <h2>Localisation</h2>
            <div class="map-placeholder" role="img" aria-label="Carte montrant Chambéry, Savoie">
                <img src="img/map-chambery.jpg" alt="Plan de Chambéry">
                <p>Basé à Chambéry (73) - Déplacement en Savoie & Lyon</p>
            </div>
        </div>

        <div class="contact-details">
            <h2>Me Contacter</h2>
            <address>
                <p><strong>Email :</strong> <a href="mailto:contact@eloprod.com">contact@eloprod.com</a></p>
                <p><strong>Téléphone :</strong> <a href="tel:+33600000000">06 00 00 00 00</a></p>
            </address>

            <div class="social-links">
                <h3>Réseaux Sociaux</h3>
                <a href="https://instagram.com" target="_blank">
                    <img src="img/icon-insta.png" alt="Instagram">
                </a>
                <a href="https://tiktok.com" target="_blank">
                    <img src="img/icon-tiktok.png" alt="TikTok">
                </a>
                <a href="https://twitter.com" target="_blank">
                    <img src="img/icon-x.png" alt="X (Twitter)">
                </a>
            </div>
        </div>
    </main>

    <footer>
        <div class="copyright"><p>&copy; 2026 Elo Production.</p></div>
        <div class="footer-nav">
            <a href="contact.php">Contact</a>
            <a href="legal.php">Mentions Légales</a>
        </div>
    </footer>
</body>
</html>