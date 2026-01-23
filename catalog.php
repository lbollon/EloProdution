<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestations - Elo Production</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/catalog.css">
</head>
<body>

    <header role="banner">
        <div class="logo">
            <a href="index.php"><img src="img/logo.png" alt="Logo Elo Production"></a>
        </div>
        <div class="site-title"><h1>ELO PRODUCTION</h1></div>
        <div class="cart-link">
            <a href="cart.php">Panier (<?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>)</a>
        </div>
    </header>

    <nav role="navigation">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="catalog.php" aria-current="page">Prestations</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <main>
        <h2>Nos Offres de Production</h2>
        
        <div class="catalog-grid">
            <article class="product-card">
                <img src="img/prod-reels.jpg" alt="Montage Reels/TikTok">
                <h3>Pack Social Media</h3>
                <p class="price">À partir de 150 €</p>
                <a href="product.php?id=1" class="btn">Voir détails</a>
            </article>

            <article class="product-card">
                <img src="img/prod-event.jpg" alt="Captation Événementielle">
                <h3>Captation Événement</h3>
                <p class="price">À partir de 450 €</p>
                <a href="product.php?id=2" class="btn">Voir détails</a>
            </article>

            <article class="product-card">
                <img src="img/prod-corp.jpg" alt="Film Corporate">
                <h3>Film Institutionnel</h3>
                <p class="price">À partir de 800 €</p>
                <a href="product.php?id=3" class="btn">Voir détails</a>
            </article>
        </div>
    </main>

    <footer role="contentinfo">
        <div class="copyright"><p>&copy; 2026 Elo Production.</p></div>
        <div class="footer-nav">
            <a href="contact.php">Contact</a>
            <a href="legal.php">Mentions Légales</a>
        </div>
    </footer>
</body>
</html>