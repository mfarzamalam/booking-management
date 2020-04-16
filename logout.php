<?php


session_start();
 
session_destroy();
unset($_SESSION['user']);
unset($_SESSION['project']);
unset($_SESSION['logo']);
unset($_SESSION['completiondate']);
header('location:default.php');
?>