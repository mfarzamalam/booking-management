<?php 
  include('common.php');

?>

<?php 
  
  if ($_SESSION['user'] == "") {
        header('location:default.php');
    }

?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Site Report</title>
</head>

<body>
<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION['project']?></center></font></b>
<p align="right"><font size="1" face="Verdana">Date : 
        <?php echo date("d/m/Y");?>
 </font>
</p>
<p align="center"><b><font face="Verdana" size="5">Report Receivables</font></b></p>
<br>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1" bgcolor="#000000">
  <tr>
    <td width="20%" align="center"><b>
    <font face="Verdana" size="1" color="#FFFFFF">Office No</font></b></td>
     <td width="20%" align="center"><b>
    <font face="Verdana" color="#FFFFFF" size="1">Name</font></b></td>
    <td width="15%" align="center"><b>
    <font face="Verdana" color="#FFFFFF" size="1">Received</font></b></td>
	    <td width="15%" align="center"><b>
    <font face="Verdana" color="#FFFFFF" size="1">Details</font></b></td>
    <td width="15%" align="center"><b>
    <font face="Verdana" color="#FFFFFF" size="1">Sold</font></b></td>
    <td width="15%" align="center"><b>
    <font face="Verdana" color="#FFFFFF" size="1">Receivables</font></b></td>
  </tr>
</table>

<?php 
$query = "SELECT * FROM `flats` where `what` ='$_SESSION[user]'  ORDER BY `flats` ASC  ";
$result = mysqli_query($connect,$query);
    while($row = mysqli_fetch_assoc($result)) {

?>
        
    
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
  <tr>
    <td width="20%" align="center">
  <font size="1" face="Verdana"><a href="status_mutation_show.php?flatno=<?php echo $row['flats'];?>">Mutation</a> - 
  <?php echo $row['flats'];?>  - <a href="status_receipts_show.php?flatno=<?php echo $row['flats'];?>&name=<?php echo $row['name'];?>">Ledger</a></font>&nbsp;</td>
<td width="20%" align="center">
<font size="1" face="Verdana">
<a href="receipts.php?unitid=<?php echo $row['flats'];?>&name=<?php echo $row['name'];?>&rebate=<?php echo $row['Broker'];?>"><?php echo $row['name'];?></a>
</font>&nbsp;</td>
<td width="15%" align="center">
<?php 


$SQL2 = "SELECT `sold` FROM `flats` where `flats`  = '$row[flats]' AND what = '$_SESSION[user]' order by `flats` ASc";
$reslt = mysqli_query($connect,$SQL2);
$ss = mysqli_fetch_assoc($reslt);

$strsql="SELECT sum(Amount) as `c` from `receipts` WHERE `FlatNo`= '$row[flats]' AND `what` = '$_SESSION[user]'";
$reslt2 = mysqli_query($connect,$strsql);
$ts = mysqli_fetch_assoc($reslt2);

?>
<font size="1" face="Verdana">

<?php 
 if ($ts['c'] !== "" ){
   if ($ss['sold'] !== "") {

    echo number_format($ts['c']);
    $receivedhisab = $ts['c']/($ss['sold']) *100 ;
    
    echo " ( ". number_format($receivedhisab)  . "% )";

  }
}
?>
 </font></td>
		   <td width="15%" align="center"><font size="1" face="Verdana"><?php echo $row['Broker'];?><br>
		   
		   <?php 
$ps = "SELECT `buyeragentname` from `mutation` where  flatno = '$row[flats]' AND what = '$_SESSION[user]' ORDER by id DESC limit 0,1";
$eof = mysqli_query($connect,$ps);

while ($r = mysqli_fetch_array($eof)){ 

    echo $r['buyeragentname'];
 
  }
	?>	   
		   
		   </font></td>
    <td width="15%" align="center"><font size="1" face="Verdana"><?php echo $row['sold'];?></font></td>
    <td width="15%" align="center">
<font size="1" face="Verdana">

<?php 

if (!$ts['c'] == "" ){
   if (!$ss['sold'] == "") {

      $b = $ss['sold']-$ts['c']; 
          echo $b ;

  }
}

?>


</font></td>
  </tr>
</table>

<?php } ?>

<p>&nbsp;</p>



