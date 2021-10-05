<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include('style.php');     ?>
    <title>access path</title>
    <?php echo "<link rel='icon' href='lg.png' type='image/icon type'>"; ?>
</head>
<body>
    <div class="login">
        <form action="index.php" method="post">
    <img src="lg.png" alt="logo" id="lg"><br>
     <label for="username">Username</label><br>
     <input type="text"name="username" placeholder="username"><br>
     <label for="password">Password</label> <br> 
     <input type="password"name="password" placeholder="password"><br><?php include('main.php');   ?> 
     <input type="submit"name="submit" id="btn" value="login"><br>
     <a href="forgot.php">forgot password</a><br>
     <a href="creat.php">Create new account</a>
</form>
     </div>
</body>
</html>