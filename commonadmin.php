<?php

$connect = mysqli_connect('localhost','root','','hisab');

if(!$connect){
    echo "Database Connection  Error";
    die();
}
session_start();
 

?>