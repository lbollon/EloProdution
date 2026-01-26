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
            <li><a href="catalog.php" aria-current="page">Offres</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <main>
        <h3>Services</h3>
        <h2>Nos Offres de Production</h2>
        
        <div class="catalog-grid">

            <article class="photo">
                <img src="img/prod-reels.jpg" alt="Photo">
                <h3>Photos</h3>
            </article>

            <article class="Video">
                <img src="img/prod-event.jpg" alt="Vidéo">
                <h3>Vidéos</h3>
            </article>

            <article class="Montage">
                <img src="img/prod-corp.jpg" alt="Montage">
                <h3>Montage</h3>
             </article>

             <article class="Videophoto">
                <img src="img/prod-corp.jpg" alt="Vidéos plus Photos">
                <h3>Vidéo + Photos</h3>
             </article>
             
             <article class="videomontage">
                <img src="img/prod-corp.jpg" alt="Vidéo plus montage">
                <h3>Vidéo + Montage</h3>
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