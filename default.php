<?php
session_start();
if(  isset($_SESSION['user']) )
{
    header('location:default2.php');
  die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

<br><br><br> <br><br><br>
    <form action="logincheck.php" method="POST">
        <div align="center">    
        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="50%" id="AutoNumber1">
      <tbody>
                    <tr>
                    <tr>
        <td width="26%"><font face="Verdana" size="2">Username :</font></td>
        <td width="74%"><font face="Verdana">
        <input type="password" name="user" size="20" style="font-family: Verdana; font-size: 10pt"></font></td>
      </tr>
      <tr>
        <td width="26%"><font face="Verdana" size="2">Password :</font></td>
        <td width="74%"><font face="Verdana">
        <input type="password" name="pass"  size="20" style="font-family: Verdana; font-size: 10pt"></font></td>
      </tr>

                    </tr>

 
                </tbody>
           </table>
        </div>
        <p align="center"><br>
        <font face="Verdana"><font size="2">
        <?php   
        if ( isset($_GET["message"]) )
         echo $_GET["message"] ;
         else 
           echo ""; ?><br>
        <br>
        <br>
        </font>
        <input type="submit" value="Submit" name="LOGIN" style="font-family: Verdana; font-size: 10pt"></font></p>
    </p>
    </form> 

</body>
</html>
