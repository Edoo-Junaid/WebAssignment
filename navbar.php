<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>

<html>

<head>

  <title>Stylish Shop</title>
  <link rel="stylesheet" href="style.css" type="text/css">
  <?php
  //require function.php
  require('functions.php');
  ?>
</head>

<body>

  <header>
    <h2> STYLISH SHOP</h2>

    <nav>
      <ul class="nav_links">
        <li><a href="main.php">Home</a></li>
        <li><a href="AllProductPage.php">Products</a></li>
        <li><a href="AboutUs.php">About</a></li>
        <li><a href="contactUs.php">Contact Us</a></li>
        <li><a href="">Account</a></li>

      </ul>
    </nav>
    <div class="Icons">
      <a href="cart.php"><img class="cart" src="images/cart.png" alt="logo"></a>
      <img class="user_Icon" src="images/userIcon.png">


      <?php
      if (isset($_SESSION['username'])) {
        $user = $_SESSION['username'];
        echo "<a href='LoginPage.php'>$user</a>";
      } else {
        echo "<a href='LoginPage.php'>Login</a>";
      }
      ?>
    </div>

  </header>