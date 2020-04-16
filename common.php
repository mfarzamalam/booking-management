<?php

    $connect = mysqli_connect('localhost','root','','hisab');

    if(!$connect){
        echo "Database Connection  Error";
        die();
    }

    session_start();
    if(  ! isset($_SESSION['user']  ) )
{
    header('location:default.php?message=Login to access');

}


?>