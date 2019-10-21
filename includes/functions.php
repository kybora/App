<?php
include_once("database.php");

function redirect_to($location){
    return header("Location:".$location);
    exit;
}

function message($message){
    echo "$message";
}