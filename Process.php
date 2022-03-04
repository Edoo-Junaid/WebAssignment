<?php

include("Connection.php");
include("funtion.php");
if (isset($_POST["register_button"])) {
    echo "hello";
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    if (!empty($username) && !empty($password) && !is_numeric($username)) {
        $query = "INSERT INTO Users(username,password,email) VALUES ('$username',$password,'$email')";
        mysqli_query($connection, $query);
        header("Location:main.php");
    }
    header("Location:LoginPage.php");
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
            }
        }
    }
    echo "Wrong username of password";
}

if (isset($_POST["AddToCart"])) {
    session_start();
    if (!check_login()){
        echo "hello";
        header("Location:LoginPage.php");
      die;
    }
    $quantity = $_POST["Quantity"];
    $size = $_POST["size"];
    $colour=$_POST["colour"];
    $userID = $_SESSION['userID'];
    settype($userID, "integer");
    $productID = $_SESSION['productID'];
    settype($productID, "integer");
    $query = "SELECT * FROM cart WHERE product_id =$productID";
    $result = mysqli_query($connection, $query);
    $product_details = mysqli_fetch_assoc($result);
    if (isset($product_details['product_id'])) {
        if ($product_details['size'] == $size) {
            $quantity = $quantity + $product_details['quantity'];
            echo $quantity;
            echo $product_details['quantity'];
            $queryUpdate = "Update cart SET quantity=$quantity WHERE product_id=$productID AND size='$size'";
            mysqli_query($connection, $queryUpdate);
            header("Location:AllProductPage.php");
        } else {
            $query1 = "INSERT INTO cart(product_id,user_id,size,quantity,colour) values($productID,$userID,'$size',$quantity,'$colour')";
            mysqli_query($connection, $query1);
            echo "hello";
           header("Location:AllProductPage.php");
        }
    } else {
        $query = "INSERT INTO cart(product_id,user_id,size,quantity) values($productID,$userID,'$size',$quantity)";
        mysqli_query($connection, $query);
        echo "hola";
        header("Location:AllProductPage.php");
    }
}

if (isset($_POST["contactUs"])) {
    $firstName = $_POST["FirstName"];
    $lastName = $_POST["LastName"];
    $email = $_POST["Email"];
    $message = $_POST['message'];

    $query = "INSERT INTO messages(firstname,lastName,email,message) values ('$firstName','$lastName','$email','$message')";
    mysqli_query($connection, $query);
    header("Location:main.php");
}

if (isset($_POST["ShippingDetails"])) {
    session_start();
    $_SESSION['shippingDetails'] = true;
    $firstName = $_SESSION['firstName'] = $_POST['firstName'];
    $lastName = $_SESSION['lastName'] = $_POST['lastName'];
    $address = $_SESSION['Address'] = $_POST['Address'];
    $phoneNumber = $_SESSION['phoneNumber'] = $_POST['phoneNumber'];
    $town = $_SESSION['Town'] = $_POST['Town'];
    $state = $_SESSION['state'] = $_POST['state'];
    $zip = $_SESSION['zip'] = $_POST['zip'];
    $comments = $_SESSION['comments'] = $_POST['comments'];
    $userID = $_SESSION['userID'];
    if (empty($firstName) || empty($lastName) || empty($address) || empty($town) || empty($zip)) {
        echo "hola";
        header("Location:checkoutPage.php");
    } else {
        echo "hello";
        $query = "INSERT INTO shippingdetails values ($userID,'$firstName','$lastName','$address',$phoneNumber,'$town','$state',$zip,'$comments')";
        mysqli_query($connection, $query);
        header("Location:checkoutPage.php");
    }
}

if (isset($_POST['cardDetails'])) {
    session_start();
    $userID = $_SESSION['userID'];
    $cardNumber = $_POST['cardNumber'];
    $name = $_POST['cardName'];
    $expDate = $_POST['expiry'];
    $securityCode = $_POST['securityCode'];
    $query = "INSERT INTO cardDetails VALUES ($userID,$cardNumber,'$name','$expDate',$securityCode)";
    mysqli_query($connection, $query);
    header("Location:checkoutPage.php");
}


if (isset($_GET["deleteCartID"])) {
    $cartID = $_GET["deleteCartID"];
    $query = "DELETE FROM cart WHERE cart_id=$cartID";
    mysqli_query($connection, $query);
    header("Location:cart.php");
}
