
<?php
   include('common.php');
 
?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta http-equiv="Cache-Control" content="no-store" />
<title>Contact List <?php echo $_SESSION["project"]?></title>
 


</head>

<body>

<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION["project"]?></center></font></b>

<br>

<hr>


<?php if (isset($_GET["shoot"]) &&  $_GET["shoot"] =="ok" ) { ?>
	<form action="smscampain.php" method="post"  target="_blank" onsubmit="return confirm('Are you sure you want to Send SMS?')">
		

<select  id="konhaiadd" size="1" name="konhaiadd">
     
	  <option value="Direct Client">Direct Client</option>
	   <option value="Direct Brokers">Direct Brokers</option>
	   <option value="Market Brokers">Market Brokers</option>
	   <option value="DHA">DHA</option>

</select>
		<br>
<textarea rows="15" name="message" cols="75"  style="font-size: 16pt" maxlength="250">
Whatsapp/Call
03218966338
03142245019
</textarea>
<br>
Campain ID?<input type="text" name="campainid" size="20" value="">
		<input type="submit" value="Submit">
		</form>
		
<?php } ?>

<hr>
SMS SERVICE SENDING TIME: 11:45am to 12
<br>

<a href="contactlist.php">HOME</a> |<a href="historysms.asp">VIEW HISTORY SEND</a> | <a href="campain.php">View Campains</a> | <a href="viewedpage.php">Viewed Page</a>
 | <a href="testsms.php" target="_blank"  onclick="return confirm('Are you sure you want to Send TEST SMS?')">TEST SMS</a>
<br>
<?php
$query = "select count(*) as c from smshistory where statusss = 'send';"; 
$result = mysqli_query($connect,$query);
$row= $result->fetch_assoc(); 
$total =  $row["c"];

echo "PENDING TO SEND SMS : ";  
echo $total;
 
?>
<br>
<?php
 
$query= "select count(*) as c from contactlist where konhai = 'Direct Client'";
$result = mysqli_query($connect,$query);
$row= $result->fetch_assoc(); 
$total =  $row["c"];
 
 

echo "DIRECT CLIENTS : ";
 
echo $total;
?>
<br>

 
<?php
 
 
$query ="select count(*) as c from contactlist where konhai = 'Direct Brokers'";
$result = mysqli_query($connect,$query);
$row= $result->fetch_assoc(); 
$total =  $row["c"];
echo  "DIRECT BROKERS : ";
 
echo $total;
?>
<br>
<?php
 

$query="select count(*) as c from contactlist where konhai = 'Market Brokers'";
$result = mysqli_query($connect,$query);
$row= $result->fetch_assoc(); 
$total =  $row["c"];
echo "MARKET BROKERS : ";
 
echo $total;
?>
<br>

<?php
 

$query="select count(*) as c from contactlist where konhai = 'DHA'";
$result = mysqli_query($connect,$query);
$row= $result->fetch_assoc(); 
$total =  $row["c"];
echo "DHA : ";
 
echo $total;
?>

<br>
    <hr color="#000000" size="1">
 
	<?php if(isset($_GET["msg"])) echo $_GET["msg"] ?>
	
	<br>
	<h5> SEARCH <h5>
	
	<form method="GET" action="contactlist.php" id="form">
  SEARCH BY NUMBER, NAME<br>
  <input type="text" name="q" size="28" id="q">
  <input type="submit" value="Search"></p>

  </div>
  </form>

	
    <br>
    <br>
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber3" bgcolor="#000000">
<tr>
  <td width="20%" align="center"><font color="#FFFFFF"><b>Number</b></font></td>
 <td width="30%" align="center"><font color="#FFFFFF"><b>Name</b></font></td>
	   <td width="30%" align="center"><font color="#FFFFFF"><b>Type</b></font></td>
		<td width="20%" align="center"><b><font color="#FFFFFF">UPDATE</font></b></td>
</tr>
    </table>
    <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber4">

<form method="POST" action="add_contactlist.php" target="_blank">
<tr>
<td width="20%"><input type="text" name="number" size="30" value=""></td>
<td width="30%"><input type="text" name="name" size="30" value=""><br>
<td width="30%">

 <select  id="konhaiadd" size="1" name="konhaiadd">
     
	  <option value="Direct Client">Direct Client</option>
	   <option value="Direct Brokers">Direct Brokers</option>
	   <option value="Market Brokers">Market Brokers</option>
	   <option value="DHA">DHA</option>

</select>
</td>

<td width="20%"><input type="submit" value="Add NEW" name="B1"> </td>
</tr>
</form>

<?php
$query ="select * from contactlist ORDER by ID DESC limit 0,25;";
if (isset($_GET["q"])){
    $q =  $_GET["q"];
    $query ="select * from contactlist where number like '%'  '$q'  '%' OR name like '%' '$q'  '%' OR konhai like '%'  '$q'  '%' ORDER by id DESC limit 0,30;";
} 

$result = mysqli_query($connect,$query);
while($row = mysqli_fetch_array($result)){
?>
  <form method="POST" action="update_contactlist.php" target="_blank">
<tr>

<td width="20%"><input type="text" name="number" size="30" value="<?php echo $row["number"] ?>"></td>
<td width="30%"><input type="text" name="name" size="30" value="<?php echo $row["name"] ?>"></td>
<td width="30%"> <select size="1" name="konhai">
       
  <option value="<?php echo $row["konhai"]?>" selected><?php echo $row["konhai"] ?></option>
	  <option value="Direct Client">Direct Client</option>
	   <option value="Direct Brokers">Direct Brokers</option>
	   <option value="Market Brokers">Market Brokers</option>
	   <option value="DHA">DHA</option>
                 
  </select>

 <select size="1" name="subscribe">
       
  <option value="<?php echo  $row["Subscribe"]?>" selected"><?php echo $row["Subscribe"]?></option>
 <option value="Sub">Sub</option>
	   <option value="UnSub">UnSub</option>
	 
                 
  </select>
</td>

<td width="20%"><input type="submit" value="Update" name="B1"> </td>
</tr>
	    <input type="hidden" name="id" value="<?php echo $row["id"]?>">
		
	  </form>

	  
<?php
 }
?>
    </table>

  
    </td>
  </tr>
</table>

</body>

</html>