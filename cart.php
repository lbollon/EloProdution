<?php 
session_start(); 

// Vider le panier
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
        .cart-table th { text-align: left; padding: 15px; border-bottom: 2px solid #333; color: #db2777; }
        .cart-table td { padding: 15px; border-bottom: 1px solid rgba(255,255,255,0.05); }
        .total-box { text-align: right; font-size: 1.5rem; font-weight: bold; margin-top: 20px; }
        .empty-cart { text-align: center; padding: 50px; color: #a1a1aa; }
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
                            <td><?php echo htmlspecialchars($item['name']); ?></td>
                            <td><?php echo htmlspecialchars($item['price']); ?> €</td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="total-box">
                    Total : <span style="color: #fff;"><?php echo $total; ?> €</span>
                </div>

                <div style="margin-top: 30px; display: flex; justify-content: space-between; align-items: center;">
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