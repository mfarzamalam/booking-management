<?php

    $connect = mysqli_connect('localhost','root','','fbm');

    if(!$connect){
        echo "Error establishing a connection";
    }

?>