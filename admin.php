<?php
 include('common.php');
?>

<?php
    if ($_GET['form1'] == "Login") {
?>

<?php

if ($_GET['user'] == "" || $_GET['pass'] == "") {
header('location:default.php?a=Please enter your Password&url=""');

}

if ($_GET['user'] == "hello" && $_GET['pass'] == "moto") {
$_SESSION['adminid'] = $_GET['user'];

if ($_GET['url'] == "") {
			header('location:admin.php');
            } else {
			// Response.Redirect request.form("url")		// NEED FIXING
            }
			
} else {
header('location:admin.php?a=Access Denied&url=');          // NEED FIXING
}

?> <?php } ?>

<html>

<head>
<link href="style-admin.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Add Customer</title>
</head>

<body>
<br>
Welcome 
<?php echo $_GET['a'];?>

<?php if ($_SESSION['adminid'] == "" ) { ?>

    <form method="POST" action="admin.php">
  <p>user:<input type="text" name="user" size="20"><br>
  pass:<input type="password" name="pass" size="20"></p>
  <p><input type="submit" value="Login" name="form1"></p>
  <input type="hidden" name="url" value="<?php echo $_GET['url'] ?>">
</form>

<? } else { ?>

<?php  echo $_GET['remote_addr']?>

<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber3" bgcolor="#000000">
<tr>
  <td width="80%" align="center"><font color="#FFFFFF"><b>IP</b></font></td>
		<td width="20%" align="center"><b><font color="#FFFFFF">UPDATE</font></b></td>
</tr>
    </table>
    <table border="1" cellpadding="0" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber4">

<form method="POST" action="add_ip.asp" target="_blank">
<tr>
<td width="80%"><input type="text" name="ip" size="20" value="<?php echo $_GET['remote_addr']?>"></td>
<td width="20%"><input type="submit" value="Add NEW" name="B1"> </td>
</tr>
</form>

<?php

$query = "SELECT * from `ip` where `ip` != '72.255.61.77' or ip != '202.47.35.79' ORDER by id ASC";
$result = mysqli_query($connect,$query);

while ($ps = mysqli_fetch_assoc($result)) {
?>
  <form method="POST" action="update_ip.php" target="_blank">
<tr>
<td width="80%"><input type="text" name="ip" size="20" value=""></td>
<td width="20%"><input type="submit" value="Update" name="B1"> <a href="delip.php?id=<?php $ps['id'];?>">Delete</a> </td>
</tr>
	    <input type="hidden" name="id" value="<?php $ps['id'];?>">
		
	  </form>

<?php }

$ps = "Nothing";
?>
    </table>  

<a href=logout.php>Logout</a>

<?php } ?>
  
  </body>

</html>