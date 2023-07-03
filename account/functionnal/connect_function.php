<?php
global $bdd;
include("../../includer/db-connect.php");
session_start();

#Creation variable repétitive
$button= $_POST['submit'];
$mail= $_POST['email_connection'];
$pass= $_POST['password_connect'];

if(isset($button)){
    $message = "1(CaMarche)";
    if(!empty($mail) AND !empty($pass)){
        $mail = htmlspecialchars($mail);
        $pass = sha1($pass);

        $userExist = $bdd->prepare("SELECT * FROM `Users` WHERE email = ? AND password = ?");
        $userExist-> execute(array($mail, $pass));
        $user = $userExist->rowCount();
        if($user == 1){
            $_SESSION['user'] = $mail;
            $message="1";
//            header('Location: ../profil.php');
            header('Location: ../../index.php');
        }else{
            $message ="3(id/incorect credential)";
            header('Location: ../../index.php?messcode='.$message);
        }
    }else{
        $message = "2(champVide)";
        header('Location: ../../index.php?messcode='.$message);
    }
}else{
    $message="0(boutonMarchePas)";
    header('Location: ../../index.php?messcode='.$message);
}
