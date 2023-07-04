<link rel="stylesheet" href="Asset/Css/category.css">
<link rel="stylesheet" href="Asset/Css/main.css">
<?php

include './includer/topbar.php';
if (isset($_SESSION['user'])) {
    echo 'Connected';
} else {
    include './account/connect.php';
}

global $bdd;
include("./includer/db-connect.php");

if (!isset($_GET['category'])) {
    header('index.php');
} else {
$category_scope = $_GET['category'];
$categories = $bdd->prepare("SELECT * FROM Categories WHERE scope = ?");
$categories->execute(array($category_scope));
while ($category = $categories->fetch()) {
$categoryId = $category['id'];
echo '<span class="Tiles">' . $category['name'] . '</span>';
echo '<p>' . $category['description'] . '</p>';
?>

<section>
    <?php
    $products = $bdd->prepare("SELECT * FROM Products WHERE categori_id = ?");
    $products->execute(array($categoryId));
    while ($product = $products->fetch()) {
        echo '<a class="Prodcard" href="product.php?product=' . $product['id'] . '">';
        echo '<img class ="ProdImg" src="Asset/Product-files/' . $product['image_name'] . '">';
        echo '<span class="id">' . $product['name'] . '</span>';
        echo '<p class="desciption">' . $product['description'] . '</p>';
        echo '<p class="price">' . $product['price'] . '</p>';
        echo '</a>';
    }

    }

    } ?>
</section>
<script src="../Asset/Js/Modale_Acc.js"></script>
