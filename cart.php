<?php 
session_start(); 

// --- LOGIQUE D'AJOUT AU PANIER ---
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
    
    $name = isset($_POST['product_name']) ? $_POST['product_name'] : 'Service';
    $img = isset($_POST['product_img']) ? $_POST['product_img'] : '';
    
    // 1. RÉCUPÉRATION INTELLIGENTE (Prix + Option)
    // On reçoit "150|Heure supplémentaire"
    $rawOption = isset($_POST['product_price']) ? $_POST['product_price'] : '0|Standard';
    
    // On découpe la chaîne grâce au séparateur '|'
    $parts = explode('|', $rawOption);
    
    $price = isset($parts[0]) ? floatval($parts[0]) : 0;        // 150
    $optionLabel = isset($parts[1]) ? $parts[1] : 'Standard';   // Heure supplémentaire...

    $newItem = [
        'name' => $name,
        'price' => $price,
        'img' => $img,
        'option' => $optionLabel // 2. On stocke le nom de l'option
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
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Panier - Elo Production</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .cart-table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        .cart-table th { text-align: left; padding: 15px; border-bottom: 2px solid #333; color: #db2777; font-family: 'Montserrat', sans-serif; }
        .cart-table td { padding: 15px; border-bottom: 1px solid rgba(255,255,255,0.05); }
        .total-box { text-align: right; font-size: 1.5rem; font-weight: bold; margin-top: 20px; width: 100%; font-family: 'Montserrat', sans-serif;}
        .empty-cart { text-align: center; padding: 50px; color: #a1a1aa; width: 100%; }
        .cart-actions { margin-top: 30px; display: flex; justify-content: space-between; align-items: center; width: 100%; }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <main>
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
                                <strong><?php echo htmlspecialchars($item['name']); ?></strong><br>
                                <span style="font-size:0.85rem; color:#a1a1aa; font-style:italic;">
                                    <?php echo isset($item['option']) ? htmlspecialchars($item['option']) : 'Option standard'; ?>
                                </span>
                            </td>
                            <td style="font-weight: bold;"><?php echo htmlspecialchars($item['price']); ?> €</td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="total-box">
                    Total : <span style="color: #fff;"><?php echo $total; ?> €</span>
                </div>

                <div class="cart-actions">
                    <a href="cart.php?action=clear" style="color: #a1a1aa; text-decoration: underline;">Vider le panier</a>
                    <a href="contact.php" class="btn">Valider le devis</a>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>
</body>
</html>