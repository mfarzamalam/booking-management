<?php 
  include('common.php');
?>

<?php 
  
  if ($_SESSION['user'] == "") {
        header('location:default.php');
    }

?>

<?php 
$subject = $_POST['subject'];
$message = $_POST['message'];
$position = $_POST['position'];

$strSQL="INSERT INTO msg (`subject`,`message`,`position`,`what`) 
                VALUES  ('$subject','$message','$position','$_SESSION[user]')";

$result = mysqli_query($connect,$strSQL);
header('location:msgmanager.php');

?>
<head>

<script language="javascript">

setTimeout("self.close();",500)

</script> 
</head>