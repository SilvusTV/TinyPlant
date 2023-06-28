<?php
session_start();
if(isset($_SESSION['user'])){
    session_destroy();
    echo'desstroy';
}
header('Location: ../../index.php');
?>