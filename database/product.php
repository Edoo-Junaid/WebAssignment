<?php

//use to fetch product data
class Product
{
public $db=null;

public  function __construct(DBController $db){
    if(!isset($db->con)){ 
        return null;
    }
    else{
        $this->db=$db;
    }
}

//Fetching product data using getData Method;

public function getData(){
    $sql='SELECT * FROM products';
    $result=mysqli_query($this->db->con,$sql);

    $resultArray=array();
//fetch data one by one
    while($item=mysqli_fetch_array($result)){
        $resultArray[]=$item;
    }
    return $resultArray;
}
}
