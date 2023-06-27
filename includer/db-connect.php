<?php 
$bdd = new PDO('mysql:host=pvsdspjsilvus.mysql.db;dbname=pvsdspjsilvus', 'pvsdspjsilvus', 'Papymina974', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$bdd->exec("SET CHARACTER SET utf8"); 
?>