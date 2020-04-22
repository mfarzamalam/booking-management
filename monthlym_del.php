<?php 
  include('common.php');
?>

<?php 

  if ($_SESSION['user'] == "") {
        header('location:default.php');
    }

?>

<?php
$ID= $_GET['id'];
$FlatNo= $_GET['flatno'];

$query = "DELETE  FROM `monthlymain` WHERE `id` =('$ID') AND `flatno` =('$FlatNo') AND `what` =('$_SESSION[user]')";
$result = mysqli_query($connect,$query);

header('location:monthlym_ledger.php?flatno=$FlatNo');

?>