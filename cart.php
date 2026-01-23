<?php 
session_start(); 

// Initialisation du panier si inexistant
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Ajout au panier (Traitement Formulaire)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    $product = [
        'name' => htmlspecialchars($_POST['product_name']),
        'price' => floatval($_POST['product_price']),
        'img' => htmlspecialchars($_POST['product_img']),
        'id' => uniqid() // ID unique temporaire pour la suppression
    ];
    $_SESSION['cart'][] = $product;
}

// Suppression du panier
if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $remove_id) {
            unset($_SESSION['cart'][$key]);
            break;
        }
    }
    // Réindexé le tableau
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}

// Calcul du total
$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['price'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Panier - Elo Production</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>

    <header>
        <div class="logo"><a href="index.php"><img src="img/logo.png" alt="Logo"></a></div>
        <div class="site-title"><h1>ELO PRODUCTION</h1></div>
        <div class="cart-link"><a href="cart.php">Panier (<?php echo count($_SESSION['cart']); ?>)</a></div>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="catalog.php">Prestations</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <main>
        <h2>Votre Panier</h2>

        <?php if (empty($_SESSION['cart'])): ?>
            <p class="empty-msg">Votre panier est vide. <a href="catalog.php">Retourner aux prestations</a>.</p>
        <?php else: ?>
            <div class="cart-list">
                <?php foreach ($_SESSION['cart'] as $item): ?>
                    <div class="cart-item">
                        <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['name']; ?>">
                        <div class="item-details">
                            <h3><?php echo $item['name']; ?></h3>
                            <p class="item-price"><?php echo number_format($item['price'], 2, ',', ' '); ?> €</p>
                        </div>
                        <a href="cart.php?remove=<?php echo $item['id']; ?>" class="btn-remove" aria-label="Supprimer <?php echo $item['name']; ?>">X</a>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="cart-summary">
                <h3>Total : <?php echo number_format($total, 2, ',', ' '); ?> €</h3>
                <button class="btn btn-checkout">Payer la commande</button>
            </div>
        <?php endif; ?>
    </main>

    <footer>
        <div class="copyright"><p>&copy; 2026 Elo Production.</p></div>
        <div class="footer-nav">
            <a href="contact.php">Contact</a>
            <a href="legal.php">Mentions Légales</a>
        </div>
    </footer>
</body>
</html>