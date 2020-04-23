<?php
   include('common.php');
 
?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Campain List - <?php echo $_SESSION["project"]?></title>
<style>

body   { font-family: Arial; font-size: 12pt }

table {
  border-collapse: collapse;
}

table, td, tr {
  border: 5px solid black;
}

</style>
</head>

<body>

<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION["project"]?></center></font></b>

<hr>


    <br>

    <table cellpadding="20" cellspacing="20" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber4">



<form action="add_campain.php" method="post"  target="_blank" onsubmit="return confirm('Are you sure you want to Continue?')">
	
<tr>


<td width="80%">
<font face="Verdana" style="font-size: 16pt"><input type="text" name="name" size="30" value=""></font><br>
<textarea rows="15" name="material" cols="60"  style="font-size: 16pt"></textarea>
<br>
<a href="https://www.w3schools.com/html/tryit.asp?filename=tryhtml_responsive_text">Responsive</a>
</font></td>

<td width="20%">
<font face="Verdana" style="font-size: 8pt"><input type="submit" value="Submit"></font>
</td>

</tr>
	
</form>

<?php

$query = "SELECT * from `campains` ORDER by ID DESC limit 0,10";
$result = mysqli_query($connect,$query);

while($ps = mysqli_fetch_assoc($result)) { 

?>
<form action="campainedit.php" method="post"  target="_blank" onsubmit="return confirm('Are you sure you want to Continue?')">
	
<tr>



<td width="80%">
<font face="Verdana" style="font-size: 8pt">
Campain ID: <?php echo $ps['id'];?>
<br><input type="text" name="name" size="30" value="<?php echo $ps['name'];?>"></font><br>
<textarea rows="15" name="material" cols="60"  style="font-size: 16pt"><?php echo $ps['material'];?></textarea>
<br>

</font></td>

<td width="20%">
<font face="Verdana" style="font-size: 8pt"><input type="submit" value="Submit"></font>
</td>

</tr>
	<input type="hidden" id="campainid" name="campainid" value="<?php echo $ps['id'];?>">
			
</form>
	  
<?php 
}

$ps = "Nothing  ";

?>
    </table>

  
    </td>
  </tr>
</table>

</body>

</html>