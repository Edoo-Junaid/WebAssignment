<?php 
$dbHostName="localhost";
$dbUserName="yahya";
$dbPassword="1234";
$dbName="ecommerce";

if(!$connection=mysqli_connect($dbHostName,$dbUserName,$dbPassword,$dbName)){
    die("Could not connect to database");
};