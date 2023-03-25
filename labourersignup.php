<?php
session_start();
$_SESSION["v"]=0;

?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up</title>
    <style>
        .button {
            background-color: #3a3a3a; 
            border: none;
            color: white;
            padding: 17px 0px;
            width: 10.2cm;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 0px -40px;
            cursor: pointer;
            border-radius: 9px;
            float: center;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        }
        .button:hover{
            background-color: black;
      } 

      .container {
        margin: 0px auto;
        width: 520px;
        height: 570px;
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

      .login input[type="text"],
      .login input[type="email"],
      .login input[type="tel"],
      .login input[type="password"] {
        margin-left: -35px;
        margin-bottom: 5px;
        width: 350px;
        height: 50px;
        border: 0;
        border-radius: 8px;
        padding: 0 17px;
      }
      /* {
            width: 280px;
            height: 50px;
            padding: 0px 17px;
            border-radius: 8px;
            border: 0px;
        } */

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

      .form-control {
        margin-right: 30px;
        font-family: system-ui, sans-serif;
        font-size: 19px;
        font-weight: bold;
      }
      .login input[type="radio"]:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: white;
        content: "";
        display: inline-block;
        visibility: visible;
        border: 1.5px solid black;
      }

      .login input[type="radio"]:checked:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #3a3a3a;
        content: "";
        display: inline-block;
        visibility: visible;
        border: 1.5px solid white;
      }
      .errormessage{
            position: relative;
            margin-left: -35px;
            margin-bottom: 5px;
            width: 350px;
            height: 30px;
            padding: 0px 17px;
            border: 2px solid black;
            border-radius: 8px;
            text-align:center;
            background-color: #ffafaf;
        }
    </style>
  </head>

  <body style="background-image: url('web-design.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <h1 style="text-align: center; margin-top: 35px; color: white">
      For Labourers/Contractors
    </h1>
    <div class="container">
      <div class="login">
        <h1>Sign up to KaryM</h1>
        <?php
            if (isset($_SESSION['message'])){
                echo '<div class="errormessage">Couldn\'t Signup. Please try again.</div>';
                session_destroy();
            }
            ?>
        <form method="post" action="labourermain.php">
          <p><input type="text" name="name" value="" placeholder="Name" /></p>
          <p>
            <input
              type="tel"
              name="phone_no"
              pattern="[0-9]{10}"
              title="Invalid input"
              value=""
              placeholder="Phone Number"
              required
            />
          </p>
          <p>
            <input
              type="email"
              name="email"
              value=""
              pattern="[^'\x22]+" title="Invalid input"
              placeholder="Email address"
              required
            />
          </p>
          <p>
            <input
              type="password"
              name="password"
              value=""
              pattern="[^'\x22]+" title="Invalid input"
              placeholder="Password"
              required
            />
          </p>
          <p>
            <input type="radio" id="lab" name="select" value="labourer" required/>
            <label class="form-control" for="lab">Labourer</label>
            <input type="radio" id="cont" name="select" value="contractor" />
            <label class="form-control" for="cont">Contractor</label>
          </p>
          <input type="submit" class="button" value="Sign up">
        </form>
      </div>
    </div>
  </body>
</html>
