<?php
session_start();
if($_SESSION['login'] != 'user' && $_SESSION['pass'] != '1234'){
    header('location:login.php');
}
else{
    session_unset();
    session_destroy();
    header('location:login.php');
}


?>