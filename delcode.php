<?php
   include('common.php');
 
?>
<?php

$ID= $_GET['id'];

$strSQL="DELETE  FROM `codemanager` WHERE `id`='$ID'";

$result = mysqli_query($connect,$strSQL);

header('location:codemanager.php');

?>