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
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Profil</title>
</head>
<body>
<?php
if (!isset($_SESSION['user'])) {
    header('./connect.php');
} else {
    $getProfil = $bdd->prepare("SELECT * FROM `Users` WHERE email = ?");
    $getProfil->execute(array($_SESSION['user']));
	foreach ($getProfil as $profil){
        ?>

		<form action="functionnal/profil_function.php" method="post">
			<div class="phone number">
				<label for="phone_number">Numéro de téléphone</label>
				<input type="number" id="phone_number" name="phone_number" value="<?php $profil['phone_number'] ?>">
			</div>
			<div class="name">

				<label for="first_name">Prénom</label><input type="text" id="first_name" name="first_name" value="<?php $profil['first_name'] ?>">
				<label for="last_name">Nom</label><input type="text" id="last_name" name="last_name" value="<?php $profil['last_name'] ?>">

			</div>
			<div class="address">

				<label for="zipCode">Code Postal</label><input type="text" id="zipCode" name="zipCode" value="<?php $profil['zipCode'] ?>">
				<label for="city">Ville</label><input type="text" id="city" name="city" value="<?php $profil['city'] ?>">
				<label for="address">Adresse</label><input type="text" id="address" name="address" value="<?php $profil['address'] ?>">

			</div>
			<button type="submit">Enregirstrer</button>

		</form>

        <?php
    }
}
?>

</body>
</html>
