<!DOCTYPE html>
<html>

<head>
    <title>Stylish Boutique</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <?php

    include("navbar.php");
    include("Connection.php");
    include("funtion.php");
    if (!check_login()){
        header("Location:LoginPage.php");
    }
    ?>

    <div class="cartPage">
        <div class="Cart">
            <h2 class="title">Shopping Cart</h2>
            <table>
                <tr>
                    <th>Image</th>
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
                        <td><img src=<?php echo $productData['pictures'];  ?> class="cartImage"></td>
                        <td> <?php echo $productData['Title']; ?></td>
                        <td><?php echo $row['size']; ?></td>
                        <td> <?php echo $productData['price']; ?></td>
                        <td> <?php echo $row['quantity']; ?></td>
                        <td> <?php echo $subTotal; ?></td>
                        <td><a href="<?php printf('%s?deleteCartID=%s', 'Process.php', $row['cart_id']) ?>"><img src="Images/minusLogo.png" width="20px"></td>
                    </tr>
                <?php
                endforeach;
                ?>

            </table>
        </div>
        <div class="cartTotal">
            <h2 class="cartTotalTitle">Cart Totals</h2>
            <table class="cartTotalTable">
                <tr>
                    <td>SubTotal </td>
                    <td><?php echo $subTotalFinal; ?></td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><?php echo $subTotalFinal + 200 ?></td>
                </tr>
            </table>
            <div class="chechoutbtn">
                <a href="checkoutPage.php">Proceed to checkout</a>
            </div>
        </div>
    </div>
</body>

</html>