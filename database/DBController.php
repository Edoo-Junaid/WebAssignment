<?php

class DBController
{
    //Database connection

    protected $host= 'localhost';
    protected $user='root';
    protected $password='';
    protected $database='stylishboutique';

    //connecion property
    public $con=null;

    //call constructor

    public function __construct()
    {
        $this->con=mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if($this->con->connect_error){
            echo"Fail" . $this->con->errorconnect_error;
        }
       
    }

    public function destruct(){
        this->closeConnection;

    }
//Closing connection

protected  function closeConnection(){
    if(this->con!=null){
        $this->con->close();
        $this->null;
    }
}
}
