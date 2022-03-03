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
            <form method="post" action="process.php" onsubmit="required()" name="shipping">
                <p>First Name: </p>
                <input id="acv" type="text" name="firstName" value="<?php echo isset($_SESSION['firstName']) ? $_SESSION['firstName'] : ''; ?>">
                <p>Last Name</p>
                <input type="text" name="lastName" value="<?php echo isset($_SESSION['lastName']) ? $_SESSION['lastName'] : ''; ?>">
                <p>Address</p>
                <input type="text" name="Address" placeholder="Street" value="<?php echo isset($_SESSION['Address']) ? $_SESSION['Address'] : ''; ?>">
                <p>Phone number</p>
                <input type="number" name="phoneNumber" value="<?php echo isset($_SESSION['phoneNumber']) ? $_SESSION['phoneNumber'] : ''; ?>">
                <p>Town</p>
                <input type="text" name="Town" value="<?php echo isset($_SESSION['Town']) ? $_SESSION['Town'] : ''; ?>">
                <p>State</p>
                <input type="text" name="state" value="<?php echo isset($_SESSION['state']) ? $_SESSION['state'] : ''; ?>">
                <p>Zip Code</p>
                <input type="number" name="zip" value="<?php echo isset($_SESSION['zip']) ? $_SESSION['zip'] : ''; ?>">
                <p>Comments</p>
                <input type="text" name="comments" value="<?php echo isset($_SESSION['comments']) ? $_SESSION['comments'] : ''; ?>">
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
<script>
    function required() {
        var value = document.forms["shipping"]["firstName"].value;
        if(value=="") {
            alert("hello hello");
        }
    }
</script>

</html>