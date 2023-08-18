<?php
if (session_status() == PHP_SESSION_ACTIVE){
    session_destroy();
  }
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .button {
            background-color: #3a3a3a; 
            color: white; 
            border: none;
            padding: 18px 141px; 
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 12x 12px;
            cursor: pointer;
            border-radius: 5px;
            float: center;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        }
        .button:hover{
            background-color: black;
        }

        .container {
            margin: 0px auto;
            width: 430px;
            height: 380px;
            border-radius: 9px;
            background-color: #e69c2d;
            opacity: 0.97;
            box-shadow: black 0px 22px 70px 4px;
        }

        .login {
            position: relative;
            margin: 0 auto;
            padding: 20px 20px 20px;
            width: 310px;
        }
        .login input[type=email],
        .login input[type=password] {
            width: 280px;
            height: 50px;
            padding: 0px 17px;
            border-radius: 8px;
            border: 0px;
        }
        .login :focus {
            border-color: #3c4fe0;
            box-shadow: 0 1px 0 0 rgb(35 38 59 / 5%);
        }
        .login h1 {
            line-height: 40px;
            font-size: 30px;
            color: white;
            text-align: center;
        }

        .login-help {
            margin: 20px 0;
            font-size: 15px;
            text-align: center;
        }

        .login-help a {
            color: #3a3a3a;
            text-decoration: none;
        }

        .login-help a:hover {
            color: black;
            text-decoration: underline;
        }
        .errormessage{
            position: relative;
            margin: 0 auto;
            width: 280px;
            height: 40px;
            padding: 0px 17px;
            border: 2px solid black;
            border-radius: 9px;
            text-align:center;
            background-color: #ffafaf;
        }
    </style>
</head>

<body style="background-image: url('../img/web-design.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
        
    <h1 style="text-align: center; margin-top: 120px; color: white;">For Labourers/Contractors</h1>
    <div class="container">
        <div class="login">
            <h1>Sign in to KaryM</h1>
            <?php
                if (isset($_SESSION['message'])){
                    echo '<div class="errormessage">Invalid login credentials. Please Login again.</div>';
                    session_destroy();
                }
                ?>
            <form method="post" action="labourermain.php">
                <p><input type="email" name="email" value="" pattern="[^'\x22]+" title="Invalid input" placeholder="Email" required></p>
                <p><input type="password" name="password" value="" pattern="[^'\x22]+" title="Invalid input" placeholder="Password" required></p>
                <input type="submit" name="submit" value="Log in" class="button">
            </form>
        </div>
        <div class="login-help">
            <p style="color: white;">Don't have an account? <a href="labourersignup.php">Sign up</a></p>
        </div>
    </div>
</body>

</html>



