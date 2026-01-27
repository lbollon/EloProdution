<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Réalisations - Elo Production</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <main id="main-content">
        
        <div class="hero-title fade-in-up">
            <h1>RÉALISATIONS VIDÉO</h1>
            <span class="subtitle">Publicités, Clips, Contenu Social Media</span>
        </div>

        <div class="video-grid fade-in-up">
            
            <article class="video-card">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card-content">
                    <h3>Clip "Midnight City"</h3>
                    <p class="project-tags">Montage • Étalonnage • VFX</p>
                    <a href="contact.php" class="btn">Demander un devis</a>
                </div>
            </article>

            <article class="video-card">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/ScMzIvxBSi4" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card-content">
                    <h3>Publicité Restaurant</h3>
                    <p class="project-tags">Tournage • Montage Dynamique</p>
                    <a href="contact.php" class="btn">Demander un devis</a>
                </div>
            </article>

            <article class="video-card">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/LXb3EKWsInQ" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card-content">
                    <h3>Vlog Voyage Japon</h3>
                    <p class="project-tags">Storytelling • Sound Design</p>
                    <a href="contact.php" class="btn">Demander un devis</a>
                </div>
            </article>

        </div>

    </main>

    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>

</body>
</html>