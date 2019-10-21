<?php
namespace Controller;
use App\User;

class UserController{

        public function index(){}//base

        public function create(){}//sakhtan
    
        public function store(){//insert to db
            global $db;
    
            $sql ="INSERT INTO users (";
            $sql .="first_name,last_name,email,password";
            $sql .=") VALUES (";
            $sql .=" '{$db->trim($this->first_name)}' ";
            $sql .=" '{$db->trim($this->last_name)}' ";
            $sql .=" '{$db->trim($this->email)}' ";
            $sql .=" '{$db->trim($this->password)}' ";
    
            $set_result=self::sql($sql);
            return $set_result;
        }
    
        public function show(){}//view taki
    
        public function edit(){}//edit
    
        public function update(){}//update
    
        public function delete(){}//delete
}