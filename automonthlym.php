<?php 
  include('common.php');
?>

<?php 

  if ($_SESSION['user'] == "") {
        header('location:default.php');
    }

?>

<html>


<?php

$query = "SELECT * from `flats` where `what` = '$_SESSION[user]' ORDER by id ASC";
$result = mysqli_query($connect,$query);

?>

  <?php while($rs = mysqli_fetch_assoc($result)) { ?>     

      
    <?php

$dated = $_GET['date'];
$name = $rs['name'];
$FlatNo = $rs['flats'];
$amount = $rs['monthlym'];
$status = "Receivable";

$strSQL="INSERT INTO monthlymain (`date`,`name`,`flatno`,`amount`,`status`,`what`) VALUES 
                                  ('$dated','$name','$FlatNo','$amount','$status','$_SESSION[user]')";

$query = mysqli_query($connect,$strSQL);

?>

<?php
  }
    header("location:monthlymdues.php?q=ALL BILLS CREATED");
?>
    