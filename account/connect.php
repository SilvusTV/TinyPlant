<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
</head>
<body>
<form action="./functionnal/connect_function.php" method="post">
    <label for="emailConnect">Email</label>
    <input type="email" placeholder="example@email.com" id="emailConnect" name="email_connection">

    <label for="passwordConnect">Mot de passe</label>
    <input type="password" placeholder="Mot de Passe" id="passwordConnect" name="password_connect">
    <button type="submit" name="submit">Se connecter</button>
</form>
<span>Vous n'avez pas de compte ? <a href="./signup.php">Inscrivez-vous !</a></span>

</body>
</html>