<?php
  
   include('Session1.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <?php  include('design.php'); ?>
   <title>HOME</title>
   <?php echo "<link rel='icon' href='lg.png' type='image/icon type'>"; ?>
</head>
<body>
   <div class="navbar">
   <h1 id='title'>athub.com</h1>


   </div>
  <ul><li>
         <div class="left_sidebar">

<p>left</p>




            </div>
</li>
            <li>
    <div class="content">
         
   <h1><?php echo $login1; ?></h1>
   <h3>your birth day is at <?php echo "$dob";  ?></h3>
      </div>
       </li>
      <li>
         <div class="right_sidebar">

         <p>my user account  <?php echo $login_session; ?> </p>
          <p><a href = "Logout.php">log Out</a></p>
            </div>
</li>
</ul>



</body>
</html>