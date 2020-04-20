<?php 
  include('common.php');
?>

<?php 
  $id = $_GET['id'];

  if ($_SESSION['user'] == "") {
        header('location:default.php');
    }

?>

<?php 

$id = $_POST['id'];
$dated = $_POST['date'];
$name = $_POST['Name'];
$FlatNo = $_POST['FlatNo'];
$PaymentMode = $_POST['PaymentMode'];
$Amount = $_POST['Amount'];
$chequeno = $_POST['chequeno'];
$drawnon = $_POST['drawnon'];
$chequedate = $_POST['chequedate'];

$query="UPDATE `receipts` SET `date`='$dated', `Name`='$name', `FlatNo`='$FlatNo', `PaymentMode`='$PaymentMode', 
                                `Amount`='$Amount', `chequeno`='$chequeno', `drawnon`='$drawnon', 
                                `chequedate`='$chequedate' WHERE `id` ='$id' and `what` ='$_SESSION[user]'"; 

$result = mysqli_query($connect,$query);


header("location:edit_delete_receipts_show.php?FlatNo=$FlatNo");

?>