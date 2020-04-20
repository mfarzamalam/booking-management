<?php 
  include('common.php');
?>

<?php 
  $flatno = $_GET['FlatNo'];

  if ($_SESSION['user'] == "") {
        header('location:default.php');
    }

?>

<html>

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=WINDOWS-1252">
<title>Status of Receipt</title>
</head>


<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION["project"]; ?></center></font></b>

    
<?php

$SQL2 = "SELECT * FROM `receipts` where `FlatNo` = '$flatno' AND what = '$_SESSION[user]'";
$query = mysqli_query($connect,$SQL2);

?>


<body>
<p align="center"><b><font size="5" face="Verdana">Edit / Delete Receipt (s)</font></b></p>
<br>


<form method="POST" style="font-family: Verdana; font-size: 12pt" action="receipt_check.php">
  <p align="center">&nbsp;</p>
  <div align="center">
    <center>
    <table border="0" cellpadding="0" cellspacing="4" style="border-collapse: collapse" width="60%" id="AutoNumber1">
      <tr>
        <td width="23%"><font size="1">Office</font><font face="Verdana" size="1"> 
        No :-</font></td>
        <td width="43%"><font face="Verdana" size="1"><?php echo $flatno;?></font></td>
      </tr>
           </table>
    </center>
  </div>
  <p align="center"><br>
&nbsp;</p>
  <div align="center">
    <center>
    <table bgcolor="#000000" border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber2" width="100%">
      <tr>
        <td align="center" width="9%"><b><font size="1" color="#FFFFFF">Date</font></b></td>
        <td align="center" width="11%"><font size="1" color="#FFFFFF"><b>Name</b></font></td>
        <td align="center" width="11%"><b><font size="1" color="#FFFFFF">Amount</font></b></td>
        <td align="center" width="16%"><font size="1" color="#FFFFFF"><b>Bank</b></font></td>
        <td align="center" width="11%"><font size="1" color="#FFFFFF"><b>Chq No.</b></font></td>
        <td align="center" width="11%"><font size="1" color="#FFFFFF"><b>Chq 
        Date</b></font></td>
        <td align="center" width="16%"><b><font size="1" color="#FFFFFF">Payment Mode</font></b></td>
        <td align="center" width="6%"><b><font size="1" color="#FFFFFF">Edit</font></b></td>
        <td align="center" width="8%"><b><font size="1" color="#FFFFFF">Delete</font></b></td>
      </tr>
    </table>
    </center>
  </div>

<?php
    while($rs = mysqli_fetch_array($query)) {

?>
  <div align="center">
    <center>
    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber2" width="100%">
      <tr>
        <td align="center" width="9%"><font face="Verdana" size="1"><?php echo $rs['date'];?></font>&nbsp;</td>
        <td align="center" width="11%"><font size="1"><?php echo $rs['Name'];?></font>&nbsp;</td>
        <td align="center" width="11%"><font face="Verdana" size="1"><?php echo $rs['Amount'];?></font>&nbsp;</td>
        <td align="center" width="16%"><font face="Verdana" size="1"><?php echo $rs['drawnon'];?></font>&nbsp;</td>
        <td align="center" width="11%"><font size="1"><?php echo $rs['chequeno'];?></font>&nbsp;</td>
        <td align="center" width="11%"><font size="1"><?php echo $rs['chequedate'];?></font>&nbsp;</td>
        <td align="center" width="16%"><font face="Verdana" size="1"><?php echo $rs['PaymentMode'];?> - <?php echo $rs['specialnote'];?></font></td>
        <td align="center" width="6%"><font face="Verdana" size="1">

        <a href="editreceipt.php?id=<?php echo $rs['id'];?>">Edit</a>

        </font></td>
        <td align="center" width="8%"><font face="Verdana" size="1">

        <a href="delreceipt.php?id=<?php echo $rs['id'];?>&FlatNo=<?php echo $flatno;?>" onclick="return confirm('Are you sure you want to Delete this Receipt?');">Delete</a>

        </font></td>
      </tr>
    </table>
    </center>
  </div>
  
  
    <?php } ?>
  

 
 
</form>


</body>

</html>