  <?php
    include("common.php");
  
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
<b><font size="2" face="Verdana" color="#800000"><center> </center></font></b>
<p align="right"><font size="1" face="Verdana">Date : <?php  echo date("d/m/Y"); ?>

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
    $query = "SELECT * from flats";
    $result = mysqli_query($connect,$query);

    while($row = mysqli_fetch_array($result)) {
?>
    
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
  <tr>
    <td width="20%" align="center">
  <font size="1" face="Verdana"><a href="status_mutation_show.php?flatno=<?php echo $row['flats'] ?>">Mutation</a> - <?php echo $row['flats'] ?> 
  - <a href="">Ledger</a></font>&nbsp;</td>
<td width="20%" align="center"> <?php echo $row['name'] ?>
<font size="1" face="Verdana">
<a href=""></a>
</font>&nbsp;</td>
<td width="15%" align="center">

<font size="1" face="Verdana">

 </font></td>
		   <td width="15%" align="center"><font size="1" face="Verdana"><br>
		   
		   
		   </font></td>
    <td width="15%" align="center"><font size="1" face="Verdana"> <?php echo $row['sold'] ?> </font></td>
    <td width="15%" align="center">
<font size="1" face="Verdana">


</font></td>
  </tr>
</table>
<br>

<?php } ?>


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
    

  <tr>
    <td width="20%" style="border:1px dashed black;" align="center"><font size="1" face="Verdana"></font></td>
    <td width="20%" style="border:1px dashed black;" align="center"><font size="1" face="Verdana"></font></td>
    <td width="20%" style="border:1px dashed black;" align="center"><font size="1" face="Verdana"></font></td>
    <td width="20%" style="border:1px dashed black;" align="center"><font size="1" face="Verdana"></font></td>
	 <td width="20%" style="border:1px dashed black;" align="center"><font size="1" face="Verdana"></font></td>
  </tr>
  
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
  

</center>
</font></b></td>
    <td width="20%" align="center"><b><font face="Verdana" size="1">
 <center>

    </center>

    
    </font></b></td>
    <td width="20%" align="center"><b><font face="Verdana" size="1">
    
    
    
   
    <center>


  </center>
    
    
    
    
    
    
    </font></b></td>
  </tr>
</table>




</body>

</html>