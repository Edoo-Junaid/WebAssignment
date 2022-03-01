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
    ?>

    <h2>Shopping Cart</h2>

    <div class="Cart">
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
            foreach ($result as $row) :
                $query = "SELECT * FROM products WHERE ID = $row[product_id]";
                $productResult = mysqli_query($connection, $query);
                $productData = mysqli_fetch_assoc($productResult);
                $productName = $productData['Title'];
                $productPrice = $productData['price'];
                $quantity = $row['quantity'];
                $size = $row['size'];
                $image = $productData['pictures'];
                $subTotal = $quantity * $productPrice;
                echo "<br/>";
                //    $query1= "select * from products where product_id = $row[product_id]";
            ?>
                <tr>
                    <td><img src=<?php echo $image;  ?> class="cartImage"></td>
                    <td> <?php echo $productName; ?></td>
                    <td><?php echo $size; ?></td>
                    <td> <?php echo $productPrice; ?></td>
                    <td> <?php echo $quantity; ?></td>
                    <td> <?php echo $subTotal; ?></td>
                    <td><img src="Images/minusLogo.png" width="20px"></td>
                </tr>
            <?php
            endforeach;
            ?>

        </table>
    </div>
</body>

</html>