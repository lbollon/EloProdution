<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail Prestation - Elo Production</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/product.css">
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
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <main class="product-detail-container">
        <div class="product-image">
            <img src="img/prod-reels-large.jpg" alt="Pack Social Media en action">
        </div>
        
        <div class="product-info">
            <h2>Pack Social Media (Shorts/Reels)</h2>
            <p class="description">
                Boostez votre visibilité avec des montages dynamiques optimisés pour la rétention. 
                Inclus : Derush, Sound Design, Sous-titres animés, Colorimétrie S-Log3.
            </p>
            
            <form action="cart.php" method="POST" class="add-to-cart-form">
                <input type="hidden" name="product_name" value="Pack Social Media">
                <input type="hidden" name="product_img" value="img/prod-reels.jpg">
                
                <label for="format">Format & Durée :</label>
                <select name="product_price" id="format">
                    <option value="150">Pack 1 Vidéo (150€)</option>
                    <option value="600">Pack 5 Vidéos (600€)</option>
                    <option value="1000">Pack 10 Vidéos (1000€)</option>
                </select>

                <div class="price-display">Prix affiché au panier</div>
                
                <button type="submit" name="add_to_cart" class="btn">Ajouter au panier</button>
            </form>
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