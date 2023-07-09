<?php
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
        echo '<h1>' . $category['name'] . '</h1>';
        echo '<p>' . $category['description'] . '</p>';
?>

<<<<<<< Updated upstream
        <p>---Liste des produits---</p>



        <?php
        $products = $bdd->prepare("SELECT * FROM Products WHERE categori_id = ?");
        $products->execute(array($categoryId));
        while ($product = $products->fetch()) {
            echo '<h1>' . $product['name'] . '</h1>';
            echo '<p>' . $product['description'] . '</p>';
            echo '<p>' . $product['price'] . '</p>';
        }
=======
<section>
    <?php
    $products = $bdd->prepare("SELECT * FROM Products WHERE categori_id = ?");
    $products->execute(array($categoryId));
    while ($product = $products->fetch()) {
        echo '<a class="cards" href="product.php?product=' . $product['id'] . '">';
        echo '<img class ="ProdImg" src="Asset/Product-files/' . $product['image_name'] . '">';
        echo '<span class="id">' . $product['name'] . '</span>';
        echo '<p class="desciption">' . $product['description'] . '</p>';
        echo '<p class="price">' . $product['price'] . '</p>';
        echo '</a>';
    }
>>>>>>> Stashed changes

    }

}
