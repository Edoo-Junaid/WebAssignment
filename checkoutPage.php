<html>

<head>
    <title>Stylish Boutique</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <?php
    session_start();
    include("navbar.php");
    ?>
    <div class="checkoutPage">
        <div class="checkoutForm">
        <h1 class='title'>Shipping details</h1>
            <form method="post" action="process.php">
                <p>First Name: </p>
                <input type="text" name="firstName" value=<?php echo isset($_SESSION['a']) ? $_SESSION['a1'] : ''; ?>>
                <p>Last Name</p>
                <input type="text" name="lastName">
                <p>Address</p>
                <input type="text" name="Address" placeholder="Street">
                <p>Phone number</p>
                <input type="number" name="phoneNumber">
                <p>Town</p>
                <input type="text" name="Town">
                <p>State</p>
                <input type="text" name="state">
                <p>Zip Code</p>
                <input type="number" name="zip">
                <p>Comments</p>
                <input type="text" name="comments">
                <input type="submit" name="ShippingDetails">
            </form>
        </div>
        <p>
        <div class="cardDetails">
        <h2 class='title'>Payment Details</h2>
            <form method="post" action="process.php">
                <p>Card Number: </p>
                <input type="text" name="firstName">
                <p>Name on card</p>
                <input type="text" name="cardName">
                <p>Expiry date</p>
                <input type="text" name="expiry" placeholder="12/22">
                <p>Security code</p>
                <input type="password" name="securityCode">
            </form>
        </div>
    </div>
</body>

</html>