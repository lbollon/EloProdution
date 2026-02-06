<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Offres - Elo Production</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <main id="main-content">
        
        <div class="hero-title fade-in-up">
            <h1>MES OFFRES</h1>
            <span class="subtitle">Choisissez votre prestation</span>
        </div>

        <div class="catalog-grid fade-in-up">
            
            <div class="product-card">
                <img src="img/a6700.jpeg" alt="Montage Vidéo" class="product-img">
                <div class="card-content">
                    <h3>Montage Vidéo</h3>
                    <p>Pour vos vlogs, documentaires ou vidéos corporate. Montage dynamique et narratif.</p>
                    <span class="price-tag">À partir de 200€</span>
                    <a href="product.php?id=montage" class="btn">Configurer</a>
                </div>
            </div>

            <div class="product-card">
                <img src="img/a6700.jpeg" alt="Pack Social Media" class="product-img">
                <div class="card-content">
                    <h3>Pack Réseaux Sociaux</h3>
                    <p>Shorts, Reels, TikToks. Optimisé pour la rétention et l'algorithme.</p>
                    <span class="price-tag">À partir de 150€</span>
                    <a href="product.php?id=pack" class="btn">Configurer</a>
                </div>
            </div>

            <div class="product-card">
                <img src="img/a6700.jpeg" alt="Shooting Vidéo" class="product-img">
                <div class="card-content">
                    <h3>Shooting / Captation</h3>
                    <p>Je viens filmer votre événement, clip ou interview avec mon matériel.</p>
                    <span class="price-tag">À partir de 350€</span>
                    <a href="product.php?id=shooting" class="btn">Configurer</a>
                </div>
            </div>

        </div>

    </main>

    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>

</body>
</html>