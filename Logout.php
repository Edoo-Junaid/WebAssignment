<?php 
session_start();
    if(isset($_SESSION['userID'])){
        session_destroy();
        header('Location:LoginPage.php');
    }
    header('Location:LoginPage.php');