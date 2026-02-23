<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Elo Prod</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/jpeg" href="img/eloprod.jpg">
</head>
<body>

    <?php include 'header.php'; ?>

    <main id="main-content">
        
        <div class="hero-title fade-in-up">
            <h1>PORTFOLIO</h1>
            <span class="subtitle">Montage • Étalonnage • Shootings</span>
        </div>

        <div class="content-bar fade-in-up">
            <h2>FORMAT PAYSAGE (16:9)</h2>
            <p>Vlogs, documentaires et clips. Focus sur le storytelling et l'étalonnage (S-Log3).</p>
        </div>

        <div class="video-grid fade-in-up">
            
            <article class="video-card">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/ceVdmmUJF-4" title="Clip" allowfullscreen></iframe>
                </div>
                <div class="card-content">
                    <h3>Défi 24H Rally Vidéo</h3>
                    <p class="project-tags">COURT METRAGE</p>
                </div>
            </article>

            <article class="video-card">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/vvKz9Onw1WU" title="Pub" allowfullscreen></iframe>
                </div>
                <div class="card-content">
                    <h3>Interview d'un artiste</h3>
                    <p class="project-tags">COMMERCIAL</p>
                </div>
            </article>

            <article class="video-card">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/X35ATtGqvsQ" title="Vlog" allowfullscreen></iframe>
                </div>
                <div class="card-content">
                    <h3>Vidéo cinématique vacances</h3>
                    <p class="project-tags">CINNEMATIQUE</p>
                </div>
            </article>

        </div>


        <div class="content-bar fade-in-up" style="margin-top: 100px;">
            <h2>FORMAT VERTICAL (9:16)</h2>
            <p>Shorts, Reels & TikToks. Hooks impactants et montage haute rétention pour engager l'algorithme.</p>
        </div>

        <div class="video-grid fade-in-up">
            
            <article class="video-card">
                <div class="video-wrapper-vertical">
                    <iframe src="https://www.youtube.com/embed/k_lw33oPcC0" title="Short 1" allowfullscreen></iframe>
                </div>
                <div class="card-content">
                    <h3>StoryTelling</h3>
                    <p class="project-tags">REEL / TIKTOK</p>
                </div>
            </article>

            <article class="video-card">
                <div class="video-wrapper-vertical">
                    <iframe src="https://www.youtube.com/embed/Y6U6W0UdasM" title="Short 2" allowfullscreen></iframe>
                </div>
                <div class="card-content">
                    <h3>StoryTelling</h3>
                    <p class="project-tags">REEL / TIKTOK</p>
                </div>
            </article>

            <article class="video-card">
                <div class="video-wrapper-vertical">
                    <iframe src="https://www.youtube.com/embed/4AI39ZXo508" title="Short 3" allowfullscreen></iframe>
                </div>
                <div class="card-content">
                    <h3>Informatif</h3>
                    <p class="project-tags">REEL / TIKTOK</p>
                </div>
            </article>

        </div>


        <div class="content-bar fade-in-up" style="margin-top: 100px;">
            <h2>GALERIE PHOTO</h2>
            <p>Shooting événementiel, portraits et paysages.</p>
        </div>

        <div class="photo-grid fade-in-up">
            <div class="photo-card"><img src="img/SiriusA6700-04.jpg" alt="Shooting Portrait" loading="lazy"></div>
            <div class="photo-card"><img src="img/SiriusA6700-05.jpg" alt="Shooting Portrait" loading="lazy"></div>
            <div class="photo-card"><img src="img/SiriusA6700-06.jpg" alt="Shooting Portrait" loading="lazy"></div>
            <div class="photo-card"><img src="img/SiriusA6700-09.jpg" alt="Shooting Portrait" loading="lazy"></div>
            <div class="photo-card"><img src="img/PoloA6700-08 - Copie.jpg" alt="Shooting Portrait" loading="lazy"></div>
            <div class="photo-card"><img src="img/PoloA6700-16 - Copie.jpg" alt="Shooting Portrait" loading="lazy"></div>
        </div>

        <div style="text-align: center; margin-top: 100px;" class="fade-in-up">
            <h3 style="margin-bottom: 20px;">Un projet en tête ?</h3>
            <a href="contact.php" class="btn">On passe à l'action</a>
        </div>

    </main>

    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>

</body>
</html>