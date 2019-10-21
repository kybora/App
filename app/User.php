<?php
namespace App;

use App\Model;

class User extends Model{

    protected static $table_name="users";
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $password;

    static public function id($id){
        $set_result=self::sql("SELECT * FROM ".self::$table_name." WHERE id={$id}");
        return $set_result;
    }

    static public function all(){
        $set_result=self::sql("SELECT * FROM ".self::$table_name);
        return $set_result;
    }

    static public function auth($email,$password){

        $sql ="SELECT * FROM users ";
        $sql .="WHERE email='{$email}' ";
        $sql .="AND password='{$password}' ";

        $set_result=self::sql($sql);
        return $set_result;
    }
}