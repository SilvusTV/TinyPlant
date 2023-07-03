<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Asset/Css/Signup.css">
    <title>S'inscrire</title>
</head>
<body>
<form id="Form-acc" action="./functionnal/signup_function.php" method="post">
<div class="caption">
    <label for="last_name">Votre nom</label>
    <input type="text" placeholder="Deo" id="last_name" name="last_name_signup">
</div>
<div class="caption">
    <label for="last_name">Votre prenom</label>
    <input type="text" placeholder="John" id="first_name" name="first_name_signup">
</div>
<div class="caption">
    <label for="emailConnect">Email</label>
    <input type="email" placeholder="example@email.com" id="emailConnect" name="email_signup">
</div>
<div class="caption">
    <label for="emailConnect">Confirmation</label>
    <input type="email" placeholder="example@email.com" id="emailConnect" name="email_confirm_signup">
</div>
<div class="caption">
    <label for="passwordConnect">Mot de passe</label>
    <input type="password" placeholder="Mot de Passe" id="passwordConnect" name="password_signup">
</div>
<div class="caption">
    <label for="passwordConnect">Confirmez mot de passe</label>
    <input type="password" placeholder="Mot de Passe" id="passwordConnect" name="password_confirm_signup">
</div>

    <button id="submit" type="submit" name="submit">Se connecter</button>
    <span id="already">Vous avez déjà un compte ? <a href="./connect.php">Connectez-vous !</a></span>
</form>


</body>
</html>