<?php

    $connect = mysqli_connect('localhost','root','','hisab');

    if(!$connect){
        echo "Database Connection  Error";
        die();
    }

 

 
 

$strip = $_SERVER['REMOTE_ADDR'];

 
$query = "select ip from ip where ip = '$strip' ";
$result = mysqli_query($connect,$query);
$total = mysqli_num_rows($result); 
 
if($total > 0){
  
}else{
  header("Location: http://www.google.com");
     die();
} 
    session_start();
    if(  ! isset($_SESSION['user']  ) )
{
    header('location:default.php?message=Login to access');

}


?>