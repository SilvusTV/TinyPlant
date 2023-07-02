<?php
global $bdd;
include("../../includer/db-connect.php");

#Creation variable repétitive
$button = $_POST['submit'];
$lastName = $_POST['last_name_signup'];
$firstName = $_POST['first_name_signup'];
$mail = $_POST['email_signup'];
$mailConf = $_POST['email_confirm_signup'];
$pass = $_POST['password_signup'];
$passConf = $_POST['password_confirm_signup'];

if(isset($button)){
    if (!empty($lastName) and !empty($firstName) and !empty($mail) and !empty($pass) and !empty($mailConf) and !empty($passConf)) {
        $lastName = htmlspecialchars($lastName);
        $firstName = htmlspecialchars($firstName);
        $mail = htmlspecialchars($mail);
        $mailConf = htmlspecialchars($mailConf);
        $pass = htmlspecialchars($pass);
        $passConf = htmlspecialchars($passConf);

        if ($mail == $mailConf) {
            if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {

                $mailExist = $bdd->prepare("SELECT email FROM Users WHERE email = ?");
                $mailExist->execute(array($mail));
                $mailExist = $mailExist->rowCount();
                if ($mailExist == 0) {
                    if ($pass === $pass) {
                        $message = "1";

                        $pass = sha1($pass);
                    } else {
                        $message = "9(passNonIdem)";
                    }
                } else {
                    $message = "8(mailExisteDeja)";
                }
            } else {
                $message = "7(mailNonValide)";
            }
        } else {
            $message = "6(mailNonIdem";
        }

    } else {
        $message = "2(champVide)";
    }
} else {
    $message = "0(boutonMarchePas)";
}

#Add bdd
if ($message == 1) {
    $newAccount = $bdd->prepare('INSERT INTO Users(last_name, first_name, email, password, state) VALUES(:ln, :fn, :email, :pass, 1)');
    $newAccount->execute([
        'ln' => $lastName,
        'fn' => $firstName,
        'email' => $mail,
        'pass' => $pass,
    ]);
}
header('Location: ../signup.php?messcode=' . $message)
?>