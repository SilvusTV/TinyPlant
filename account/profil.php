<?php
global $bdd;
include("../includer/db-connect.php");
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../Asset/Css/profile.css">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Profil</title>
</head>
<body>
<?php
//if (!isset($_SESSION['user'])) {
//    header('./connect.php');
//} else {
//    $getProfil = $bdd->prepare("SELECT * FROM `Users` WHERE email = ?");
//    $getProfil->execute(array($_SESSION['user']));
//	foreach ($getProfil as $profil){
//        ?>
<!---->
<!--		<form action="functionnal/profil_function.php" method="post">-->
<!--			<div class="phone number">-->
<!--				<label for="phone_number">Numéro de téléphone</label>-->
<!--				<input type="number" id="phone_number" name="phone_number" value="--><?php //$profil['phone_number'] ?><!--">-->
<!--			</div>-->
<!--			<div class="name">-->
<!---->
<!--				<label for="first_name">Prénom</label><input type="text" id="first_name" name="first_name" value="--><?php //$profil['first_name'] ?><!--">-->
<!--				<label for="last_name">Nom</label><input type="text" id="last_name" name="last_name" value="--><?php //$profil['last_name'] ?><!--">-->
<!---->
<!--			</div>-->
<!--			<div class="address">-->
<!---->
<!--				<label for="zipCode">Code Postal</label><input type="text" id="zipCode" name="zipCode" value="--><?php //$profil['zipCode'] ?><!--">-->
<!--				<label for="city">Ville</label><input type="text" id="city" name="city" value="--><?php //$profil['city'] ?><!--">-->
<!--				<label for="address">Adresse</label><input type="text" id="address" name="address" value="--><?php //$profil['address'] ?><!--">-->
<!---->
<!--			</div>-->
<!--			<button type="submit">Enregirstrer</button>-->
<!---->
<!--		</form>-->
<!---->
<!--        --><?php
//    }
//}
//?>

