<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentions Légales - Elo Production</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <main>
        <div class="content-bar fade-in-up">
            <h2>Mentions Légales</h2>
        </div>

        <div class="intro-box fade-in-up">
            <h3 style="color: #db2777; margin-bottom: 15px;">1. Éditeur du site</h3>
            <p style="margin-bottom: 20px;">
                <strong>ELO PRODUCTION</strong><br>
                Entrepreneur Individuel<br>
                Siège social : [Ton Adresse], 73000 Chambéry<br>
                Email : contact@eloprod.com<br>
                SIRET : [Ton Numéro SIRET]
            </p>

            <h3 style="color: #db2777; margin-bottom: 15px;">2. Hébergement</h3>
            <p style="margin-bottom: 20px;">
                Le site est hébergé par :<br>
                [Nom de l'hébergeur, ex: OVH, Hostinger]<br>
                Adresse de l'hébergeur
            </p>

            <h3 style="color: #db2777; margin-bottom: 15px;">3. Propriété Intellectuelle</h3>
            <p>
                L’ensemble de ce site relève de la législation française et internationale sur le droit d’auteur et la propriété intellectuelle. 
                Tous les droits de reproduction sont réservés, y compris pour les documents téléchargeables et les représentations iconographiques et photographiques.
            </p>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>