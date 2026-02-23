<?php 
session_start(); 

// DÉFINITION DES DONNÉES - 4 PILIERS (AVEC PRIX ADAPTÉS)
$products = [
    'vertical' => [
        'title' => 'Montage Vidéo Vertical',
        'img' => 'img/tournage3.jpg', 
        'desc' => 'Dérushage, sous-titres dynamiques, sound design et optimisation algorithmique. <br><br><em>Le volume de rushes et la complexité variant fortement, <strong>les tarifs s\'établissent sur devis</strong> après un premier échange sur votre projet.</em>',
        'options' => [
            ['price' => 'Devis', 'label' => '1 Vidéo - Sur devis'],
            ['price' => 'Devis', 'label' => 'Pack 4 Vidéos - Sur devis'],
            ['price' => 'Devis', 'label' => 'Pack 8 Vidéos - Sur devis']
        ]
    ],
    'horizontal' => [
        'title' => 'Montage Vidéo Horizontal',
        'img' => 'img/timeline.jpg', 
        'desc' => 'Structure narrative (Difficulté → Déclic → Résultat), color grading S-Log3 et mixage audio. <br><br><em>Chaque vidéo est unique. <strong>Le tarif s\'établit sur devis</strong> pour correspondre exactement à vos besoins et au temps de travail réel.</em>',
        'options' => [
            ['price' => 'Devis', 'label' => 'Vidéo Standard (< 10 min) - Sur devis'],
            ['price' => 'Devis', 'label' => 'Vidéo Avancée (10 - 25 min) - Sur devis'],
            ['price' => 'Devis', 'label' => 'Documentaire / Projet Complexe - Sur devis']
        ]
    ],
    'tournage' => [
        'title' => 'Tournage Vidéo',
        'img' => 'img/tournage1.jpg', 
        'desc' => 'Captation 4K S-Log3 avec matériel pro. Prise de son externe et stabilisation incluses. Idéal pour l\'automobile ou le sport (Frais de déplacement possibles depuis Chambéry).',
        'options' => [
            ['price' => 200, 'label' => 'Demi-journée (4h) - 200€'],
            ['price' => 350, 'label' => 'Journée Complète (8h) - 350€']
        ]
    ],
    'photo' => [
        'title' => 'Shooting Photo',
        'img' => 'img/PoloA6700-16 - Copie.jpg', 
        'desc' => 'Direction artistique, prise de vue et post-traitement haute définition. Une approche soignée pour mettre en valeur votre véhicule, votre image ou votre événement.',
        'options' => [
            ['price' => 90, 'label' => 'Session Courte (1h) - 15 photos livrées - 90€'],
            ['price' => 150, 'label' => 'Session Complète (2h) - 30 photos livrées - 150€'],
            ['price' => 300, 'label' => 'Couverture Événementielle (4h) - Galerie complète - 300€']
        ]
    ]
];

// RÉCUPÉRATION DU PRODUIT CHOISI
$productId = isset($_GET['id']) && isset($products[$_GET['id']]) ? $_GET['id'] : 'vertical'; 
$currentProduct = $products[$productId];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $currentProduct['title']; ?> - Elo Production</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/jpeg" href="img/eloprod.jpg">
</head>
<body>

    <?php include 'header.php'; ?>

    <main id="main-content" style="display: flex; flex-direction: column; justify-content: center;">
        
        <div style="max-width: 1100px; margin: 0 auto; width: 100%;">
            
            <div class="fade-in-up" style="margin-bottom: 30px;">
                <a href="catalog.php" style="color: #db2777; text-decoration: none; font-weight: bold; font-family: 'Montserrat', sans-serif; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">
                    &larr; Retour aux offres
                </a>
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
                    
                    <div class="trust-shield" style="margin-top: 20px; padding: 15px; background: rgba(255,255,255,0.05); border-radius: 8px; font-size: 0.85rem; color: #ccc;">
                        <p style="margin-bottom: 8px; font-weight: bold; color: #fff;">🤝 Comment on bosse :</p>
                        <ul style="margin-left: 15px; list-style-type: '✓ ';">
                            <li><strong>Sur-mesure :</strong> Les tarifs sont indicatifs. On discute et on valide un devis exact selon vos besoins.</li>
                            <li><strong>Méthode :</strong> Un rendu brut et percutant, pensé pour l'humain et l'algorithme.</li>
                            <li><strong>Tranquillité :</strong> 2 allers-retours de corrections inclus par projet pour valider le résultat.</li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>

    </main>

    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>

</body>
</html>