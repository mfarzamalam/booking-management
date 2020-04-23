<?php
   include('common.php');
 
?>

<?php

$ID= $_GET['id'];
$FlatNo= $_GET['FlatNo'];

$query = "DELETE  FROM `receipts` WHERE `id` =('$ID') AND `flatno` =('$FlatNo') AND `what` =('$_SESSION[user]')";
$result = mysqli_query($connect,$query);

header('location:edit_delete_receipts_show.php?FlatNo="$FlatNo"');

?>
