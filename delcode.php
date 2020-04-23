<?php
   include('common.php');
 
?>
<?php

$ID= $_POST['id'];

$strSQL="DELETE  FROM `codemanager` WHERE `id` =('$ID')";

$result = mysqli_query($connect,$strSQL);

header('location:codemanager.php');

?>