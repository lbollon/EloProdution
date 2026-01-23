<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mentions Légales - Elo Production</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/legal.css">
</head>
<body>

    <header>
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

    <main class="legal-content">
        <h1>Mentions Légales</h1>

        <section>
            <h2>1. Éditeur du site</h2>
            <p>Le site Elo Production est édité par [Nom Prénom], micro-entrepreneur.</p>
            <p>Siège social : Chambéry, 73000, France.</p>
            <p>SIRET : 000 000 000 00000</p>
        </section>

        <section>
            <h2>2. Hébergement</h2>
            <p>Le site est hébergé par [Nom de l'hébergeur].</p>
            <p>Adresse : [Adresse hébergeur].</p>
        </section>

        <section>
            <h2>3. Propriété intellectuelle</h2>
            <p>L'ensemble de ce site relève de la législation française et internationale sur le droit d'auteur et la propriété intellectuelle. Tous les droits de reproduction sont réservés.</p>
            <p>Les vidéos, photos et textes sont la propriété exclusive d'Elo Production.</p>
        </section>

        <section>
            <h2>4. Données personnelles</h2>
            <p>Les informations recueillies via le formulaire de contact sont destinées uniquement à la gestion des demandes clients.</p>
            <p>Conformément à la loi RGPD, vous disposez d'un droit d'accès et de rectification.</p>
        </section>
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