<?php include('server.php')

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Registeration</title>
        <link rel="stylesheet" href="main.css" />
    </head>

    <body>
        <div class="header">
            <h2>Register</h2>
        </div>
        <form action="Register.php"  method="POST" netlify>
        <!--Displaying the errors when the user insert values-->
        <?php include('errors.php')
        ?>
         
            <div class="input-group">
                <input
                    type="text"
                    name="username"
                    placeholder="Username"
                    required 
                />
            </div>
            <div class="input-group">
                <input type="text" name="email" placeholder="Email" required/>
            </div>
            <div class="input-group">
                <input
                    type="password"
                    name="password1"
                    placeholder="Password"
                    required 
                />
            </div>
            <div class="input-group">
                <input
                    type="password"
                    name="password2"
                    placeholder="Comfirm password"
                    required 
                />
            </div>
            
            <div class="input-group">
                <button type="submit" name="Register" class="btn">
                    Register
                </button>
            </div>
            <p>Already a member? <a href="login.php">sign in</a></p>
        </form>

         
    </body>
</html>

