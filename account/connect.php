<link rel="stylesheet" href="../Asset/Css/Acc.css">
<form id="card" action="./functionnal/connect_function.php" method="post">
    <div class="inputBox">
        <label for="emailConnect">Email</label>
        <input type="email" placeholder="example@email.com" id="emailConnect" name="email_connection">
    </div>
    <div class=inputBox">
        <label for="passwordConnect">Mot de passe</label>
        <input type="password" placeholder="Mot de Passe" id="passwordConnect" name="password_connect">
    </div>
    <button id="submit" type="submit" name="submit">Se connecter</button>
    <span id="donthave">Vous n'avez pas de compte ? <a href="./signup.php">Inscrivez-vous !</a></span>
</form>
