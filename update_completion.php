<?php
   include('common.php');
 

$id = $_POST['id'];
$completiondate = $_POST['completiondate'];


$query = "UPDATE `info` SET  `completiondate` =  ('$completiondate') WHERE `id` =('$id') and `user` =('$_SESSION[user]')";

$result = mysqli_query($connect,$query);

if ($result){
header('location:completion.php');
} else {
   echo "Error";
}

?>

<head>

<script language="javascript">

setTimeout("self.close();",500)

</script> 
</head>