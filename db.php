 <?php
if(isset($_POST['submit'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$gender  =  $_POST['gender'];
$dob  =  $_POST['dob'];
$password  =  $_POST['password'];
$conformpassword  =  $_POST['conformpassword'];
/*echo $firstname. "<br>";
echo $lastname. "<br>";
echo $email. "<br>";
echo $gender. "<br>";
echo $dob. "<br>";



echo "working";*/
if(isset($_POST['submit'])){


    if(!empty($_POST['gender'])) {

        $gender=$_POST['gender'];
    }
}

$connection = mysqli_connect('localhost','root','','loginpage');
if(!$connection){
    echo " not connected";
}
?>
<?php

if($password != $conformpassword){
    
   
   echo "<p id='wrn1'>miss matches</p>";
  
 }
 else{
    echo"<p id='wrn'>Details submitted successfully !</p>";
    $query = "INSERT INTO `athub` (`id`, `firstname`, `lastname`, `email`, `gender`, `dob`, `passcode`, `conformpassword`) VALUES (NULL, '$firstname', '$lastname', '$email', '$gender', '$dob', '$password', '$conformpassword')";
    $result = mysqli_query($connection,$query);
    if(!$result){
        echo "data not inserted";
       
  }
 }
}
?>
