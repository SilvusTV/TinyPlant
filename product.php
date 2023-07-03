<link rel="stylesheet" href="Asset/Css/product.css">
<?php
global $bdd;
include("./includer/db-connect.php");

if (!isset($_GET['product'])) {
    header('index.php');
} else {
    $productId = $_GET['product'];
    $products = $bdd->prepare("SELECT * FROM Products WHERE id = ?");
    $products->execute(array($productId));
    while ($product = $products->fetch()) {
        echo '<span class="name">' . $product['name'] . '</span>';
        echo '<div class="container">';
        echo '<div class="min-container">';
        echo '<span class="desciption">' . $product['description'] . '</span>';
        echo '<span class="price">' . $product['price'] . '</span>';
        echo '</div>';
        echo '<img class ="ProdImg" src="Asset/Product-files/' . $product['image_name'] . '">';
        echo '</div>';
    }

}
