<?php

include("Connection.php")

?>


<!DOCTYPE html>

<html>

<head>
    <title>AsosStore</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" type="text/css" />

</head>

<body>
    <!-- Navigation -->
    <?php
    include("Navbar.php");
    ?>
    <div class="account-page">
        <div class="form-container">
            <div class="form-btn">
                <span onclick="login()"> Login</span>
                <span onclick="register()"> Register</span>
                <hr id="Indicator">
            </div>
            <form id="LoginForm" method="post" action="Process.php">
                <input class="input" type="text" placeholder=" Username" name="username" />
                <input class="input " type="password" placeholder="Password" name="password" />
                <button type="submit" class="btn" name="login_button">Login</button>
                <a href="#">Forgot password</a>
            </form>
            <form id="RegistrationForm" method="post" action="Process.php">
                <input class="input " type="text" placeholder=" Username" name="username" />
                <input class="input " type="email" placeholder="Email" name="email" />
                <input class="input " type="password" placeholder="Password" name="password" />
                <button type="submit" class="btn" name="register_button">Register</button>
            </form>
        </div>
    </div>

    <?php
    include("Footer.php");
    ?>

    <!--------------js for toggle form ------->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegistrationForm");
        var Indicator = document.getElementById("Indicator");

        function register() {
            RegForm.style.transform = "translateX(0px)"
            LoginForm.style.transform = "translateX(0px)"
            Indicator.style.transform = "translateX(120px)"
        }
        function login() {
            RegForm.style.transform = "translateX(300px)"
            LoginForm.style.transform = "translateX(300px)"
            Indicator.style.transform = "translateX(0px)"
        }
    </script>

</body>

</html>