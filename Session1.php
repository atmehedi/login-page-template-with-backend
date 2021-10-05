<?php
   include('Config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"SELECT * FROM athub where email = '$user_check'; ");
   
   $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

   $login_session = $row['email'];
   $login1 = $row['firstname']." ".$row['lastname'];
   $dob = $row['dob'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:final.php");
      die();
   }
?>