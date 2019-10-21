<?php

class Model{

    protected static $table_name;

    static public function sql($sql){
        global $db;
        $set_result=$db->query($sql);
        return $set_result;
    }
}