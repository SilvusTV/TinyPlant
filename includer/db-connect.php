<?php 
$bdd = new PDO('mysql:host=localhost;dbname=tinyPlant-dev', 'root', '66666666', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$bdd->exec("SET CHARACTER SET utf8"); 
?>