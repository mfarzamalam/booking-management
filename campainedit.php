<?php
   include('common.php');

$campainid = $_POST['campainid'];
$material = $_POST['material'];
$name = $_POST['name'];

$strSQL = "UPDATE `campains` SET  `material`=('$material'), `name`=('$name') WHERE `id`=('$campainid')";

$result = mysqli_query($connect,$strSQL);

echo $material;
?>