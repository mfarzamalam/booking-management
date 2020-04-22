<?php 
  include('common.php');
?>

<?php 

  if ($_SESSION['user'] == "") {
        header('location:default.php');
    }

?>

<html>

<title>Maintainance - <?php echo $_SESSION["project"]; ?></title>



<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION["project"]; ?></center></font></b>

  <p align="center"><font face="Verdana"><b><font size="5">Maintainance Ledger</font></b><br>
</font></p>     <?php echo Date("d/m/Y");?>

<?php
$SQL2 = "SELECT * from `monthlymain` where `flatno` = '$_GET[flatno]' and what = '$_SESSION[user]' ORDER by id ASC";
$result = mysqli_query($connect,$SQL2);

?> 

</p>

    <table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber2" bordercolorlight="#000000" bgcolor="#000000">
      <tr>

        <td width="50%" align="center"><font face="Verdana" size="2" color="#FFFFFF"><b>Date</b></font></td>
        <td width="20%" align="center"><font face="Verdana" size="2" color="#FFFFFF"><b>name</b></font></td>
		  <td width="20%" align="center"><font face="Verdana" size="2" color="#FFFFFF"><b>Partucular</b></font></td>
       <td width="10%" align="center"><font face="Verdana" size="2" color="#FFFFFF"><b>Delete</b></font></td>
      </tr>
    </table>
    </center>
  </div>



    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">

    <?php while ($rs = mysqli_fetch_assoc($result)) { ?>
     
 <tr>
      
   
        <td width="50%" align="center"><font size="2" face="Verdana"><?php echo $rs['date']?></font></td>
        <td width="20%" align="center"><font size="2" face="Verdana"><?php echo $rs['name']?></font></td>
        <td width="20%" align="center"><font size="2" face="Verdana"><?php echo $rs['amount']?></font></td>
        <td width="10%" align="center"><font size="2" face="Verdana"> <a href="monthlym_del.php?id=<?php echo $rs['id']?>&flatno=<?php echo $rs['flatno']?>"> Delete</a></font></td>

</tr>

<?php }?>

    </table>
<p><font size="2" face="Verdana">TOTAL RECEIVABLES :

<?php

$strsql="SELECT sum(amount) as c from `monthlymain` where `flatno` = '$_GET[flatno]' and what='$_SESSION[user]'";
$result = mysqli_query($connect,$strsql);
$ws = mysqli_fetch_assoc($result);

?>
<?php if ($ws['c'] !== "") { ?>
<?php echo number_format($ws['c'])?>
<?php } else {
echo "0";
} 

?>

</font>
</p>