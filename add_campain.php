<?php
   include('common.php');
 
$material = $_POST['material'];
$name = $_POST['name'];


$strSQL = "INSERT INTO campains (`name`,`material`) VALUES ('$name','$material')";

$result = mysqli_query($connect,$strSQL);

echo $material;
?>