<?php
session_start();
global $bdd;
include("./includer/db-connect.php");
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="Asset/Css/main.css">
    <link rel="stylesheet" href="Asset/Css/button.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tiny Plant</title>
</head>
<body>
<header>
    <?php
    include './includer/topbar.php';
    if (isset($_SESSION['user'])) {
        echo 'Connected';
    } else {
        include './account/connect.php';
    }
    ?>
</header>
<section id="Mid">
    <div class="real-top">
        <?php
        $categories = $bdd->query('SELECT * FROM Categories');
        while ($category = $categories->fetch()) {
            echo '<a class="btn-gnr" href="./category.php?category=' . $category['scope'] . '">' . $category['name'] . '</a>';
        }
        ?>
    </div>
    <div class="window-product">
        <div class="titre-produit">
            <h1>Tiny Plant</h1>
            <p>"La nature à portée de clic !"</p>
        </div>
    </div>
    <div class="hug-content">
        <div class="content-frame">
            <?php
            $products = $bdd->prepare("SELECT * FROM Products");
            $products->execute();
            while ($product = $products->fetch()) {
                echo '<a class="Prodcard" href="product.php?product='.$product['id'].'">';
                echo '<div class="prod">';
                echo ' <img class="Product_Img" src="Asset/Product-files/'.$product['image_name'].'"/>';
                echo '<span class="name">' . $product['name'] . '</span>';
                echo '</div>';
                echo '</a>';
            }
            ?>
        </div>
    </div>

    <div class="window-product2">
        <div class="right">
            <a href="#">Nous contacter</a>
            <a href="#">Votre profil</a>
        </div>
        <div class="left">
            <h1>Tiny Plant</h1>
            <p>"La nature à portée de clic !"</p>
        </div>
    </div>
</section>
</body>
<script src="../Asset/Js/Modale_Acc.js"></script>
</html>