<?php
session_start(); 
$_SESSION['login'] = $_POST['login'];
$_SESSION['pass'] = $_POST['pass'];

if($_SESSION['login'] != 'user' && $_SESSION['login'] != '1234')   
    header('location:login.php');   
    
else{
        echo "<h1>Profil</h1>";
        echo "<button><a href='deconnexion.php'>Se deconnecter</a></button>";
    }

?>