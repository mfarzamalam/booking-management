<?php 
  include('common.php');
?>

<?php 
  
  if ($_SESSION['user'] == "") {
        header('location:default.php');
    }

?>

<?php 
$id = $_POST['id'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$position = $_POST['position'];

$strSQL = "UPDATE `msg` SET  `subject`='$subject' , `message`='$message' , `position`='$position' WHERE  `id`='$id' and `what`='$_SESSION[user]'"; 

$result = mysqli_query($connect,$strSQL);
header('location:msgmanager.php');

?>
<head>

<script language="javascript">

setTimeout("self.close();",500)

</script> 
</head>