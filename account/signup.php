<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Asset/Css/acc.css">
    <title>S'inscrire</title>
</head>
<body>
<form id="Form-acc" action="./functionnal/signup_function.php" method="post">
    <div class="card">
    <a class="singup">Inscription</a>
    <div class="inputBox">
        <input type="text"  id="last_name" name="last_name_signup">
        <span class="user">Nom</span>
    </div>
    <div class="inputBox">
        <input type="text"  id="first_name" name="first_name_signup">
        <span class="user">Prenom</span>
    </div>
    <div class="inputBox">
        <input type="email" id="emailConnect" name="email_signup">
        <span class="user">Email</span>
    </div>
    <div class="inputBox">
        <input type="email" id="emailConnect" name="email_confirm_signup">
        <span class="user">Comfirmation</span>
    </div>
    <div class="inputBox">
        <input type="password" id="passwordConnect" name="password_signup">
        <span class="user">Mot de passe</span>
    </div>
    <div class="inputBox">
        <input type="password"  id="passwordConnect" name="password_confirm_signup">
        <span class="user">Confirmation</span>
    </div>

        <button class="enter" id="submit" type="submit" name="submit">Connection</button>
        <a class="bot" href="./connect.php">Connectez-vous !</a>
        </div>
</form>


</body>
</html>