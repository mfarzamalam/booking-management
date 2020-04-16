 
<?php
 include('common.php');
?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Mutation Form <?php echo $_SESSION["project"]; ?></title>



<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION["project"]; ?></center></font></b>

    

</head>

<body>

<p align="center"><font face="Verdana"><b><font size="5">Mutation Foam</font></b><br>
</font></p>
<br>
<form method="POST" style="font-family: Verdana; font-size: 12pt" action="mutation_add.asp" name="formcheck" onsubmit="return formCheck(this);">
  <div align="center">
    <center>
    <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" width="80%" id="AutoNumber1">
      <tr>
        <td width="23%"><font size="2">Date :-</font></td>
        <td width="43%">
        <input type="text" name="date" size="14" style="font-family: Verdana; font-size: 10pt" value=""></td>
      </tr>
      <tr>
        <td width="23%"><font face="Verdana" size="2">Type :-</font></td>
        <td width="43%">
		<input type="text" name="type" size="36" value="" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	        <tr>
        <td width="23%"><font face="Verdana" size="2">Customer Name :-</font></td>
        <td width="43%">
		<input type="text" name="name" size="36" value="<?php echo isset($_GET["name"]) ? $_GET["name"]: ''; ?>" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	  	        <tr>
        <td width="23%"><font face="Verdana" size="2">Customer CNIC :-</font></td>
        <td width="43%">
		<input type="text" name="cnic" size="36" value="" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  	  	        <tr>
        <td width="23%"><font face="Verdana" size="2">Contact No :-</font></td>
        <td width="43%">
		<input type="text" name="contactno" size="36" value="" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	  	        <tr>
        <td width="23%"><font face="Verdana" size="2">Status :-</font></td>
        <td width="43%">

        <input type="checkbox" name="re-sale" value="resale">Re-sale
		<input type="checkbox" name="booking" value="booking">Booking
		</td>
      </tr>
	  
	  
      <tr>
        <td width="23%"><font face="Verdana" size="2">Unit No :-</font></td>
        <td width="43%"><select size="1" name="FlatNo" style="font-family: Verdana; font-size: 10pt">
        <?php 
          $what = $_SESSION["user"];
          $query = "SELECT * FROM flats where What = '$what'";
          $result = mysqli_query($connect,$query);
        ?>
 
  <?php 
    while($row = mysqli_fetch_array($result)){
  ?>
    <option value="<?php $row['flats']?>" > <?php echo $row['flats']?> </option>
  <?php } ?>
</select></td>
      </tr>
      
      <tr>
        <td width="23%"><font face="Verdana" size="2">Buyer Agent Name:-</font></td>
        <td width="43%">
        <input type="text" name="buyeragentname" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	     <tr>
        <td width="23%"><font face="Verdana" size="2">Buyer Agent Number :-</font></td>
        <td width="43%">
        <input type="text" name="buyeragentnumber" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	     <tr>
        <td width="23%"><font face="Verdana" size="2">Buying Price :-</font></td>
        <td width="43%">
        <input type="text" name="price" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	  <tr>
        <td width="23%"><font face="Verdana" size="2">Balance :-</font></td>
        <td width="43%">
        <input type="text" name="balance" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	  
	     <tr>
        <td width="23%"><font face="Verdana" size="2">Seller Agent Name :-</font></td>
        <td width="43%">
        <input type="text" name="selleragentname" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	     <tr>
        <td width="23%"><font face="Verdana" size="2">Seller Agent Number:-</font></td>
        <td width="43%">
        <input type="text" name="selleragentnumber" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	  	     <tr>
        <td width="23%"><font face="Verdana" size="2">Seller Name:-</font></td>
        <td width="43%">
        <input type="text" name="sellername" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	  	     <tr>
        <td width="23%"><font face="Verdana" size="2">Seller Number:-</font></td>
        <td width="43%">
        <input type="text" name="sellernumber" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	  
      <tr>
        <td width="23%"><font face="Verdana" size="2">Nominee :-</font></td>
        <td width="43%">
        <input type="text" name="nominee" size="28" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
     	  
      <tr>
        <td width="23%"><font face="Verdana" size="2">Nominee CNIC/Contact :-</font></td>
        <td width="43%">
        <input type="text" name="nomineecnic" size="28" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>	  
  
      <tr>
        <td width="23%"><font face="Verdana" size="2">Note :-</font></td>
        <td width="43%">
       

 <textarea rows="4" name="note" cols="50"></textarea> 
	  
		</td>
      </tr>

	  

	  
	  
    </table>
    </center>
  </div>


</form>

</body>

</html>