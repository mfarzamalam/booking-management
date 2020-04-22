<?php 
  include('common.php');
?>

<?php 

  if ($_SESSION['user'] == "") {
        header('location:default.php');
    }

?>

<html>

<title>Mutation - <?php echo $_SESSION["project"]; ?></title>


<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION["project"]; ?></center></font></b>

  <p align="center"><font face="Verdana"><b><font size="5">Maintainance Manager</font></b><br>
</font></p>
<p align="right"><font size="1" face="Verdana">Date : <?php echo Date("d/m/Y");?>

</font>
</p>
<a href="automonthlym.php?date=<?php echo Date("d/m/Y");?>"  onclick="return confirm('Are you sure you want to Create Monthly Dues?');"><font size="2" face="Verdana">Create Auto Billing Monthly</font></a>


<?php  

$q = "q";
if ($q !== "") {  ?>
  <p align="center"><font face="Verdana"><b><font size="5"><?php $q?></font></b><br>
</font></p>
<?php } ?>

<?php
$query = "SELECT * from `flats` where `what` = '$_SESSION[user]' and `monthlym` > 0 ORDER by id ASC";

$result = mysqli_query($connect,$query);

?>

</p>

    <table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber2" bordercolorlight="#000000" bgcolor="#000000">
      <tr>

        <td width="50%" align="center"><font face="Verdana" size="2" color="#FFFFFF"><b>Name</b></font></td>
        <td width="20%" align="center"><font face="Verdana" size="2" color="#FFFFFF"><b>Unit No</b></font></td>
		  <td width="20%" align="center"><font face="Verdana" size="2" color="#FFFFFF"><b>Monthly</b></font></td>
       <td width="10%" align="center"><font face="Verdana" size="2" color="#FFFFFF"><b>Total Dues.</b></font></td>
      </tr>
    </table>
    </center>
  </div>



    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
 
    <?php while($rs = mysqli_fetch_array($result)) { ?>     
 
    <tr>
      
   
        <td width="50%" align="center"><font size="2" face="Verdana"><a href="addmonthlym.php?flatno=<?php echo $rs['flats'];?>&name=<?php echo $rs['name'];?>&amount=<?php echo $rs['monthlym'];?>">Add Receipt</a> - <?php echo $rs['name'];?> - <a href="monthlym_ledger.php?flatno=<?php echo $rs['flats'];?>">View Ledger</a></font></td>
        <td width="20%" align="center"><font size="2" face="Verdana"><?php echo $rs['flats'];?></font></td>
        <td width="20%" align="center"><font size="2" face="Verdana"><?php echo $rs['monthlym'];?></font></td>
            <td width="10%" align="center"><font size="2" face="Verdana">
               
<?php

$strsql="SELECT sum(amount) as c from `monthlymain` where `flatno` = '$rs[flats]' and what='$_SESSION[user]'";
$result = mysqli_query($connect,$strsql);
$qs = mysqli_fetch_assoc($result);

?>
<?php if ($qs['c'] !== "") { ?>
<?php echo number_format($qs['c'])?>
<?php } else {
echo "0";
} ?>

</font></td>


</tr>
    
<?php } ?>

    </table>
<p><font size="2" face="Verdana">TOTAL RECEIVABLES :

<?php
$strsql="SELECT sum(amount) as c from `monthlymain` where `what`='$_SESSION[user]'";
$result = mysqli_query($connect,$strsql);
$ws = mysqli_fetch_assoc($result);

?>
<?php if ($ws['c'] !== "") { ?>
<?php echo number_format($ws['c'])?>
<?php } else {
echo "0";
} ?></font>
</p>