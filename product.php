<?php 
session_start(); 

// 1. DÉFINITION DES DONNÉES
$products = [
    'montage' => [
        'title' => 'Montage Vidéo (Vlog/Docu)',
        // ✅ IMAGE CAMÉRA
        'img' => 'img/a6700.jpeg', 
        'desc' => 'Confiez-moi vos rushes. Je réalise un montage rythmé, avec étalonnage et sound design professionnel. Idéal pour YouTube ou présentation d\'entreprise.',
        'options' => [
            ['price' => 200, 'label' => 'Montage Simple (< 5 min) - 200€'],
            ['price' => 400, 'label' => 'Montage Avancé (5-15 min) - 400€'],
            ['price' => 800, 'label' => 'Documentaire / Complexe - 800€']
        ]
    ],
    'pack' => [
        'title' => 'Pack Social Media (Vertical)',
        // ✅ IMAGE CAMÉRA (au lieu du logo)
        'img' => 'img/a6700.jpeg', 
        'desc' => 'Boostez votre visibilité avec des formats courts (Reels/TikTok). Inclus : Derush, Sous-titres dynamiques, Hooks visuels.',
        'options' => [
            ['price' => 150, 'label' => 'Pack Découverte (1 Vidéo) - 150€'],
            ['price' => 600, 'label' => 'Pack Creator (5 Vidéos) - 600€'],
            ['price' => 1000, 'label' => 'Pack Empire (10 Vidéos) - 1000€']
        ]
    ],
    'shooting' => [
        'title' => 'Shooting & Captation',
        // ✅ IMAGE CAMÉRA
        'img' => 'img/a6700.jpeg', 
        'desc' => 'Je me déplace avec mon matériel (Sony A6700, Lumières, Micro) pour filmer votre projet. Qualité 4K S-Log3.',
        'options' => [
            ['price' => 350, 'label' => 'Demi-journée (4h) - 350€'],
            ['price' => 600, 'label' => 'Journée Complète (8h) - 600€'],
            ['price' => 150, 'label' => 'Heure supplémentaire - 150€']
        ]
    ]
];

// 2. RÉCUPÉRATION DU PRODUIT CHOISI
$productId = isset($_GET['id']) ? $_GET['id'] : 'pack'; 
$currentProduct = isset($products[$productId]) ? $products[$productId] : $products['pack'];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $currentProduct['title']; ?> - Elo Production</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <main id="main-content">
        
        <div class="content-bar fade-in-up">
            <a href="catalog.php" style="color: #db2777; text-decoration: none; font-weight: bold;">&larr; RETOUR AUX OFFRES</a>
        </div>

        <div class="product-container fade-in-up">
            
            <div class="product-image-box">
                <img src="<?php echo file_exists($currentProduct['img']) ? $currentProduct['img'] : 'img/a6700.jpeg'; ?>" 
                     alt="<?php echo $currentProduct['title']; ?>" 
                     class="main-prod-img">
            </div>

            <div class="product-info-box card-glass">
                <h1><?php echo $currentProduct['title']; ?></h1>
                
                <p class="description">
                    <?php echo $currentProduct['desc']; ?>
                </p>

                <form action="cart.php" method="POST" class="add-to-cart-form">
                    
                    <input type="hidden" name="product_name" value="<?php echo $currentProduct['title']; ?>">
                    <input type="hidden" name="product_img" value="<?php echo $currentProduct['img']; ?>">
                    <input type="hidden" name="add_to_cart" value="1">
                    
                    <label for="format-select">Choisir une option :</label>
                    <div class="custom-select-wrapper">
                        <select name="product_price" id="format-select" required>
                            <?php foreach($currentProduct['options'] as $option): ?>
                                <option value="<?php echo $option['price'] . '|' . $option['label']; ?>">
                                    <?php echo $option['label']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <button type="submit" class="btn" style="width: 100%; margin-top: 20px;">
                        Ajouter au panier
                    </button>
                </form>
            </div>
        </div>

    </main>

    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>

</body>
</html>