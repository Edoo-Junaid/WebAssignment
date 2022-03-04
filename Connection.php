<?php 
$dbHostName="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="stylishboutique";

if(!$connection=mysqli_connect($dbHostName,$dbUserName,$dbPassword,$dbName)){
    die("Could not connect to database");
};