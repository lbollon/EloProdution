<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Projets - Elo Production</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <main>
        
        <div class="content-bar fade-in-up">
            <h2>Réalisations Vidéo</h2>
            <p style="color: #a1a1aa; margin-top: 5px;">Publicités, Clips, Contenu Social Media</p>
        </div>

        <div class="video-grid">
            
            <div class="fade-in-up">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Projet 1" allowfullscreen></iframe>
                </div>
                <h3 style="margin-top: 15px; font-size: 1.2rem;">Clip "Midnight City"</h3>
                <p style="color: #db2777; font-size: 0.9rem;">Montage • Étalonnage</p>
            </div>

            <div class="fade-in-up" style="transition-delay: 0.1s;">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Projet 2" allowfullscreen></iframe>
                </div>
                <h3 style="margin-top: 15px; font-size: 1.2rem;">Publicité Restaurant</h3>
                <p style="color: #db2777; font-size: 0.9rem;">Tournage • Montage</p>
            </div>

        </div>

        <div class="content-bar fade-in-up" style="margin-top: 80px;">
            <h2>Photographie</h2>
            <p style="color: #a1a1aa; margin-top: 5px;">Shooting, Backstage & Portraits</p>
        </div>

        <div class="photo-gallery fade-in-up">
            <div class="photo-item">
                <img src="https://placehold.co/400x600/1e1e24/fff?text=Shooting+Mode" alt="Shooting Mode">
            </div>
            <div class="photo-item">
                <img src="https://placehold.co/600x400/111/fff?text=Backstage" alt="Backstage">
            </div>
            <div class="photo-item">
                <img src="https://placehold.co/400x500/222/fff?text=Portrait" alt="Portrait">
            </div>
            <div class="photo-item">
                <img src="https://placehold.co/500x500/1e1e24/db2777?text=Event" alt="Event">
            </div>
        </div>

    </main>

    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>
</body>
</html>