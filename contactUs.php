<!DOCTYPE html>
<html>

<head>
    <title>Stylish Boutique</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <?php
    include("navbar.php")
    ?>

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
                    <input type="text" class="formInput" placeholder="First name" name="FirstName">
                    <input type=" text" placeholder="Last name" name="LastName">
                    <input type="email" placeholder="email" name="Email">
                    <textarea class="message" placeholder="Your Message" name="message"> </textarea>
                    <input class="btn" type="submit" name="contactUs">
                </form>
            </div>
        </div>
    </div>
</body>

</html>