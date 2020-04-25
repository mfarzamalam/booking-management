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
        <td width="43%"><font face="Verdana" size="1"><?php echo $flatno;?></font></td>
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


<?php while ($rs = mysqli_fetch_assoc($result)) {?>


  <div align="center">
    <center>
    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
      <tr>
        <td width="10%" align="center"><font face="Verdana" size="1"><?php echo date("d/m/Y");?><br><a href="del_mutation.php?id=<?php echo $rs['id'];?>&flatno=<?php echo $rs['flatno'];?>" onclick="return confirm('Are you sure you want to Delete this Mutation?');">Delete</a><br><a href="edit_mutation.php?id=<?php echo $rs['id'];?>&flatno=<?php echo $rs['flatno'];?>">Edit</a></font>&nbsp;</td>
        <td width="20%" align="center"><font face="Verdana" size="1"><?php echo $rs['name'];?><br><?php echo $rs['cnic'];?><br><?php echo $rs['contactno'];?><br>Agreed Price:<?php echo $rs['price'];?></font>&nbsp;
		<form action="sendsms.asp" method="post"  target="_blank">
		<font face="Verdana" size="1">Receiver</font>
		<input type="text" id="receiver" name="receiver" size="20" value="<?php echo $rs['contactno'];?>">
<textarea rows="10" name="message" cols="25"  style="font-size: 10pt">Dear <?php echo $rs['name'];?> 
Unit No: <?php echo $rs['flatno'];?> 
Total Dues:
Kindly Clear
<?php echo $_SESSION['project'];?> 
03142245019
03218966338
</textarea><br>
		<input type="submit" value="Submit">
		</form>
		
		</td>
        <td width="20%" align="center"><font face="Verdana" size="1"><?php echo $rs['buyeragentname'];?><br><?php echo $rs['buyeragentnumber'];?></font>
		
		
		<form action="sendsms.asp" method="post"  target="_blank">
		<font face="Verdana" size="1">Receiver</font>
		<input type="text" id="receiver" name="receiver" size="20" value="<?php echo $rs['buyeragentnumber'];?>">
<textarea rows="10" name="message" cols="25"  style="font-size: 10pt">Dear <?php echo $rs['buyeragentname'];?> 
Unit No: <?php echo $rs['flatno'];?> 
You Client: <?php echo $rs['name'];?> 
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
      
      <?php if($rs['balance'] !== "") {?>
		      Balance:
		      <?php echo $rs['balance'];?><br>
		      <br>
      <?php } ?>
		
  		<?php if($rs['note'] !== "") {?>
	    	Note: <?php echo $rs['note'];?><br>
		    <br>
		  <?php } ?>
		
			
      <?php if($rs['first'] !== "") {?>
    		PAYMENT SCHEDULE:-<BR>
		    <?php echo $rs['first'];?> | <?php echo $rs['firstdetail'];?>
      <?php } ?>

		
      <?php if($rs['second'] !== "") {?>
          <br><br>
		      <?php echo $rs['second'];?> | <?php echo $rs['seconddetail'];?>
      <?php } ?>
		
    
      <?php if($rs['installment'] !== "") {?>
		      <br><br>
		      <?php echo $rs['installment'];?> | <?php echo $rs['installmentdetail'];?>
      <?php } ?>
    
    
      <?php if($rs['yearlyone'] !== "") {?>
		    <br><br>
		    <?php echo $rs['yearlyone'];?> | <?php echo $rs['yearlyonedetail'];?>
      <?php } ?>
    
    
      <?php if($rs['yearlytwo'] !== "") {?>
		    <br><br>
		    <?php echo $rs['yearlytwo'];?> | <?php echo $rs['yearlytwodetail'];?>
      <?php } ?>

      <?php if($rs['yearlythree'] !== "") {?>
		    <br><br>
		    <?php echo $rs['yearlythree'];?> | <?php echo $rs['yearlythreedetail'];?>
      <?php } ?>

      <?php if($rs['completion'] !== "") {?>
		    <br><br>
		    <?php echo $rs['completion'];?> | <?php echo $rs['completiondetail'];?>
      <?php } ?>
	
		
		</font>&nbsp;</td>

      </tr>
    </table>
    </center>
  </div>
  
  
      <?php } ?>
  

</body>

</html>