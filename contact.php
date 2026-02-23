<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Elo Prod</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/jpeg" href="img/eloprod.jpg">
</head>
<body>

    <?php include 'header.php'; ?>

    <main id="main-content">
        
        <div class="hero-title fade-in-up">
            <h1>CONTACT</h1>
            <span class="subtitle">On passe à l'action ?</span>
        </div>

        <div class="contact-hub fade-in-up">
            
            <div class="contact-intro">
                <h2>Discutons de ton projet</h2>
                <p>
                    Pas de formulaire impersonnel ici. Tu cherches un montage haute rétention, un sound design percutant ou un étalonnage S-Log3 aux petits oignons pour ta marque ou ta chaîne ?
                </p>
                <p>
                    <strong>Envoie-moi directement un message.</strong> Je réponds vite, avec la détermination d'un freelance qui a faim de gros projets et la flexibilité d'un étudiant.
                </p>
                
                <div class="location-box">
                    <p class="loc-title">📍 Chambéry (73) & Annecy (74)</p>
                    <p class="loc-sub">Disponible en remote dans toute la France.</p>
                </div>
            </div>

            <div class="social-links">
                
                <a href="mailto:elosamapro@gmail.com" target="_blank" class="social-card-link card-glass">
                    <div class="icon">✉️</div>
                    <div class="details">
                        <h3>Email</h3>
                        <p>Pour les devis et collaborations pro.<br>
                        <span style="color: #db2777; font-weight: 600; font-size: 0.9rem;">(elosamapro@gmail.com)</span></p>
                        <span class="click-hint">Écrire un mail ↗</span>
                    </div>
                </a>

                <a href="https://www.instagram.com/elo_prod/" target="_blank" class="social-card-link card-glass">
                    <div class="icon">📸</div>
                    <div class="details">
                        <h3>Instagram</h3>
                        <p>Passe en DM ! Vlogs, galères et hooks.</p>
                        <span class="click-hint">Ouvrir Instagram ↗</span>
                    </div>
                </a>

                <a href="https://www.tiktok.com/@elo_production" target="_blank" class="social-card-link card-glass">
                    <div class="icon">📱</div>
                    <div class="details">
                        <h3>TikTok</h3>
                        <p>L'envers du décor. (3 posts/semaine)</p>
                        <span class="click-hint">Ouvrir TikTok ↗</span>
                    </div>
                </a>

            </div>

        </div>

    </main>

    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>

</body>
</html>