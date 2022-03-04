<html>

<head>
    <title>Stylish Boutique</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <?php
    session_start();
    include("navbar.php");
    include("Connection.php");
    ?>
    <div class="checkoutPage">
        <div class="checkoutForm">
            <h1 class='title'>Shipping details</h1>
            <form method="post" name="shipping" action="Process.php">
                <p>First Name: </p>
                <input id="firstname" type="text" name="firstName" value="<?php echo isset($_SESSION['firstName']) ? $_SESSION['firstName'] : ''; ?>">
                <p>Last Name:</p>
                <input id="lastName" type="text" name="lastName" value="<?php echo isset($_SESSION['lastName']) ? $_SESSION['lastName'] : ''; ?>">
                <p>Address:</p>
                <input id="Address" type="text" name="Address" placeholder="Street Address" value="<?php echo isset($_SESSION['Address']) ? $_SESSION['Address'] : ''; ?>">
                <p>Phone number:</p>
                <input id="phoneNumber" type="number" name="phoneNumber" value="<?php echo isset($_SESSION['phoneNumber']) ? $_SESSION['phoneNumber'] : ''; ?>">
                <p>Town:</p>
                <input id="Town" type="text" name="Town" value="<?php echo isset($_SESSION['Town']) ? $_SESSION['Town'] : ''; ?>">
                <p>State:</p>
                <input id="state" type="text" name="state" value="<?php echo isset($_SESSION['state']) ? $_SESSION['state'] : ''; ?>">
                <p>Zip Code:</p>
                <input id="zip" type="number" name="zip" value="<?php echo isset($_SESSION['zip']) ? $_SESSION['zip'] : ''; ?>">
                <p>Comments:</p>
                <input id="comments" type="text" name="comments" value="<?php echo isset($_SESSION['comments']) ? $_SESSION['comments'] : ''; ?>">
                <input class="btn" type="submit" name="ShippingDetails" value="Next   &#x2192;">
            </form>
        </div>


        <p>
        <div class="cardDetails">
            <h2 class='title'>Payment Details</h2>
            <form name="PaymentDetails" method="post" action="process.php">
                <p>Card Number: </p>
                <input type="text" name="cardNumber">
                <p>Name on card</p>
                <input type="text" name="cardName">
                <p>Expiry date</p>
                <input type="text" name="expiry" placeholder="12/22">
                <p>Security code</p>
                <input type="password" name="securityCode" placeholder="3 digit number">
                <input class="btn" type="submit" name="cardDetails" value="next   &#x2192;">
            </form>
        </div>
    </div>
    <h2 class="title">Order Sumary</h2>
    <div class="orderSummary">
        
        <table>
            <tr>
                <th> Product </th>
                <th> Size</th>
                <th> Price</th>
                <th> Quantity</th>
                <th> SubTotal </th>
                <th> </th>
            </tr>
            <?php
            $userId = $_SESSION['userID'];
            $query = "SELECT * FROM cart WHERE user_id = $userId";
            $result = mysqli_query($connection, $query);
            $subTotalFinal = 0;
            foreach ($result as $row) :
                $query = "SELECT * FROM products WHERE ID = $row[product_id]";
                $productResult = mysqli_query($connection, $query);
                $productData = mysqli_fetch_assoc($productResult);
                $subTotal = $row['quantity'] * $productData['price'];
                $subTotalFinal = $subTotalFinal + $subTotal;
            ?>
                <tr>
                    <td> <?php echo $productData['Title']; ?></td>
                    <td><?php echo $row['size']; ?></td>
                    <td> <?php echo $productData['price']; ?></td>
                    <td> <?php echo $row['quantity']; ?></td>
                    <td> <?php echo $subTotal; ?></td>
                </tr>
            <?php
            endforeach;
            ?>
            <tr>
                <td colspan=4>Total</td>
                <td><?php echo $subTotalFinal; ?></td?>
            </tr>
        </table>
        <btn class="btn" id="orderBtn">Place Order</btn>
    </div>

</body>


</html>
<script>
    <?php
    if (isset($_SESSION['shippingDetails'])) {
    ?>
        required("firstname");
        required("lastName");
        required("Address");
        required("Town");
        required("zip");
    <?php
        unset($_SESSION['shippingDetails']);
    }
    ?>

    function required(id) {
        var field = document.getElementById(id);
        if (field.value == "") {
            field.style.backgroundColor = "rgba(255, 0, 0, 0.808)";
        }
    }
</script>