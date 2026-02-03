<?php 
session_start(); 

$messageSent = false;
$name = "";
$email = "";
$subject = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_contact'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']); 
    $messageDisplay = nl2br($message); 
    $messageSent = true;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Elo Production</title>
    <link rel="stylesheet" href="css/styles.css">
    
    <style>
        /* On force la suppression du style par défaut du navigateur */
        select#subject {
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            appearance: none !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            color: #fff !important;
            padding: 15px !important;
            border-radius: 8px !important;
            width: 100% !important;
            cursor: pointer;
            
            /* On remet une petite flèche rose manuellement */
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23db2777' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e") !important;
            background-repeat: no-repeat !important;
            background-position: right 1rem center !important;
            background-size: 1em !important;
        }
        
        /* Couleur de fond des options quand on clique */
        select#subject option {
            background-color: #050505 !important;
            color: white !important;
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <main id="main-content">
        
        <div class="hero-title fade-in-up">
            <h1>CONTACT</h1>
            <span class="subtitle">Discutons de votre projet</span>
        </div>

        <div class="contact-container fade-in-up">

            <?php if ($messageSent): ?>
                
                <div class="success-panel card-glass" style="width: 100%; max-width: 800px; margin: 0 auto; text-align: center;">
                    <div style="font-size: 4rem; margin-bottom: 20px;">✅</div>
                    <h2 style="color: #db2777; margin-bottom: 20px;">Message transmis !</h2>
                    <p style="font-size: 1.1rem; margin-bottom: 30px;">Merci <strong><?php echo $name; ?></strong>. Voici le récapitulatif :</p>
                    
                    <div style="text-align: left; background: rgba(0,0,0,0.3); padding: 20px; border-radius: 12px; margin-bottom: 30px; border: 1px solid rgba(255,255,255,0.1);">
                        <p><strong style="color: #db2777;">Sujet :</strong> <?php echo $subject; ?></p>
                        <p><strong style="color: #db2777;">Email :</strong> <?php echo $email; ?></p>
                        <hr style="border: 0; border-top: 1px solid rgba(255,255,255,0.1); margin: 15px 0;">
                        <p><strong style="color: #db2777;">Message :</strong><br><br><?php echo $messageDisplay; ?></p>
                    </div>

                    <a href="contact.php" class="btn">Nouveau message</a>
                </div>

            <?php else: ?>

                <div class="contact-info card-glass" style="flex: 1;">
                    <h3>Mes Coordonnées</h3>
                    <p style="color: #a1a1aa; margin-bottom: 20px;">N'hésitez pas à me contacter.</p>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 15px;"><strong style="color: #fff;">📍 Lieu :</strong> Chambéry (73)</li>
                        <li style="margin-bottom: 15px;"><strong style="color: #fff;">📧 Email :</strong> contact@eloproduction.fr</li>
                    </ul>
                </div>

                <form action="contact.php" method="POST" class="contact-form card-glass" style="flex: 2;">
                    
                    <label for="name">Votre Nom</label>
                    <input type="text" id="name" name="name" placeholder="Votre nom" required>

                    <label for="email">Votre Email</label>
                    <input type="email" id="email" name="email" placeholder="votre@email.com" required>

                    <label for="subject">Sujet</label>
                    <select id="subject" name="subject" required>
                        <option value="Devis Projet">Demande de devis</option>
                        <option value="Collaboration">Collaboration</option>
                        <option value="Autre">Autre demande</option>
                    </select>

                    <label for="message">Votre Message</label>
                    <textarea id="message" name="message" rows="6" placeholder="Votre message..." required></textarea>

                    <button type="submit" name="submit_contact" class="btn" style="width: 100%;">Envoyer</button>
                </form>

            <?php endif; ?>

        </div>

    </main>

    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>

</body>
</html>