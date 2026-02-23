<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Offres - Elo Production</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/jpeg" href="img/eloprod.jpg">
</head>
<body>

    <?php include 'header.php'; ?>

    <main id="main-content">
        
        <div class="hero-title fade-in-up">
            <h1>MES OFFRES</h1>
            <span class="subtitle">Choisissez votre prestation</span>
        </div>

        <div class="catalog-grid fade-in-up" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
            
            <div class="product-card">
                <img src="img/tournage3.jpg" alt="Montage Vertical" class="product-img"> 
                <div class="card-content">
                    <span style="font-size: 0.8rem; color: #db2777; text-transform: uppercase; font-weight: bold;">Post-Production</span>
                    <h3 style="margin-top: 5px;">Montage Vidéo Vertical</h3>
                    <p>TikTok, Reels, Shorts. Montage nerveux, hooks chiffrés et sous-titres dynamiques pour exploser la rétention.</p>
                    <span class="price-tag" style="color: #fff;">Sur devis</span>
                    <a href="product.php?id=vertical" class="btn">Me contacter</a>
                </div>
            </div>

            <div class="product-card">
                <img src="img/timeline.jpg" alt="Montage Horizontal" class="product-img"> 
                <div class="card-content">
                    <span style="font-size: 0.8rem; color: #db2777; text-transform: uppercase; font-weight: bold;">Post-Production</span>
                    <h3 style="margin-top: 5px;">Montage Vidéo Horizontal</h3>
                    <p>YouTube, Vlogs, Documentaires. Storytelling complet, étalonnage S-Log3 pro et sound design immersif.</p>
                    <span class="price-tag" style="color: #fff;">Sur devis</span>
                    <a href="product.php?id=horizontal" class="btn">Me contacter</a>
                </div>
            </div>

            <div class="product-card">
                <img src="img/tournage1.jpg" alt="Tournage Vidéo" class="product-img"> 
                <div class="card-content">
                    <span style="font-size: 0.8rem; color: #db2777; text-transform: uppercase; font-weight: bold;">Terrain</span>
                    <h3 style="margin-top: 5px;">Tournage Vidéo</h3>
                    <p>Je me déplace (Sport, Auto, Event). Captation 4K brute pour un rendu premium au cœur de l'action.</p>
                    <span class="price-tag">Dès 200€</span>
                    <a href="product.php?id=tournage" class="btn">Réserver une date</a>
                </div>
            </div>

            <div class="product-card">
                <img src="img/PoloA6700-16 - Copie.jpg" alt="Shooting Photo" class="product-img"> 
                <div class="card-content">
                    <span style="font-size: 0.8rem; color: #db2777; text-transform: uppercase; font-weight: bold;">Terrain</span>
                    <h3 style="margin-top: 5px;">Shooting Photo</h3>
                    <p>Portraits professionnels, sport, véhicules ou produits. Des clichés percutants livrés prêts à l'emploi.</p>
                    <span class="price-tag">Dès 90€</span>
                    <a href="product.php?id=photo" class="btn">Voir les forfaits</a>
                </div>
            </div>

        </div>

    </main>

    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>

</body>
</html>