<div class="hub-perso">
	<div class="left">
		<div class="front-resume">
			<div class="Bar_Top_recap">
				<svg class="rectangle-4" width="381" height="91" viewBox="0 0 381 91" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g filter="url(#filter0_d_29_269)">
						<path d="M0 45.5C0 20.371 20.371 0 45.5 0H335.5C360.629 0 381 20.371 381 45.5C381 70.629 360.629 91 335.5 91H45.5C20.371 91 0 70.629 0 45.5Z" fill="#070707" fill-opacity="0.1" shape-rendering="crispEdges"/>
						<path d="M0.5 45.5C0.5 20.6472 20.6472 0.5 45.5 0.5H335.5C360.353 0.5 380.5 20.6472 380.5 45.5C380.5 70.3528 360.353 90.5 335.5 90.5H45.5C20.6472 90.5 0.5 70.3528 0.5 45.5Z" stroke="#9672A5" shape-rendering="crispEdges"/>
					</g>
				</svg>
				<span class="name-profile">Name Profile</span>
			</div>
			<div class="Circle_hub">
				<svg class="cmd" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_29_280)"><path d="M2.43135 0.375C2.43135 0.16875 2.56811 0 2.73527 0H4.16748C4.88929 0 5.51232 0.628125 5.65668 1.5H22.4786C23.4587 1.5 24.1805 2.625 23.9602 3.80156L22.5052 11.4703C22.281 12.6562 21.4225 13.5 20.4347 13.5H7.55618L7.90948 15.7359C8.05004 16.6172 8.67308 17.25 9.40248 17.25H21.5782C21.7454 17.25 21.8821 17.4188 21.8821 17.625C21.8821 17.8312 21.7454 18 21.5782 18H9.40248C8.38435 18 7.51059 17.1094 7.31304 15.8812L5.06024 1.65938C4.97667 1.12969 4.60057 0.75 4.16748 0.75H2.73527C2.56811 0.75 2.43135 0.58125 2.43135 0.375ZM7.43841 12.75H20.4347C21.1413 12.75 21.753 12.15 21.9163 11.3016L23.3637 3.63281C23.4967 2.925 23.0636 2.25 22.4748 2.25H5.77445L7.43841 12.75ZM9.11756 23.25C9.43997 23.25 9.74919 23.092 9.97717 22.8107C10.2052 22.5294 10.3332 22.1478 10.3332 21.75C10.3332 21.3522 10.2052 20.9706 9.97717 20.6893C9.74919 20.408 9.43997 20.25 9.11756 20.25C8.79514 20.25 8.48593 20.408 8.25795 20.6893C8.02996 20.9706 7.90188 21.3522 7.90188 21.75C7.90188 22.1478 8.02996 22.5294 8.25795 22.8107C8.48593 23.092 8.79514 23.25 9.11756 23.25ZM9.11756 19.5C9.60118 19.5 10.065 19.7371 10.407 20.159C10.749 20.581 10.9411 21.1533 10.9411 21.75C10.9411 22.3467 10.749 22.919 10.407 23.341C10.065 23.7629 9.60118 24 9.11756 24C8.63393 24 8.17012 23.7629 7.82814 23.341C7.48617 22.919 7.29405 22.3467 7.29405 21.75C7.29405 21.1533 7.48617 20.581 7.82814 20.159C8.17012 19.7371 8.63393 19.5 9.11756 19.5ZM21.2743 21.75C21.2743 21.3522 21.1462 20.9706 20.9182 20.6893C20.6903 20.408 20.381 20.25 20.0586 20.25C19.7362 20.25 19.427 20.408 19.199 20.6893C18.971 20.9706 18.843 21.3522 18.843 21.75C18.843 22.1478 18.971 22.5294 19.199 22.8107C19.427 23.092 19.7362 23.25 20.0586 23.25C20.381 23.25 20.6903 23.092 20.9182 22.8107C21.1462 22.5294 21.2743 22.1478 21.2743 21.75ZM18.2351 21.75C18.2351 21.1533 18.4272 20.581 18.7692 20.159C19.1112 19.7371 19.575 19.5 20.0586 19.5C20.5423 19.5 21.0061 19.7371 21.348 20.159C21.69 20.581 21.8821 21.1533 21.8821 21.75C21.8821 22.3467 21.69 22.919 21.348 23.341C21.0061 23.7629 20.5423 24 20.0586 24C19.575 24 19.1112 23.7629 18.7692 23.341C18.4272 22.919 18.2351 22.3467 18.2351 21.75ZM0.303919 6H4.55878C4.72593 6 4.8627 6.16875 4.8627 6.375C4.8627 6.58125 4.72593 6.75 4.55878 6.75H0.303919C0.136763 6.75 0 6.58125 0 6.375C0 6.16875 0.136763 6 0.303919 6ZM0.303919 9H5.16662C5.33377 9 5.47053 9.16875 5.47053 9.375C5.47053 9.58125 5.33377 9.75 5.16662 9.75H0.303919C0.136763 9.75 0 9.58125 0 9.375C0 9.16875 0.136763 9 0.303919 9ZM0.303919 12H5.77445C5.94161 12 6.07837 12.1687 6.07837 12.375C6.07837 12.5813 5.94161 12.75 5.77445 12.75H0.303919C0.136763 12.75 0 12.5813 0 12.375C0 12.1687 0.136763 12 0.303919 12Z" fill="white"/></g>
				</svg>
				<svg class="favorite" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M18.45 2.70469C16.4391 2.44219 14.4281 3.29531 13.2375 4.93594L12.3 6.225C12.2297 6.32344 12.1172 6.37969 11.9953 6.37969C11.8734 6.37969 11.7609 6.32344 11.6906 6.225L10.7531 4.93594C9.5625 3.3 7.55156 2.44219 5.54062 2.70469C2.81719 3.06094 0.75 5.38594 0.75 8.13281C0.75 9.55312 1.30313 10.9172 2.29219 11.9391L11.625 21.5812C11.7281 21.6891 11.8687 21.75 12.0187 21.75C12.1687 21.75 12.3094 21.6891 12.4125 21.5812L21.7125 11.9391C22.6969 10.9172 23.25 9.55312 23.25 8.1375C23.25 5.39062 21.1828 3.06094 18.45 2.70469ZM12.6328 4.49062C13.9875 2.62969 16.2703 1.65937 18.5484 1.95937C21.6469 2.3625 24 5.00625 24 8.1375C24 9.75 23.3719 11.3016 22.2562 12.4594L12.9469 22.1016C12.7031 22.3547 12.3656 22.5 12.0141 22.5C11.6625 22.5 11.325 22.3594 11.0812 22.1063L1.75313 12.4594C0.628125 11.3016 0 9.75 0 8.13281C0 5.00625 2.35313 2.3625 5.45156 1.95937C7.72969 1.66406 10.0172 2.62969 11.3672 4.49062L12 5.3625L12.6328 4.49062Z" fill="white"/>
				</svg>
				<svg class="account" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_29_284)"><path d="M18 6C18 4.60761 17.3679 3.27226 16.2426 2.28769C15.1174 1.30312 13.5913 0.75 12 0.75C10.4087 0.75 8.88258 1.30312 7.75736 2.28769C6.63214 3.27226 6 4.60761 6 6C6 7.39239 6.63214 8.72774 7.75736 9.71231C8.88258 10.6969 10.4087 11.25 12 11.25C13.5913 11.25 15.1174 10.6969 16.2426 9.71231C17.3679 8.72774 18 7.39239 18 6ZM5.14286 6C5.14286 4.4087 5.8653 2.88258 7.15127 1.75736C8.43723 0.632141 10.1814 0 12 0C13.8186 0 15.5628 0.632141 16.8487 1.75736C18.1347 2.88258 18.8571 4.4087 18.8571 6C18.8571 7.5913 18.1347 9.11742 16.8487 10.2426C15.5628 11.3679 13.8186 12 12 12C10.1814 12 8.43723 11.3679 7.15127 10.2426C5.8653 9.11742 5.14286 7.5913 5.14286 6ZM0.857143 22.6078C0.857143 22.9641 1.18393 23.25 1.59107 23.25H22.4089C22.8161 23.25 23.1429 22.9641 23.1429 22.6078C23.1429 18.4078 19.2482 15 14.4482 15H9.55179C4.75179 15 0.857143 18.4078 0.857143 22.6078ZM0 22.6078C0 17.9906 4.275 14.25 9.55179 14.25H14.4482C19.725 14.25 24 17.9906 24 22.6078C24 23.3766 23.2875 24 22.4089 24H1.59107C0.7125 24 0 23.3766 0 22.6078Z" fill="white"/></g>
				</svg>
			</div>

			<div class="Bar_Bot_recap">
				<svg class="rectangle-42" width="381" height="91" viewBox="0 0 381 91" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g filter="url(#filter0_d_29_274)">
						<path d="M0 45.5C0 20.371 20.371 0 45.5 0H335.5C360.629 0 381 20.371 381 45.5C381 70.629 360.629 91 335.5 91H45.5C20.371 91 0 70.629 0 45.5Z" fill="#070707" fill-opacity="0.1" shape-rendering="crispEdges"/>
						<path d="M0.5 45.5C0.5 20.6472 20.6472 0.5 45.5 0.5H335.5C360.353 0.5 380.5 20.6472 380.5 45.5C380.5 70.3528 360.353 90.5 335.5 90.5H45.5C20.6472 90.5 0.5 70.3528 0.5 45.5Z" stroke="#9672A5" shape-rendering="crispEdges"/>
					</g>
				</svg>
				<div class="disconnect">Disconnect</div>
			</div>
		</div>
	</div>
	<div class="form">
		<div class="help">
			<div class="auto">
				<div class="top">
					<div class="livraison">
						<span class="adresse-de-livraison">Adresse de livraison</span>
						<span class="aucune-adresse-de-livraison">Aucune adresse de livraison</span>
					</div>
				</div>
				<div class="Bot">
					<div class="Form">
						<span class="nom">Nom :</span>
						<span class="e-mail">E-mail :</span>
						<span class="date-de-naissance">Date de naissance :</span>
						<span class="total-des-d-pense">Total des dépense :</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="top-band">
		<div class="right-top-bar">
			<div class="frame-1">
				<img class="logo" src="../Asset/Svg/iny-Plant.svg">
				<div class="Right_part">
					<img class="Icon-top-bar" src="../Asset/Svg/user-thin.svg">
					<img class="Icon-top-bar" src="../Asset/Svg/heart-thin.svg">
					<img class="Icon-top-bar" src="../Asset/Svg/bag-shopping-thin.svg">
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-bar"></div>
</div>

</body>
</html>
