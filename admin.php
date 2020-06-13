<?php
 include('commonadmin.php');
?>

<?php
    if ( isset ($_POST [ "form1"]) && $_POST['form1'] == "Login") {
 
if ($_POST['user'] == "" || $_POST['pass'] == "") {
header("location:default.php?a=Please enter your Password&url=$_POST[url]");
 
}

if ($_POST['user'] === "" && $_POST['pass'] === "") {
        $_SESSION['adminid'] = $_POST['user'];

if ( !isset($_POST["url"]) || $_POST['url'] === "") {
                   header('location:admin.php');
         
            } else {
           //   header( "location:$_POST[url]");	 
 
            }
			
} else {
header("location:admin.php?a=Access Denied&url= $_POST[url]");         
 
}
  } ?>

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
<?php if(isset($_GET['a'])) echo $_GET['a'];?>

<?php if ( !isset($_SESSION["adminid"])   ) { ?>

    <form method="POST" action="admin.php">
  <p>user:<input type="text" name="user" size="20"><br>
  pass:<input type="password" name="pass" size="20"></p>
  <p><input type="submit" value="Login" name="form1"></p>
  <input type="hidden" name="url" value="<?php echo $_GET['url'] ?>">
</form>

<?php } else { ?>

<?php echo  $_SERVER['REMOTE_ADDR']?>

<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber3" bgcolor="#000000">
<tr>
  <td width="80%" align="center"><font color="#FFFFFF"><b>IP</b></font></td>
		<td width="20%" align="center"><b><font color="#FFFFFF">UPDATE</font></b></td>
</tr>
    </table>
    <table border="1" cellpadding="0" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber4">

<form method="POST" action="add_ip.php" target="_blank">
<tr>
<td width="80%"><input type="text" name="ip" size="20" value="<?php echo $_SERVER['REMOTE_ADDR']?>"></td>
<td width="20%"><input type="submit" value="Add NEW" name="B1"> </td>
</tr>
</form>

<?php

$query = "SELECT * from `ip` where `ip` != '' or ip != '' ORDER by id ASC";
$result = mysqli_query($connect,$query);

while ($ps = mysqli_fetch_assoc($result)) {
?>
  <form method="POST" action="update_ip.php" target="_blank">
<tr>
<td width="80%"><input type="text" name="ip" size="20" value=""><?php echo $ps['ip']; ?></td>
<td width="20%"><input type="submit" value="Update" name="B1"> <a href="delip.php?id=<?php echo $ps['id'];?>">Delete</a> </td>
</tr>
	    <input type="hidden" name="id" value="<?php echo $ps['id'];?>">		
	  </form>

<?php }

$ps = "Nothing";
?>
    </table>  

<a href=logout.php>Logout</a>

<?php } ?>
  
  </body>

</html>