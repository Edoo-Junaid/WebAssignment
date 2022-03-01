<?php 
$dbHostName="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="ecommerce";

if(!$connection=mysqli_connect($dbHostName,$dbUserName,$dbPassword,$dbName)){
    die("Could not connect to database");
};