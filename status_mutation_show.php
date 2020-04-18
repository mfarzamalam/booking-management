<?php 
  include('common.php');
?>

<?php 
  $flatno = $_GET['flatno'];

  if ($_SESSION['user'] == "") {
        header('location:default.php');
    }
?>
<html>

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=WINDOWS-1252">
<title>Status of Mutation</title>
</head>

<b><font size="2" face="Verdana" color="#800000"><center><?php $_SESSION['project']?></center></font></b>




<?php 

$query = "SELECT * FROM `mutation` where `flatno` = '$flatno' AND `what`='$_SESSION[user]' order by ID DESC";
$result = mysqli_query($connect,$query);
$row = mysqli_fetch_assoc($result);

?>



<body>
<p align="right"><font size="1" face="Verdana">Date :   <?php echo date("d/m/Y"); ?>
 </font>
</p>
<p align="center"><b><font size="5" face="Verdana">Status of Mutations (s)</font></b></p>
<br><font size="2" face="Verdana">
<a href="mutation.php?flatno=<?php echo $flatno;?>">NEW BOOKING / TRANSFER</a></font>

 
  <div align="center">
    <center>
    <table border="0" cellpadding="0" cellspacing="1" style="border-collapse: collapse" width="60%" id="AutoNumber1">
      <tr>
        <td width="23%"><font size="1">Office No :-</font></td>
        <td width="43%"><font face="Verdana" size="1"><?php echo $row['flatno'];?></font></td>
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


<% while not rs.eof%>


  <div align="center">
    <center>
    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
      <tr>
        <td width="10%" align="center"><font face="Verdana" size="1"><?php echo date("d/m/Y");?><br><a href="del_mutation.php?id=<?php echo $row['id'];?>&flatno=<?php echo $row['flatno'];?>" onclick="return confirm('Are you sure you want to Delete this Mutation?');">Delete</a><br><a href="edit_mutation.php?id=<?php echo $row['id'];?>&flatno=<?php echo $row['flatno'];?>">Edit</a></font>&nbsp;</td>
        <td width="20%" align="center"><font face="Verdana" size="1"><?php echo $row['name'];?><br><?php echo $row['cnic'];?><br><?php echo $row['contactno'];?><br>Agreed Price:<?php echo $row['price'];?></font>&nbsp;
		<form action="sendsms.asp" method="post"  target="_blank">
		<font face="Verdana" size="1">Receiver</font>
		<input type="text" id="receiver" name="receiver" size="20" value="<?php echo $row['contactno'];?>">
<textarea rows="10" name="message" cols="25"  style="font-size: 10pt">Dear <?php echo $row['name'];?> 
Unit No: <?php echo $row['flatno'];?> 
Total Dues:
Kindly Clear
<?php echo $_SESSION['project'];?> 
03142245019
03218966338
</textarea><br>
		<input type="submit" value="Submit">
		</form>
		
		</td>
        <td width="20%" align="center"><font face="Verdana" size="1"><?php echo $row['buyeragentname'];?><br><?php echo $row['buyeragentnumber'];?></font>
		
		
		<form action="sendsms.asp" method="post"  target="_blank">
		<font face="Verdana" size="1">Receiver</font>
		<input type="text" id="receiver" name="receiver" size="20" value="<?php echo $row['buyeragentnumber'];?>">
<textarea rows="10" name="message" cols="25"  style="font-size: 10pt">Dear <?php echo $row['buyeragentname'];?> 
Unit No: <?php echo $row['flatno'];?> 
You Client: <?php echo $row['name'];?> 
Total Dues:
Kindly Clear
<?php echo $_SESSION['project'];?> 
03142245019
03218966338
</textarea><br>
		<input type="submit" value="Submit">
		</form>
		
		
		</td>
        <td width="50%" align="center"><font size="1">
      
      <?php if(!$row['balance'] == "") {?>
		      Balance:
		      <?php echo $row['balance'];?><br>
		      <br>
      <?php } ?>
		
  		<?php if(!$row['note'] == "") {?>
	    	Note: <?php echo $row['note'];?><br>
		    <br>
		  <?php } ?>
		
			
      <?php if(!$row['first'] == "") {?>
    		PAYMENT SCHEDULE:-<BR>
		    <?php echo $row['first'];?> | <?php echo $row['firstdetail'];?>
      <?php } ?>

		
      <?php if(!$row['second'] == "") {?>
          <br><br>
		      <?php echo $row['second'];?> | <?php echo $row['seconddetail'];?>
      <?php } ?>
		
    
      <?php if(!$row['installment'] == "") {?>
		      <br><br>
		      <?php echo $row['installment'];?> | <?php echo $row['installmentdetail'];?>
      <?php } ?>
    
    
      <?php if(!$row['yearlyone'] == "") {?>
		    <br><br>
		    <?php echo $row['yearlyone'];?> | <?php echo $row['yearlyonedetail'];?>
      <?php } ?>
    
    
      <?php if(!$row['yearlytwo'] == "") {?>
		    <br><br>
		    <?php echo $row['yearlytwo'];?> | <?php echo $row['yearlytwodetail'];?>
      <?php } ?>

      <?php if(!$row['yearlythree'] == "") {?>
		    <br><br>
		    <?php echo $row['yearlythree'];?> | <?php echo $row['yearlythreedetail'];?>
      <?php } ?>

      <?php if(!$row['completion'] == "") {?>
		    <br><br>
		    <?php echo $row['completion'];?> | <?php echo $row['completiondetail'];?>
      <?php } ?>
	
		
		</font>&nbsp;</td>

      </tr>
    </table>
    </center>
  </div>
  
  
  <%
rs.movenext
wend
%>
  
  

</body>

</html>