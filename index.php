<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elo Production - Vidéaste & Monteur</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <main id="main-content">
        
        <div class="hero-title fade-in-up">
            <h1>ELO PRODUCTION</h1>
            <span class="subtitle">Vidéaste & Monteur Freelance</span>
        </div>

        <div class="top-split-section fade-in-up">
            <section class="intro-box">
                <div class="content-bar">
                    <h2>Présentation</h2>
                </div>
                <p class="big-intro">Basé à Chambéry, je transforme vos rushes en or. Pas de bla-bla, que du résultat.</p>
                <p>Spécialisé dans le montage dynamique et la captation S-Log3 pour les réseaux sociaux.</p>
                <a href="catalog.php" class="btn">Voir mes offres</a>
            </section>

            <section class="narrative-box">
                <div class="narrative-step">
                    <h3>⚠️ Le Problème</h3>
                    <p>Vos vidéos manquent de rythme et ne convertissent pas ?</p>
                </div>
                <div class="narrative-step">
                    <h3>💡 Le Déclic</h3>
                    <p>Ce n'est pas le matériel, c'est la structure "No Excuses".</p>
                </div>
                <div class="narrative-step">
                    <h3>🚀 Le Résultat</h3>
                    <p>Des contenus captivants qui engagent votre audience.</p>
                </div>
            </section>
        </div>

        <section id="showreel-section" class="showreel-section fade-in-up">
            <div class="content-bar" style="margin: 0 auto 30px auto; display: inline-block;">
                <h2>Showreel 2026</h2>
            </div>
            <div class="video-container">
                <video controls poster="img/showreel-poster.jpg">
                    <source src="video/showreel.mp4" type="video/mp4">
                    Votre navigateur ne supporte pas la vidéo.
                </video>
            </div>
        </section>

        <section class="gear-section fade-in-up">
            <div class="content-bar">
                <h2>Mon Setup & Logiciels</h2>
            </div>
            <div class="gear-grid">
                <article class="gear-card">
                    <h3>📸 Caméra</h3><p>Sony A6700 + Sigma 18-50mm</p>
                </article>
                <article class="gear-card">
                    <h3>🎤 Audio & Stab</h3><p>DJI Mic 2 + Ronin</p>
                </article>
                <article class="gear-card">
                    <h3>💻 Post-Prod</h3><p>Premiere Pro + After Effects</p>
                </article>
            </div>
        </section>

    </main>

    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>

</body>
</html>