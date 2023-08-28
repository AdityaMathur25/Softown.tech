<?php
error_reporting(error_reporting() & ~E_NOTICE);
    session_start();
    //$username = $_POST['username'];
    //$_SESSION['username'] = $username;
    if(!isset($_SESSION["username"])) {
        header("Location: /SOFTOWN.TECH/Login/");
        exit();
    }
   // $_SESSION["username"] ?? " " ;
?>