<p align="center"><b><font face="Verdana" size="5">Last 10 Receipts</font></b></p>


<table border="0" cellpadding="0" cellspacing="10" style="border-collapse: collapse" width="100%" id="AutoNumber1">
  <tr>
    <td width="50%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="50%" align="center" valign="top"><font face="Verdana" size="2">
    
    <table border="0" cellpadding="0" cellspacing="5" style="border-collapse: collapse; border:1px dashed black;" width="100%" id="AutoNumber1">
  <tr>
    <td width="20%" align="center"><font size="1" face="Verdana"><b>DATE</b></font></td>
    <td width="20%" align="center" valign="top"><font size="1" face="Verdana"><b>PARTICULARS</b></font></td>
    <td width="20%" align="center"><font size="1" face="Verdana"><b>AMOUNT</b></font></td>
    <td width="20%" align="center"><font size="1" face="Verdana"><b>UNIT</b></font></td>
	 <td width="20%" align="center"><font size="1" face="Verdana"><b>CODE</b></font></td>
  </tr>
    
      <?php 
$SQL2 = "SELECT `date`,`Name`,`chequeno`,`Amount`,`FlatNo`,`code` from `receipts` where `what` = '$_SESSION[user]'  AND `name` <> 'hide'  order by ID DESC limit 0,10";
$result2 = mysqli_query($connect,$SQL2);

  while ($rs=mysqli_fetch_array($result2)){ 
?>
  <tr>
    <td width="20%" style="border:1px dashed black;" align="center"><font size="1" face="Verdana"><?php echo $rs['date'];?></font></td>
    <td width="20%" style="border:1px dashed black;" align="center"><font size="1" face="Verdana"><?php echo $rs['Name'];?> *****  <?php echo $rs['chequeno'];?></font></td>
    <td width="20%" style="border:1px dashed black;" align="center"><font size="1" face="Verdana"><?php echo $rs['Amount'];?></font></td>
    <td width="20%" style="border:1px dashed black;" align="center"><font size="1" face="Verdana"><?php echo $rs['FlatNo'];?></font></td>
	 <td width="20%" style="border:1px dashed black;" align="center"><font size="1" face="Verdana"><?php echo $rs['code'];?></font></td>
  </tr>
  
  <?php } ?>  
    </table>
    </font></td>
  </tr>
</table>

<br>


<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber3">
  <tr>
    <td width="20%" align="center">&nbsp;</td>
    <td width="20%" align="center">&nbsp;</td>
    <td width="20%" align="center"><b><font face="Verdana" size="1">TOTAL 
    RECEIVED</font></b></td>
    <td width="20%" align="center"><b><font face="Verdana" size="1">TOTAL SALES</font></b></td>
    <td width="20%" align="center"><b><font face="Verdana" size="1">TOTAL 
    RECEIVABLES</font></b></td>
  </tr>
  <tr>
    <td width="20%" align="center"><b><font face="Verdana" size="1">TOTALS:</font></b></td>
    <td width="20%" align="center">&nbsp;</td>
    <td width="20%" align="center"><b><font face="Verdana" size="1">

      <center>
<?php 
$strsql="SELECT sum(Amount) as c from receipts WHERE what = '$_SESSION[user]'";
$result3 = mysqli_query($connect,$strsql);
$Rs = mysqli_fetch_assoc($result3);
$aya = $Rs['c'];
    echo  number_format($aya)  ; 
 ?>
 </center>
</font></b></td>
    <td width="20%" align="center"><b><font face="Verdana" size="1">
 <center>
 <?php 
$strsql="SELECT sum(sold) as sprice from flats WHERE what = '$_SESSION[user]'";
$result4 = mysqli_query($connect,$strsql);
echo mysqli_error($connect);
$Rs2 = mysqli_fetch_assoc($result4);
$baichahuwa = $Rs2['sprice']; 
    echo number_format(  $baichahuwa);
 ?>
    
    </center>

    
    </font></b></td>
    <td width="20%" align="center"><b><font face="Verdana" size="1">
    
    
    
   
    <center>
<?php  
$b = $baichahuwa - $aya;
echo number_format($b);
?>
</center>
    
    
    
    
    
    
    </font></b></td>
  </tr>
</table>




</body>

</html>