 
<?php
 include('common.php');
?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Undertaking <?php echo $_SESSION["project"]; ?></title>



<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION["project"]; ?></center></font></b>


  


</head>

<body>

<p align="center"><font face="Verdana"><b><font size="5">Undertaking Foam</font></b><br>
</font></p>
<br>
<form method="POST" style="font-family: Verdana; font-size: 12pt" action="undertaking_add.php" name="formcheck">
  <div align="center">
    <center>
    <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" width="80%" id="AutoNumber1">
      <tr>
        <td width="23%"><font size="2">Date :-</font></td>
        <td width="43%">
        <input type="text" name="date" size="14" style="font-family: Verdana; font-size: 10pt" value="<?php  echo date('d/m/Y'); ?>"></td>
      </tr>
      <tr>
        <td width="23%"><font face="Verdana" size="2">Seller Name :-</font></td>
        <td width="43%">
		<input type="text" name="SELLERFULLNAME" size="36" value="<?php echo isset($_GET["name"]) ? $_GET["name"]: ''; ?>" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	        <tr>
        <td width="23%"><font face="Verdana" size="2">Seller CNIC :-</font></td>
        <td width="43%">
		<input type="text" name="SELLERCNIC" size="36" value="" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	  	        <tr>
        <td width="23%"><font face="Verdana" size="2">UNIT NO :-</font></td>
        <td width="43%">
		<input type="text" name="UNITNO" size="36" value="" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  	  	        <tr>
        <td width="23%"><font face="Verdana" size="2">Amount :-</font></td>
        <td width="43%">
		<input type="text" name="AMOUNT" size="36" value="" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  

	  

      
      <tr>
        <td width="23%"><font face="Verdana" size="2">Amount in Words:-</font></td>
        <td width="43%">
        <input type="text" name="AMOUNTINWORDS" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	     <tr>
        <td width="23%"><font face="Verdana" size="2">Buyer Name :-</font></td>
        <td width="43%">
        <input type="text" name="BUYERNAME" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	     <tr>
        <td width="23%"><font face="Verdana" size="2">Buyer CNIC:-</font></td>
        <td width="43%">
        <input type="text" name="CNICBUYER" class="number" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	
     <tr>
        <td width="23%"></td>
        <td width="43%"> <p align="center"><input type="submit" value="Submit" style="font-family: Verdana; font-size: 10pt"></p></td>
      </tr>
	  
    </table>
    </center>
  </div>


</form>


</body>

</html>