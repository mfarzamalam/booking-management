
<?php
   include('common.php');
?>

<?php

$ID= $_GET['id'];
if(isset($_GET["FlatNo"]))
$FlatNo= $_GET['FlatNo'];
else 
$FlatNo = $_GET["flatno"];
$query = "DELETE  FROM `mutation` WHERE `id` ='$ID' AND `flatno` ='$FlatNo' AND `what` ='$_SESSION[user]'";
$result = mysqli_query($connect,$query);

echo mysqli_error($connect);
header("location:status_mutation_show.php?FlatNo=$FlatNo");

?>