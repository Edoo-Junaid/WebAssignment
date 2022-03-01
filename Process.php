<?php

include("Connection.php");

if (isset($_POST["register_button"])) {
    echo "hello";
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    if (!empty($username) && !empty($password) && !is_numeric($username)) {
        $query = "INSERT INTO Users(username,password,email) VALUES ('$username',$password,'$email')";
        mysqli_query($connection, $query);
        header("Location:main.php");
        die();
    }
}

if (isset($_POST["login_button"])) {
    if (isset($_SESSION["username"])) {
        session_destroy();
    }
    session_start();
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "Select * from Users WHERE username='$username' limit 1";
    $result = mysqli_query($connection, $query);
    if ($result) {
        if ($result && (mysqli_num_rows($result) > 0)) {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['password'] = $password) {
                $_SESSION['username'] = $username;

                $_SESSION['userID'] = $user_data['user_id'];
                header("Location:main.php");
                die;
            }
        } 

    }
    echo "Wrong username of password";
}

if (isset($_POST["AddToCart"])) {
    session_start();
    $quantity = $_POST["Quantity"];
    $size = $_POST["size"];
    $userID= $_SESSION['userID'];
    settype($userID,"integer");
    $productID = $_SESSION['productID'];
    settype($productID,"integer");
    $query= "INSERT INTO cart(product_id,user_id,size,quantity) values($productID,$userID,'$size',$quantity)";
    mysqli_query($connection,$query);
    echo $size;
}
