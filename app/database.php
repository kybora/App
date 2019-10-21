<?php
include_once("config.php");

class DB{
    private $con;

    function __construct()
    {
        $this->open();
    }

    public function open(){
        $this->con=mysqli_connect(SERVER,USER,PASSWORD,NAME);
        if(mysqli_connect_errno($this->con)){
            die("connection is failed :").mysqli_connect_errno();
        }
    }

    public function query($sql){
        $set_result=mysqli_query($this->con,$sql);
        return $set_result;
    }

    public function fetch_assoc($set_result){
        return mysqli_fetch_assoc($set_result);
    }

    public function num_rows($set_result){
        return mysqli_num_rows($set_result);
    }

    public function insert_id(){
        return mysqli_insert_id($this->con);
    }

    static public function table(){}

    public function close(){
        if(isset($this->con)){
            mysqli_close($this->con);
            unset($this->con);
        }
    }
}
$db=new MySQLDataBase;