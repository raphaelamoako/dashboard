<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="main.css" >
</head>
<body>
    <div class="header">
        <h2>LOGIN</h2>
    </div>
    <form action="login.php" method="post">
        <div class="img">
            <img src="images/login.png" alt="login image" class="image">
        </div>
        <div class="input-group">
            <input type="text" name="username" placeholder="Username" required >

        </div>
         <div class="input-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>
         
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <?php include('errors.php');?>
        <p>
            Not yet a member? <a href="Register.php">sign up</a>
        </p>
    
</body>
</html>