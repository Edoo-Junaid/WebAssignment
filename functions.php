<?php

//require MySQL Connection
require('database/DBController.php');

//require Product Class
require('database/product.php');
//DBController object
$db=new DBController();

//product object
$product=new product($db);
