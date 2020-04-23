 <?php
 include('common.php');
?>

<?php 


function generatePassword($passwordLength){
       $permitted_chars  = "cgkmpwrtEFHsVX123456789";
        $input_length = strlen($permitted_chars);
        $random_string = '';
        for($i = 0; $i < $passwordLength; $i++) {
            $random_character = $permitted_chars [mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
     
        return $random_string;
    
}
$code = generatePassword(4);


$number = $_POST["number"];
$name = $_POST["name"];
$konhaiadd = $_POST["konhaiadd"];

$query ="INSERT INTO contactlist (`number`,`konhai`,`code`,`name`) VALUES ('$number','$konhaiadd','$code','$name')";


// echo $query;
$insert_data = mysqli_query($connect,$query);  

if($insert_data)
header('location:contactlist.php');
else{
    echo mysqli_error($connect);
}

   
?>
<head>

<script language="javascript">
 
setTimeout("self.close();",500)
 
</script> 
</head>