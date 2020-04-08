<?php

    include('common.php');    
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
                        <td width="50%">
                             <font size="2"> Username : </font>   
                        </td>
                        <td width="50%">
                            <input size="20" type="text" name="username" value="">
                        </td>
                    </tr>

                    <tr>
                        <td width="50%">
                            <font size="2"> Password :</font>
                        </td>
                        <td width="50%">
                            <input type="password" name="yourpass" value="">
                        </td>
                    </tr>

                    <tr>
                        <td width="50%"></td>
                        <td width="50%">
                             <?php

                              if(isset($_POST['LOGIN']))
                                {   
                                    $name = $_POST['username'];
                                    $pass = $_POST['yourpass'];

                                    if($name == "" && $pass == ""){
                                        echo "Please enter name and password";
                                    }else{
                                        $query = "SELECT * FROM `info` where user='$name' && pass='$pass' ";
            
                                        $result = mysqli_query($connect,$query);

                                        $total = mysqli_num_rows($result); 
            
                                        if($total == 1){
                                             header('location:default2.php');
                                        }else {
                                            echo "login failed";
                                        }
        
                                    }
                                }
    
                            ?>
                        </td>
                    </tr>
                </tbody>
           </table>
        </div>
        <p align="center"><br>
           <font size="2"> <br></font>
           <input type="submit" name="LOGIN" value="Login" style="font-size:20px; padding:1px 6px;"> 
        </p>
    </form> 

</body>
</html>
