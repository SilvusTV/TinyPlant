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
        echo '<h1>' . $product['name'] . '</h1>';
        echo '<p>' . $product['description'] . '</p>';
        echo '<p>' . $product['price'] . '</p>';
    }

}
