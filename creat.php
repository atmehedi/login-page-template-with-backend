
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo "<link rel='icon' href='lg.png' type='image/icon type'>"; ?>
  <?php include('style1.php');  ?>
    
    <title>new page</title>
</head>
<body>
<h1>athub.com</h1>

   <div class="signup">
   <?php include('db.php'); ?>
       <form action="creat.php" method="post">
           <label for="First Name">First Name</label><br>
           <input type="text" placeholder="First Name" name="firstname" id="input1"><br>
           <label for="Last Name">Last Name</label><br>
           <input type="text" placeholder="First Name"  name="lastname" id="input2" required><br>
           <label for="email">Email Id</label><br>
           <input type="email" name="email" id="input3" placeholder="example@gmal.com" required><br>
           <label for="Gender" id ="bd">Gende</label><br>
           <ul>
               <li>  <input type="radio" name="gender" value="male"checked="checked"/> Male<br></li>
               <li> <input type="radio" name="gender" value="female"/> Female<br></li>
               <li>  <input type="radio" name="gender" value="other"/> Other<br> </li>
           </ul><br>
           <label for="date of birth">Date of birth</label><br>
           <input type="date" name="dob"  id="dob" placeholder="07/02/1996" required><br>
           <label for="password">password</label><br>
           <input type="password" placeholder="password" name="password" id="p1" required><br>
           <label for="conform password">conform password</label><br>
           <input type="password" placeholder="conform password" name="conformpassword" id="p2" required>
          
      
<br>
           <p>by clinking on the signup buttton you have aggreing terms and conditions.</p>
           <input type="submit" value="SignUp" name="submit" id="btn">
           <a href="index.php">Goto login page</a>
       </form>
   </div> 
   
  
</body>
</html>
