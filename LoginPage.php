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
    <header>
        <h2> STYLISH BOUTIQUE</h2>

        <nav>
            <ul class="nav_links">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Products</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Content</a></li>
                <li><a href="">Account</a></li>

            </ul>
        </nav>
        <div class="Icons">
            <img class="cart" src="images/cart.png" alt="logo">
            <img class="user_Icon" src="images/userIcon.png">
            <a href="#" class="login_button">Login</a>
        </div>

    </header>

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
            <form id="RegistrationForm" method = "post" action="Process.php">
                <input class="input " type="text" placeholder=" Username" name="username" />

                <input class="input " type="email" placeholder="Email" name="email" />
                <input class="input " type="password" placeholder="Password" name="password" />
                <button type="submit" class="btn" name="register_button">Register</button>

            </form>
        </div>
    </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row1">
                <div class="footer-col1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="Images/play-store.png">
                        <img src="Images/app-store.png">
                    </div>
                </div>
                <div class="footer-col2">
                    <img src="Images/logo2.jpg">
                    <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Shopping Accessible to the Many.
                    </p>
                </div>
                <div class="footer-col3">
                    <h3> Contact Us</h3>
                    <ul>
                        <li>+230 57272928</li>
                        <li>stylishboutique@gmail.com</li>

                    </ul>
                </div>
                <div class="footer-col4">
                    <h3> Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>

    </div>
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