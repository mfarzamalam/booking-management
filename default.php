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
           <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                <tbody>
                    <tr>
                        <td width="30%">
                             <font size="3"> Username : </font>   
                        </td>
                        <td width="70%">
                            <input size="20" type="text" name="username" value="">
                        </td>
                    </tr>

                    <tr>
                        <td width="30%">
                            <font size="3"> Password :</font>
                        </td>
                        <td width="70%">
                            <input type="password" name="yourpass" value="">
                        </td>
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
            <input type="submit" name="LOGIN" value="Login" style="font-size:20px; padding:1px 6px;"> 
        </p>
    </form> 

</body>
</html>
