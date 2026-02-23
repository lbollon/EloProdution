<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elo Production - Vidéaste & Monteur</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/jpeg" href="img/eloprod.jpg">
</head>
<body>

    <?php include 'header.php'; ?>

    <main id="main-content">
        
        <div class="hero-title fade-in-up">
            <h1>ELO PRODUCTION</h1>
            <span class="subtitle">Vidéaste & Monteur Freelance</span>
        </div>

        <div class="top-split-section fade-in-up">
            <section class="intro-box bio-section">
                <div class="content-bar">
                    <h2>À propos de moi</h2>
                </div>
                
                <div class="bio-container">
                    <div class="bio-img-wrapper">
                        <img src="./img/PDP-ELO.webp" alt="Léo - Elo Production" class="profile-pic">
                    </div>
                    
                    <div class="bio-text">
                        <p class="big-intro" style="margin-bottom: 10px;">Moi c'est Léo, 19 ans.</p>
                        <p>Étudiant en BUT MMI à Chambéry le jour, créateur d'images la nuit. Je mixe ma technique universitaire et ma passion du terrain pour délivrer des vidéos qui impactent vraiment.</p>
                        <a href="catalog.php" class="btn" style="margin-top: 20px;">Voir mes offres</a>
                    </div>
                </div>
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
                <h2>Showreel 2026 [PROCHAINEMENT]</h2>
            </div>
            
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Showreel Elo Production" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                    <h3>🎤 Audio & Stab</h3><p>Shure Moovemic One + Canon</p>
                </article>
                <article class="gear-card">
                    <h3>💻 Post-Prod</h3><p>Suite Adobe</p>
                </article>
            </div>
        </section>

    </main>

    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>

</body>
</html>