<?php 
    include("common.php");
?>
<?php 
  $flatno = $_GET['flatno'];
  $name = $_GET['name'];
  
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

<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION['project']; ?></center></font></b>




<?php 

if (!$name == "") { 
$SQL2 = "SELECT * FROM `receipts` where `FlatNo` = '$flatno' AND `name` <> 'hide' AND `name` like '%$name%' AND what = '$_SESSION[user]' order by ID ASc";
} else {
$SQL2 = "SELECT * FROM `receipts` where `FlatNo` = '$flatno' AND `name` <> 'hide' AND what = '$_SESSION[user]' order by ID ASc";
}

$result = mysqli_query($connect,$SQL2);
$row = mysqli_fetch_assoc($result);

?>



<body>
<p align="right"><font size="1" face="Verdana">Date : 
    <?php echo date("d/m/Y");?>
</font>
</p>
<p align="center"><b><font size="5" face="Verdana">Status of Receipt (s)</font></b></p>
<br>

<form method="POST" style="font-family: Verdana; font-size: 12pt" action="receipt_check.asp">
 
  <div align="center">
    <center>
    <table border="0" cellpadding="0" cellspacing="1" style="border-collapse: collapse" width="60%" id="AutoNumber1">
      <tr>
        <td width="23%"><font size="1">Office</font><font face="Verdana" size="1"> No :-</font></td>
        <td width="43%"><font face="Verdana" size="1"><?php echo $flatno;?></font></td>
      </tr>
       </table>
    </center>
  </div>

  <div align="center">
    <center>
    <table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber2" bordercolorlight="#000000" bgcolor="#000000">
      <tr>
        <td width="8%" align="center"><b><font size="1" color="#FFFFFF">Date</font></b></td>
        <td width="18%" align="center"><font size="1" color="#FFFFFF"><b>Name</b></font></td>
        <td width="13%" align="center"><b><font size="1" color="#FFFFFF">Amount</font></b></td>
        <td width="21%" align="center"><font size="1" color="#FFFFFF"><b>Bank</b></font></td>
        <td width="10%" align="center"><font size="1" color="#FFFFFF"><b>Chq 
        No.</b></font></td>
        <td width="13%" align="center"><font size="1" color="#FFFFFF"><b>Chq 
        Date</b></font></td>
        <td width="17%" align="center"><b><font size="1" color="#FFFFFF">Payment Mode</font></b></td>
      </tr>
    </table>
    </center>
  </div>


<?php 

    while($row = mysqli_fetch_array($result)){

?>


  <div align="center">
    <center>
    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
      <tr>
        <td width="8%" align="center"><font face="Verdana" size="1"><?php echo $row['date'];?></font>&nbsp;</td>
        <td width="18%" align="center"><font face="Verdana" size="1"><?php echo $row['Name'];?></font>&nbsp;</td>
        <td width="13%" align="center"><font face="Verdana" size="1"><?php echo $row['Amount'];?></font>&nbsp;</td>
        <td width="21%" align="center"><font size="1"><?php echo $row['drawnon'];?> | <?php echo $row['contactno'];?></font>&nbsp;</td>
        <td width="10%" align="center"><font size="1"><?php echo $row['chequeno'];?></font>&nbsp;</td>
        <td width="13%" align="center"><font size="1"><?php echo $row['chequeno'];?></font>&nbsp;</td>
        <td width="17%" align="center"><font face="Verdana" size="1"><a href="editreceipt.php?id=<?php echo $row['id'];?>"><?php echo $row['PaymentMode'];?></a>
		<br>
		<?php echo $row['specialnote'];?>
		
		</font>
		</td>
      </tr>
    </table>
    </center>
  </div>
  
  
    <?php  } ?>
  
  
  

  

  <div align="center">
    <center>
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="95%" id="AutoNumber2">
      <tr>
        <td width="15%" align="center">&nbsp;</td>
        <td width="17%" align="center"><font size="2">
        -------------------</font></td>
        <td width="43%" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td width="15%" align="center">
        <p align="right"><font size="1"><b>Total :-</b></font></td>
        <td width="17%" align="center"><font size="1">

<?php 

$SQL2 = "SELECT `sold` FROM `flats` where `flats`  = '$flatno' AND `what` = '$_SESSION[user]' order by `flats` ASc";
$rslt = mysqli_query($connect,$SQL2);
$ss = mysqli_fetch_assoc($rslt);


$strsql="SELECT sum(amount) as c from `receipts` WHERE `FlatNo`='$flatno' AND what = '$_SESSION[user]'";
$rslt1 = mysqli_query($connect,$strsql);
$Rs = mysqli_fetch_assoc($rslt1);

?>

        
        </font></td>
        <td width="43%" align="center">
        <p align="left"><font size="2">( <?php 
		$receivedhisab = $Rs['c']/($ss['sold']*100);
        
        echo $receivedhisab;
		
		?> )</font></td>
      </tr>
      <tr>
        <td width="15%" align="center">&nbsp;</td>
        <td width="17%" align="center"><font size="1">-------------------</font></td>
        <td width="43%" align="center">&nbsp;</td>
      </tr>
    </table>
    </center>
  </div>
    <div align="center">
    <center>
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="95%" id="AutoNumber2">
      <tr>
        <td width="15%" align="center">&nbsp;</td>
        <td width="17%" align="center"><font size="1">-------------------</font></td>
        <td width="43%" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td width="15%" align="center">
        <p align="right"><font size="1"><b>Sold :-</b></font></td>
        <td width="17%" align="center"><font size="1">
        
        <?php echo $ss['sold']?>
        
        </font></td>
        <td width="43%" align="center">
        <p align="left"><font size="2">( 100% )</font></td>
      </tr>
      <tr>
        <td width="15%" align="center">&nbsp;</td>
        <td width="17%" align="center"><font size="2">
        -------------------</font></td>
        <td width="43%" align="center">&nbsp;</td>
      </tr>
    </table>
    </center>
  </div>
  
  
      <div align="center">
    <center>
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="95%" id="AutoNumber2">
      <tr>
        <td width="15%" align="center">&nbsp;</td>
        <td width="17%" align="center"><font size="1">-------------------</font></td>
        <td width="43%" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td width="15%" align="center">
        <p align="right"><font size="1"><b>Balance :-</b></font></td>
        <td width="17%" align="center"><font size="1">
        

        
<?php
    
    $b = $ss['sold']- $Rs['c'];
    echo $b;

?>
        
     
        
        </font></td>
        <td width="43%" align="center">
        <p align="left"><font size="2">( <?php echo (100-$receivedhisab) ?> )</font></td>
      </tr>
      <tr>
        <td width="15%" align="center">&nbsp;</td>
        <td width="17%" align="center"><font size="2">
        -------------------</font></td>
        <td width="43%" align="center">&nbsp;</td>
      </tr>
    </table>
    </center>
  </div>
  <?php if ($_SESSION['user'] == "pyramid"){ ?>
 <font size="2"> Rebate Taken :  
<?php

$strsql="SELECT sum(amount) as c from `receipts` WHERE `FlatNo`='$flatno' AND `name` like '%rebate%' and `what`='pyramid'";
$rslt2 = mysqli_query($connect,$strsql);
$Rs = mysqli_fetch_assoc($rslt1);

echo $Rs['c'];

?>
        
          <?php echo $Rs['c'];?></font>
  <?php }?> </font>
</form>



</body>

</html>