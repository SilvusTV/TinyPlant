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
    <link rel="stylesheet" href="Asset/Css/Main.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tiny Plant</title>
</head>
<<<<<<< Updated upstream
<button id="btn-Acc">A delete</button>
<body>
=======
<body>
<?php
include './account/connect.php'
?>
 <header>    <div class="top-band">
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
     while ($category = $categories->fetch()){
         echo '<a href="./category.php?category='. $category['scope'] .'">'.$category['name'].'</a>';
     }
     ?>
     </div>
>>>>>>> Stashed changes
        <div class="window-product">
            <div id="Firt"></div>
            <div class="descriptif">
                <div class="titre-produit">Titre produit</div>
            </div>
        </div>

        <div class="hug-content">
            <div class="content-frame">
                <div class="prod-1">
                    <img class="rectangle-1" src="rectangle-1.png" />

                    <div class="id-produit">Id Produit</div>
                </div>

                <div class="prod-2">
                    <img class="rectangle-12" src="rectangle-12.png" />

                    <div class="id-produit2">Id Produit</div>
                </div>

                <div class="prod-3">
                    <img class="rectangle-13" src="rectangle-13.png" />

                    <div class="id-produit3">Id Produit</div>
                </div>
            </div>

            <div class="content-frame2">
                <div class="prod-1">
                    <img class="rectangle-14" src="rectangle-14.png" />

                    <div class="id-produit4">Id Produit</div>
                </div>

                <div class="prod-2">
                    <img class="rectangle-15" src="rectangle-15.png" />

                    <div class="id-produit5">Id Produit</div>
                </div>

                <div class="prod-3">
                    <img class="rectangle-16" src="rectangle-16.png" />

                    <div class="id-produit6">Id Produit</div>
                </div>
            </div>

            <div class="content-frame3">
                <div class="prod-1">
                    <img class="rectangle-17" src="rectangle-17.png" />

                    <div class="id-produit7">Id Produit</div>
                </div>

                <div class="prod-2">
                    <img class="rectangle-18" src="rectangle-18.png" />

                    <div class="id-produit8">Id Produit</div>
                </div>

                <div class="prod-3">
                    <img class="rectangle-19" src="rectangle-19.png" />

                    <div class="id-produit9">Id Produit</div>
                </div>
            </div>
        </div>

        <div class="window-product2">
            <div class="descriptif2">
                <div class="titre-produit">Titre produit</div>
            </div>
        </div>
<<<<<<< Updated upstream
=======
 </section>
<footer>
>>>>>>> Stashed changes

        <div class="real-top">
            <?php
            $categories = $bdd->query('SELECT * FROM Categories');
            while ($category = $categories->fetch()){
                echo '<a href="./category.php?category='. $category['scope'] .'">'.$category['name'].'</a>';
            }
            ?>
        </div>
</body>
<script src="../Asset/Js/Modale_Acc.js"></script>
</html>