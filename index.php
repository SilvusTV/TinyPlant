<?php
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
<?php
include './account/connect.php'
?>
<header>
	<div class="top-band">
		<div class="right-top-bar">
			<div class="logo">
				<img id="logo" src="Asset/Svg/iny-Plant.svg">
			</div>
			<div class="left-side">
				<img id="Acc-connect" class="Icon-top-bar" src="Asset/Svg/user-thin.svg">
				<img class="Icon-top-bar" src="Asset/Svg/heart-thin.svg">
				<img class="Icon-top-bar" src="Asset/Svg/bag-shopping-thin.svg">
			</div>
		</div>
	</div>
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
        <div class="descriptif">
            <div class="titre-produit">Titre produit</div>
        </div>
    </div>
    <div class="hug-content">
        <div class="content-frame">
            <div class="prod">
                <img class="Product_Img" src="Asset/Product-files/prod_img1.jpg"/>
                <div class="id-produit">Id Produit</div>
            </div>

            <div class="prod">
                    <img class="Product_Img" src="Asset/Product-files/prod_img2.jpg" />

                <div class="id-produit2">Id Produit</div>
            </div>

            <div class="prod">
                <img class="Product_Img" src="Asset/Product-files/prod_img3.jpg" />

                <div class="id-produit3">Id Produit</div>
            </div>
        </div>

        <div class="content-frame">
            <div class="prod">
                <img class="Product_Img" src="Asset/Product-files/prod_img4.jpg" />

                <div class="id-produit4">Id Produit</div>
            </div>

            <div class="prod">
                <img class="Product_Img" src="Asset/Product-files/prod_img1.jpg" />

                <div class="id-produit5">Id Produit</div>
            </div>

            <div class="prod">
                <img class="Product_Img" src="Asset/Product-files/prod_img3.jpg" />

                <div class="id-produit6">Id Produit</div>
            </div>
        </div>
        <div class="content-frame">
            <div class="prod">
                <img class="Product_Img" src="Asset/Product-files/prod_img2.jpg" />

                <div class="id-produit7">Id Produit</div>
            </div>

            <div class="prod">
                <img class="Product_Img" src="Asset/Product-files/prod_img4.jpg" />

                <div class="id-produit8">Id Produit</div>
            </div>

            <div class="prod">
                <img class="Product_Img" src="rAsset/Product-files/prod_img2.jpg" />

                <div class="id-produit9">Id Produit</div>
            </div>
        </div>
    </div>

    <div class="window-product2">
        <div class="descriptif2">
            <div class="titre-produit">Titre produit</div>
        </div>
    </div>
</section>
<footer>
</body>
<script src="../Asset/Js/Modale_Acc.js"></script>
</html>