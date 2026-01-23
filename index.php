<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elo Production - Vidéaste & Monteur Freelance</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

    <header role="banner">
        <div class="logo">
            <a href="index.php" aria-label="Retour à l'accueil">
                <img src="img/logo.png" alt="Logo Elo Production">
            </a>
        </div>
        <div class="site-title">
            <h1>ELO PRODUCTION</h1>
        </div>
        <div class="cart-link">
            <a href="cart.php" aria-label="Voir le panier">
                Panier (<?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>)
            </a>
        </div>
    </header>

    <nav role="navigation" aria-label="Menu principal">
        <ul>
            <li><a href="index.php" aria-current="page">Accueil</a></li>
            <li><a href="catalog.php">Prestations</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <main id="main-content">
        <section class="hero">
            <h2>Donnez une dimension cinéma à votre communication</h2>
            <p>Montage vidéo • Captation • Stratégie Social Media</p>
            <a href="catalog.php" class="btn">Voir mes offres</a>
        </section>

        <section class="showreel" aria-labelledby="showreel-title">
            <h2 id="showreel-title">Showreel 2026</h2>
            <div class="video-container">
                <video controls poster="img/showreel-poster.jpg">
                    <source src="video/showreel.mp4" type="video/mp4">
                    Votre navigateur ne supporte pas la vidéo.
                </video>
            </div>
        </section>

        <section class="narrative">
            <article>
                <h3>Le Problème</h3>
                <p>Vous passez des heures à filmer mais vos vidéos manquent de rythme et ne convertissent pas.</p>
            </article>
            <div class="arrow" aria-hidden="true">⬇</div>
            <article>
                <h3>Le Déclic</h3>
                <p>Ce n'est pas le matériel qui compte, c'est l'histoire et la structure "No Excuses".</p>
            </article>
            <div class="arrow" aria-hidden="true">⬇</div>
            <article>
                <h3>Le Résultat</h3>
                <p>Des contenus captivants, montés sur Sony A6700 en S-Log3, qui engagent votre audience.</p>
            </article>
        </section>

        <section class="social-proof">
            <h2>Études de Cas</h2>
            <div class="case-study">
                <div class="before">
                    <h4>Avant</h4>
                    <img src="img/case1-before.jpg" alt="Image terne avant étalonnage">
                </div>
                <div class="after">
                    <h4>Après</h4>
                    <img src="img/case1-after.jpg" alt="Image cinéma après étalonnage">
                </div>
                <p>Client : Restaurant Le Savoie - +40% de réservations via Instagram.</p>
            </div>
        </section>

        <section class="about-snippet">
            <h2>Mon Approche</h2>
            <p>Basé à Chambéry, je transforme vos rushes en or. Pas de bla-bla, que du résultat.</p>
            <h3>Mon Setup</h3>
            <ul class="gear-list">
                <li>Sony A6700</li>
                <li>Stabilisateur Ronin</li>
                <li>Micro HF DJI</li>
            </ul>
        </section>

        <div class="cta-calendly">
            <a href="https://calendly.com/eloprod" target="_blank" class="btn-secondary">Réserver un appel découverte</a>
        </div>
    </main>

    <footer role="contentinfo">
        <div class="copyright">
            <p>&copy; 2026 Elo Production. Tous droits réservés.</p>
        </div>
        <div class="footer-nav">
            <a href="contact.php">Contact</a>
            <a href="legal.php">Mentions Légales</a>
        </div>
    </footer>

</body>
</html>