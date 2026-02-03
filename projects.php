<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Elo Production</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <main id="main-content">
        
        <div class="hero-title fade-in-up">
            <h1>PORTFOLIO</h1>
            <span class="subtitle">Vidéos • Photos</span>
        </div>

        <div class="content-bar fade-in-up">
            <h2>PROJETS VIDÉO</h2>
            <p>Une sélection de mes réalisations (Montage, Tournage, VFX).</p>
        </div>

        <div class="video-grid fade-in-up">
            
            <article class="video-card">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Clip" allowfullscreen></iframe>
                </div>
                <div class="card-content">
                    <h3>Clip "Midnight City"</h3>
                    <p class="project-tags">MUSIC VIDEO</p>
                </div>
            </article>

            <article class="video-card">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/ScMzIvxBSi4" title="Pub" allowfullscreen></iframe>
                </div>
                <div class="card-content">
                    <h3>Publicité Restaurant</h3>
                    <p class="project-tags">COMMERCIAL</p>
                </div>
            </article>

            <article class="video-card">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/LXb3EKWsInQ" title="Vlog" allowfullscreen></iframe>
                </div>
                <div class="card-content">
                    <h3>Vlog Voyage Japon</h3>
                    <p class="project-tags">TRAVEL</p>
                </div>
            </article>

            <article class="video-card">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/T0QJRZni7F0" title="Immo" allowfullscreen></iframe>
                </div>
                <div class="card-content">
                    <h3>Villa de Luxe</h3>
                    <p class="project-tags">DRONE / IMMO</p>
                </div>
            </article>

            <article class="video-card">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Sport" allowfullscreen></iframe>
                </div>
                <div class="card-content">
                    <h3>CrossFit Motivation</h3>
                    <p class="project-tags">SPORT</p>
                </div>
            </article>

            <article class="video-card">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/K4TOrB7at0Y" title="Corp" allowfullscreen></iframe>
                </div>
                <div class="card-content">
                    <h3>Interview Corporate</h3>
                    <p class="project-tags">CORPORATE</p>
                </div>
            </article>

        </div>


        <div class="content-bar fade-in-up" style="margin-top: 80px;">
            <h2>GALERIE PHOTO</h2>
            <p>Shooting événementiel, portraits et paysages.</p>
        </div>

        <div class="photo-grid fade-in-up">
            <div class="photo-card">
                <img src="img/SiriusA6700-04.jpg" alt="Shooting Portrait" loading="lazy">
            </div>
            
            <div class="photo-card">
                <img src="img/SiriusA6700-05.jpg" alt="Shooting Portrait" loading="lazy">
            </div>
            
             <div class="photo-card">
                <img src="img/SiriusA6700-06.jpg" alt="Shooting Portrait" loading="lazy">
            </div>
            
             <div class="photo-card">
                <img src="img/SiriusA6700-09.jpg" alt="Shooting Portrait" loading="lazy">
            </div>
            
            <div class="photo-card">
                <img src="img/PoloA6700-08 - Copie.jpg" alt="Shooting Portrait" loading="lazy">
            </div>
            
            <div class="photo-card">
                <img src="img/PoloA6700-16 - Copie.jpg" alt="Shooting Portrait" loading="lazy">
            </div>
            
        </div>

        <div style="text-align: center; margin-top: 80px;" class="fade-in-up">
            <h3 style="margin-bottom: 20px;">Un projet en tête ?</h3>
            <a href="contact.php" class="btn">Me contacter</a>
        </div>

    </main>

    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>

</body>
</html>