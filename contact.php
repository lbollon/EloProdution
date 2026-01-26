<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Elo Production</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .contact-container { display: flex; gap: 50px; flex-wrap: wrap;}
        .contact-info { flex: 1; min-width: 300px; }
        .contact-form { flex: 2; min-width: 300px; background: var(--bg-card); padding: 40px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.05); }
        
        /* Inputs Premium */
        input, textarea {
            width: 100%; background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.1);
            color: #fff; padding: 15px; border-radius: 8px; margin-bottom: 20px;
            font-family: inherit; transition: 0.3s;
        }
        input:focus, textarea:focus { border-color: #db2777; outline: none; background: rgba(0,0,0,0.5); }
        label { display: block; margin-bottom: 8px; font-weight: bold; color: #db2777; }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <main>
        <div class="content-bar fade-in-up">
            <h2>Discutons de votre projet</h2>
        </div>

        <div class="contact-container fade-in-up">
            
            <div class="contact-info">
                <h3 style="font-size: 1.5rem; margin-bottom: 20px;">Informations</h3>
                <p style="color: #a1a1aa; margin-bottom: 30px;">
                    Vous avez une idée ? Un projet ? Remplissez le formulaire et je vous réponds sous 24h.
                </p>
                <p><strong>Email :</strong> contact@eloprod.com</p>
                <p><strong>Lieu :</strong> Chambéry & alentours (73)</p>
                <p><strong>Instagram :</strong> @eloprod</p>
            </div>

            <form class="contact-form" action="" method="POST">
                <label for="name">Nom / Entreprise</label>
                <input type="text" id="name" name="name" required placeholder="Votre nom">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="exemple@mail.com">

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="6" required placeholder="Parlez-moi de votre projet..."></textarea>

                <button type="submit" class="btn">Envoyer le message</button>
            </form>

        </div>
    </main>

    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>
</body>
</html>