<?php 
    include("common.php");

?>

<html>

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=WINDOWS-1252">
<title>Status of Mutation</title>
</head>

<b><font size="2" face="Verdana" color="#800000"><center> </center></font></b>



<body>
<p align="right"><font size="1" face="Verdana">Date :  <?php  echo date("d/m/Y"); ?>

</font>
</p>
<p align="center"><b><font size="5" face="Verdana">Status of Mutations (s)</font></b></p>
<br><font size="2" face="Verdana">
<a href="mutation.php?flatno=<?php echo $_GET['flatno']?>">NEW BOOKING / TRANSFER</a></font>

 
  <div align="center">
    <center>
    <table border="0" cellpadding="0" cellspacing="1" style="border-collapse: collapse" width="60%" id="AutoNumber1">
      <tr>
        <td width="23%"><font size="1">Office No :-</font></td>
        <td width="43%"><font face="Verdana" size="1"> </font></td>
      </tr>
       </table>
	  
    </center>
  </div>

  <div align="center">
    <center>
    <table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber2" bordercolorlight="#000000" bgcolor="#000000">
      <tr>
        <td width="10%" align="center"><b><font size="1" color="#FFFFFF">Date</font></b></td>
        <td width="20%" align="center"><font size="1" color="#FFFFFF"><b>Client Details</b></font></td>
        <td width="20%" align="center"><b><font size="1" color="#FFFFFF">Broker Details</font></b></td>
        <td width="50%" align="center"><font size="1" color="#FFFFFF"><b>Note & Installement Details</b></font></td>
      </tr>
    </table>
    </center>
  </div>



  <div align="center">
    <center>
    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
      <tr>
        <td width="10%" align="center"><font face="Verdana" size="1"> <br><a href="del_mutation.php?">Delete</a><br><a href="edit_mutation.php? ">Edit</a></font>&nbsp;</td>
        <td width="20%" align="center"><font face="Verdana" size="1"> <br> <br><br>Agreed Price: </font>&nbsp;
		<form action="sendsms.asp" method="post"  target="_blank">
		<font face="Verdana" size="1">Receiver</font>
		<input type="text" id="receiver" name="receiver" size="20" value=" ">
<textarea rows="10" name="message" cols="25"  style="font-size: 10pt">Dear 
Unit No.: 
Total Dues:
Kindly Clear

03142245019
03218966338
</textarea><br>
		<input type="submit" value="Submit">
		</form>
		
		</td>
        <td width="20%" align="center"><font face="Verdana" size="1"> <br></font>
		
		
		<form action="sendsms.asp" method="post"  target="_blank">
		<font face="Verdana" size="1">Receiver</font>
		<input type="text" id="receiver" name="receiver" size="20" value=" ">
<textarea rows="10" name="message" cols="25"  style="font-size: 10pt">Dear 
Unit No.: 
You Client:
Total Dues:
Kindly Clear


03142245019
03218966338
</textarea><br>
		<input type="submit" value="Submit">
		</form>
		
		
		</td>
        <td width="50%" align="center"><font size="1">
        
        
        <br>
		<br>
		
		
		
		Note:
		<br>
		<br>
		
		
		
		PAYMENT SCHEDULE:-<BR>
		
		<br><br>
        
        
		<br><br>
        
        
		<br><br>
        
        
		<br><br>
        
        
		<br><br>
        
        <br><br>
		
		
		</font>&nbsp;</td>

      </tr>
    </table>
    </center>
  </div>
  
  
  

</body>

</html>