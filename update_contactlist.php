<?php

  include('common.php');
?>

<?php


$number =     $_POST["number"];
$name =        $_POST["name"];
$konhai =      $_POST["konhai"];
$subscribe =    $_POST["subscribe"];
$id = $_POST["id"];
 
 

    $query1 = "UPDATE  `contactlist` SET  `number` =  '$number', `name` =  '$name', `konhai` =  '$konhai' , `subscribe` = " .
    "'$subscribe' WHERE  `id` ='$id'";

    $update_data = mysqli_query($connect,$query1);
   

 
  
?>



<head>

<script language="javascript">
 
setTimeout("self.close();",500)
 
</script> 
</head>
