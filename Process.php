<?php
include("Connection.php");

if(isset($_POST["register_button"])){
    echo "hello";
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
if(!empty($username) && !empty($password) && !is_numeric($username)){
    $query="INSERT INTO Users(username,password,email) VALUES ('$username',$password,'$email')";
    mysqli_query($connection, $query);
    header("Location:main.php");
    die();
}
    
}

if(isset($_POST["login_button"])){ 
    $username = $_POST["username"];
    $password = $_POST["password"];
    
}
?>