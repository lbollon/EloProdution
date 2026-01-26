<?php 
session_start(); 

// Logique simple d'ajout au panier (Simulation)
if(isset($_POST['add_to_cart'])) {
    $product = [
        'id' => $_POST['product_id'],
        'name' => $_POST['product_name'],
        'price' => $_POST['product_price']
    ];
    $_SESSION['cart'][] = $product;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offres - Elo Production</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .price-tag { font-size: 1.5rem; font-weight: 900; color: #db2777; margin: 15px 0; display: block;}
        .catalog-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px; }
        .product-card { 
            background: var(--bg-card); backdrop-filter: blur(10px); 
            border: 1px solid rgba(255,255,255,0.05); border-radius: 20px; padding: 30px; 
            transition: transform 0.3s; display: flex; flex-direction: column; justify-content: space-between;
        }
        .product-card:hover { transform: translateY(-10px); border-color: rgba(219, 39, 119, 0.3); }
        .product-img { width: 100%; height: 200px; object-fit: cover; border-radius: 10px; margin-bottom: 20px; background: #111; }
    </style>
</head>
<body>

    <?php include 'header.php'; // On va créer ce petit fichier pour éviter de copier-coller le menu partout ?>

    <main>
        <div class="content-bar fade-in-up">
            <h2>Mes Prestations</h2>
        </div>

        <div class="catalog-grid">
            
            <article class="product-card fade-in-up">
                <div>
                    <img src="https://placehold.co/600x400/1e1e24/db2777?text=Montage+Short" alt="Montage Vidéo Court" class="product-img">
                    <h3>Pack Réseaux Sociaux</h3>
                    <p style="color: #a1a1aa; margin-top:10px;">Montage dynamique type TikTok/Reels. Sous-titres animés, sound design et color grading inclus.</p>
                </div>
                <div>
                    <span class="price-tag">À partir de 150€</span>
                    <form method="post">
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="product_name" value="Pack Réseaux Sociaux">
                        <input type="hidden" name="product_price" value="150">
                        <button type="submit" name="add_to_cart" class="btn" style="width:100%">Ajouter au panier</button>
                    </form>
                </div>
            </article>

            <article class="product-card fade-in-up" style="transition-delay: 0.1s;">
                <div>
                    <img src="https://placehold.co/600x400/1e1e24/db2777?text=Vlog+Youtube" alt="Montage Youtube" class="product-img">
                    <h3>Montage YouTube</h3>
                    <p style="color: #a1a1aa; margin-top:10px;">Derushage complet, storytelling, transitions fluides et étalonnage cinéma.</p>
                </div>
                <div>
                    <span class="price-tag">À partir de 350€</span>
                    <form method="post">
                        <input type="hidden" name="product_id" value="2">
                        <input type="hidden" name="product_name" value="Montage YouTube">
                        <input type="hidden" name="product_price" value="350">
                        <button type="submit" name="add_to_cart" class="btn" style="width:100%">Ajouter au panier</button>
                    </form>
                </div>
            </article>

            <article class="product-card fade-in-up" style="transition-delay: 0.2s;">
                <div>
                    <img src="https://placehold.co/600x400/1e1e24/db2777?text=Shooting" alt="Tournage" class="product-img">
                    <h3>Shooting & Captation</h3>
                    <p style="color: #a1a1aa; margin-top:10px;">Demi-journée de tournage avec Sony A6700. Inclus éclairage et prise de son.</p>
                </div>
                <div>
                    <span class="price-tag">500€ / Jour</span>
                    <form method="post">
                        <input type="hidden" name="product_id" value="3">
                        <input type="hidden" name="product_name" value="Shooting Vidéo">
                        <input type="hidden" name="product_price" value="500">
                        <button type="submit" name="add_to_cart" class="btn" style="width:100%">Réserver</button>
                    </form>
                </div>
            </article>

        </div>
    </main>

    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>
</body>
</html>