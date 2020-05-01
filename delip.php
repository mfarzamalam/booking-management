<?php
 include('commonadmin.php');
?>

<?php

$ID= $_GET['id'];

$query = "DELETE  FROM `ip` WHERE `id` =('$ID')";
$result = mysqli_query($connect,$query);

header('location:admin.php');

?>