<?php
   include('common.php');
 
?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Code Manager - <?php echo $_SESSION["project"]?></title>
<style>

body   { font-family: Arial; font-size: 12pt }

</style>
</head>

<body>

<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION["project"]?></center></font></b>

    

<br>
    <hr color="#000000" size="1">
	
	<?php echo isset($_GET['msg'])? $_GET['msg']:"" ?>
	
	<br>
	<h5> SEARCH <h5>
	
	<form method="GET" action="codemanager.php" id="form">
  SEARCH BY COD NO, FROM, CHQ NO<br>
  <input type="text" name="q" size="28" id="q">
  <input type="submit" value="Search"></p>

  </div>
  </form>

	
    <br>
    <br>
&nbsp;<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber3" bgcolor="#000000">
<tr>
  <td width="20%" align="center"><font color="#FFFFFF"><b>Code</b></font></td>
 <td width="10%" align="center"><font color="#FFFFFF"><b>From</b></font></td>
	   <td width="10%" align="center"><font color="#FFFFFF"><b>CHQ No</b></font></td>
	   <td width="35%" align="center"><font color="#FFFFFF"><b>Bank</b></font></td>
	    <td width="10%" align="center"><font color="#FFFFFF"><b>Amount</b></font></td>
		<td width="20%" align="center"><b><font color="#FFFFFF">UPDATE</font></b></td>
</tr>
    </table>
    <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber4">

<form method="POST" action="add_codemanager.php" target="_blank">
<tr>
<td width="30%"></td>
<td width="10%"><input type="text" name="fromm" size="15" value=""></td>
<td width="20%"><input type="text" name="chqno" size="15" value=""><br>
<td width="20%">

 <select size="1" name="bank">
       <option value="-----">-----</option>
 <?php
$SQL2 = "SELECT `bankname` FROM `banklist`  order by `bankname` ASc";
$result_sql2 = mysqli_query($connect,$SQL2);

?>

<?php while($rs = mysqli_fetch_assoc($result_sql2)) {?> 

<option value="<?php echo $rs['bankname'];?>"><?php echo $rs['bankname'];?></option>

<?php } ?>

</select>

</td>
<td width="20%"><input type="text" name="amount" size="20" value=""></td>
<td width="20%"><input type="submit" value="Add NEW" name="B1"> </td>
</tr>
</form>

<?php
$q = isset($_GET['q']) ? $_GET['q'] : "" ;

if ($q !== "") {
$query = "SELECT * from `codemanager` where `code` like '%$q%' OR `fromm` like '%$q%' OR `chqno` like '%$q%' OR `bank` like '%$q%' ORDER by id DESC limit 0,30";
//$query = "SELECT * from `codemanager` where `from` like '%$q%' OR `chqno` like '%$q%' OR `bank` like '%$q%' AND `what` = '$_SESSION[user]' ORDER by id DESC limit 0,30";

$result_query = mysqli_query($connect,$query);
 
} else {

$query = "SELECT * from `codemanager` ORDER by ID DESC limit 0,30";
 

$result_query = mysqli_query($connect,$query);

 
}

while($ps = mysqli_fetch_assoc($result_query)) {  
    
?>

  <form method="POST" action="update_codemanager.php" target="_blank">
<tr>
<td width="10%"><h1><?php echo $ps['code'];?></h1><br><?php echo $ps['datee'];?></td>
<td width="10%"><input type="text" name="fromm" size="15" value="<?php echo $ps['fromm'];?>"></td>
<td width="20%"><input type="text" name="chqno" size="15" value="<?php echo $ps['chqno'];?>"></td>
<td width="20%">
 <select size="1" name="bank">
       
  <option value="<?php echo $ps['bank'];?>" selected><?php echo $ps['bank'];?></option>
 	   <?php
$SQL2 = "SELECT `bankname` FROM `banklist` order by bankname ASc";
$result = mysqli_query($connect,$SQL2);

?>
<?php while ($ss = mysqli_fetch_assoc($result)) { ?> 

<option value="<?php echo $ss['bankname'];?>"><?php echo $ss['bankname'];?></option>

<?php } ?>
  </select>

</td>
<td width="20%"><input type="text" name="amount" size="20" value="<?php echo $ps['amount'];?>">

</td>
<td width="20%"><input type="submit" value="Update" name="B1"> <a href="delcode.php?id=<?php echo $ps['id'];?>" onclick="return confirm('Are you sure you want to Delete this Receipt?');">Delete</a></td>
</tr>
	    <input type="hidden" name="id" value="<?php echo $ps['id'];?>">
		
	  </form>

	  
<?php 
}
$ps = "Nothing";
?>
    </table>

  
    </td>
  </tr>
</table>

</body>

</html>