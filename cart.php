<?php 
session_start(); 

// --- LOGIQUE D'AJOUT AU PANIER ---
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
    
    $name = isset($_POST['product_name']) ? $_POST['product_name'] : 'Service';
    $img = isset($_POST['product_img']) ? $_POST['product_img'] : '';
    
    // RÉCUPÉRATION INTELLIGENTE (Prix + Option)
    $rawOption = isset($_POST['product_price']) ? $_POST['product_price'] : '0|Standard';
    $parts = explode('|', $rawOption);
    
    $price = isset($parts[0]) ? floatval($parts[0]) : 0;        
    $optionLabel = isset($parts[1]) ? $parts[1] : 'Standard';   

    $newItem = [
        'name' => $name,
        'price' => $price,
        'img' => $img,
        'option' => $optionLabel
    ];

    if (!isset($_SESSION['cart'])) { $_SESSION['cart'] = []; }
    $_SESSION['cart'][] = $newItem;

    header("Location: cart.php");
    exit();
}

// --- LOGIQUE POUR VIDER ---
if(isset($_GET['action']) && $_GET['action'] == 'clear') {
    unset($_SESSION['cart']);
    header("Location: cart.php");
    exit();
}

// --- GÉNÉRATION DE L'E-MAIL PRÉ-REMPLI ---
$mailtoLink = "#";
$mailBodyRaw = ""; // On garde le texte brut pour le bouton "Copier"

if(!empty($_SESSION['cart'])) {
    $mailSubject = "Demande de prestation - Elo Prod";
    $mailBodyRaw = "Salut Léo,\n\nJe suis intéressé(e) par tes prestations. Voici les éléments que j'ai sélectionnés sur ton site :\n\n";
    
    $totalMail = 0;
    foreach($_SESSION['cart'] as $item) {
        $totalMail += $item['price'];
        $opt = isset($item['option']) ? $item['option'] : '';
        $mailBodyRaw .= "- " . $item['name'] . " (" . $opt . ") : " . $item['price'] . "€\n";
    }
    
    $mailBodyRaw .= "\nBudget estimé : " . $totalMail . "€\n\n";
    $mailBodyRaw .= "Voici quelques détails sur mon projet / ma marque : \n[ÉCRIRE ICI]\n\n";
    $mailBodyRaw .= "Dans l'attente de ton retour !";
    
    // On encode le texte pour le lien mailto
    $mailtoLink = "mailto:elosamapro@gmail.com?subject=" . rawurlencode($mailSubject) . "&body=" . rawurlencode($mailBodyRaw);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Panier - Elo Prod</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/jpeg" href="img/eloprod.jpg">
    <style>
        .cart-table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        .cart-table th { text-align: left; padding: 15px; border-bottom: 2px solid #333; color: #db2777; font-family: 'Montserrat', sans-serif; }
        .cart-table td { padding: 15px; border-bottom: 1px solid rgba(255,255,255,0.05); }
        .total-box { text-align: right; font-size: 1.5rem; font-weight: bold; margin-top: 20px; width: 100%; font-family: 'Montserrat', sans-serif;}
        .empty-cart { text-align: center; padding: 50px; color: #a1a1aa; width: 100%; }
        
        .cart-actions { margin-top: 40px; display: flex; flex-direction: column; align-items: flex-end; gap: 15px; width: 100%; }
        .action-buttons { display: flex; gap: 15px; flex-wrap: wrap; justify-content: flex-end; }
        
        .btn-secondary {
            display: inline-flex; align-items: center; justify-content: center; line-height: 1;
            background: transparent; color: #fff; padding: 14px 30px; border-radius: 50px;
            font-weight: 700; font-family: 'Montserrat', sans-serif; text-transform: uppercase;
            font-size: 0.9rem; text-decoration: none; border: 2px solid rgba(255,255,255,0.2); cursor: pointer;
            transition: all 0.3s;
        }
        .btn-secondary:hover { border-color: #db2777; color: #db2777; background: rgba(219, 39, 119, 0.05); }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <main id="main-content">
        <div class="content-bar fade-in-up">
            <h2>Votre Panier</h2>
        </div>

        <div class="intro-box fade-in-up" style="border-top: none;">
            <?php if(empty($_SESSION['cart'])): ?>
                <div class="empty-cart">
                    <p>Votre panier est vide pour le moment.</p>
                    <a href="catalog.php" class="btn" style="margin-top: 20px;">Voir les offres</a>
                </div>
            <?php else: ?>
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>Service</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $total = 0;
                        foreach($_SESSION['cart'] as $item): 
                            $total += $item['price'];
                        ?>
                        <tr>
                            <td>
                                <strong style="color: #fff;"><?php echo htmlspecialchars($item['name']); ?></strong><br>
                                <span style="font-size:0.85rem; color:#a1a1aa; font-style:italic;">
                                    <?php echo isset($item['option']) ? htmlspecialchars($item['option']) : 'Option standard'; ?>
                                </span>
                            </td>
                            <td style="font-weight: bold; color: #fff;"><?php echo htmlspecialchars($item['price']); ?> €</td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="total-box">
                    Total : <span style="color: #db2777;"><?php echo $total; ?> €</span>
                </div>

                <div class="cart-actions">
                    <div class="action-buttons">
                        <button onclick="copyToClipboard()" class="btn-secondary" id="copyBtn">Copier pour Insta/TikTok</button>
                        
                        <a href="<?php echo $mailtoLink; ?>" target="_blank" class="btn">Valider & Envoyer par Mail</a>
                    </div>
                    
                    <a href="cart.php?action=clear" style="color: #a1a1aa; text-decoration: underline; font-size: 0.85rem; margin-top: 10px;">Vider le panier</a>
                </div>
                
                <textarea id="hiddenMailText" style="display:none;"><?php echo htmlspecialchars($mailBodyRaw); ?></textarea>
            <?php endif; ?>
        </div>
    </main>

    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>
    
    <script>
        // Fonction pour copier le récapitulatif
        function copyToClipboard() {
            var copyText = document.getElementById("hiddenMailText");
            copyText.style.display = "block"; 
            copyText.select();
            document.execCommand("copy");
            copyText.style.display = "none";
            
            var btn = document.getElementById("copyBtn");
            btn.innerHTML = "Copié ! ✅";
            btn.style.borderColor = "#db2777";
            btn.style.color = "#db2777";
            
            setTimeout(function() {
                btn.innerHTML = "Copier pour Insta/TikTok";
            }, 3000);
        }
    </script>
</body>
</html>