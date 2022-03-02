<!DOCTYPE html>
<html>

<head>
    <title>Stylish Boutique</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <header>
        <h2> STYLISH BOUTIQUE</h2>

        <nav>
            <ul class="nav_links">
                <li><a href="main.php">Home</a></li>
                <li><a href="AllProductPage.php">Products</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Content</a></li>
                <li><a href="">Account</a></li>

            </ul>
        </nav>
        <div class="Icons">
            <img class="cart" src="images/cart.png" alt="logo">
            <img class="user_Icon" src="images/userIcon.png">

        </div>
    </header>

    <div class="contactUsTitle">
        <h1>HAVE SOME QUESTIONS?</h1>

    </div>

    <div class="contactPage">
        <div class="contactCenter">
            <div class="enveloppe">
                <img class="envelopIcon" src="images/envo.png">
            </div>
            <div class="contactUs">
                <form class="formContactUs" action="Process.php" method="post">
                    <input type="text" class="formInput" placeholder="First name">
                    <input type=" text" placeholder="Last name">
                    <input type="email" placeholder="email">
                    <input type="text" placeholder="Message">
                    <input type="submit">
                </form>

            </div>
        </div>
    </div>
</body>

</html>