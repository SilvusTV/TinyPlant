<div class="top-band">
    <div class="right-top-bar">
        <div class="logo">
            <a href="./index.php">
                <img id="logo" src="Asset/Svg/iny-Plant.svg">
            </a>
        </div>
        <div class="left-side">
            <?php
            if (isset($_SESSION['user'])) {
                echo '<a href="account/profil.php" style="text-decoration: none;"><img id="Acc-connect" class="Icon-top-bar" src="Asset/Svg/user-thin.svg"></a>';
            } else {
                echo '<img id="Acc-connect" class="Icon-top-bar" src="Asset/Svg/user-thin.svg">';
            }
            ?>
            <img class="Icon-top-bar" src="Asset/Svg/heart-thin.svg">
            <img class="Icon-top-bar" src="Asset/Svg/bag-shopping-thin.svg">
        </div>
    </div>
</div>