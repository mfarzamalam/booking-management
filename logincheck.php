<?php

    include('common.php');    

 if(isset($_POST['LOGIN'])){   
     $name = $_POST['user'];
     $pass = $_POST['pass'];

     if($name == "" && $pass == ""){
         echo "Please enter name and pass";
     }else{
         $query = "SELECT * FROM `info` where user='$name' && pass='$pass' ";
     $result = mysqli_query($connect,$query);
         $total = mysqli_num_rows($result); 
         
      if($total >= 1){
        $row = $result->fetch_assoc();
               
              $_SESSION['user']=$row["user"];
              $_SESSION['project']=$row["project"];
              $_SESSION['logo']=$row["logo"];
              $_SESSION['completiondate']=$row["completiondate"];
              header('location:default2.php');
              
         }else {
            header('location:default.php?message=Login Failed');
         }
         
     }
}
?>