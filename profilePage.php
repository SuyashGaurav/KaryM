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
        background-color: rgb(24, 143, 129);
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
    </style>
  </head>

  <body style="background-image: url('web-design.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <h1 style="text-align: center; margin-top: 35px; color: white">
      Edit Profile
    </h1>
    <div class="container">
      <div class="login">
        
        <form method="post" action="labourermain.php">
          <p><input type="text" name="name" value="" placeholder="Name" /></p>
          <p>
            <input
              type="tel"
              name="phone"
              value=""
              placeholder="Phone Number"
            />
          </p>
          <label for="city" style ="text-align: center; margin-top: 35px; color: white">Choose a City :</label>
          <select id="city" name="city">
  			<option value="hubli">Hubli</option>
  			<option value="dharwad">Dharwad</option>
  			<option value="gandhinagar">Gandhinagar</option>
  			<option value="bangalore">Bangalore</option>
  			<option value="hyderabad">Hyderabad</option>
  			<option value="ahmedabad">Ahmedabad</option>
  			<option value="surat">Surat</option>
  			<option value="manglore">Manglore</option>
			</select>
          
          <p>
            <input
              type="text"
              name="address"
              value=""
              placeholder=" Address"
            />
          </p>
          <p  style ="text-align: center; margin-top: 35px; color: white">Profession :
              <br> <input type="checkbox" name="profession" value="Electrician"> Electrician
              <input type="checkbox" name="profession" value="Plumber"> Plumber
              <input type="checkbox" name="profession" value="Driver"> Driver<br>
              <input type="checkbox" name="profession" value="Carpenter"> Carpenter
              <input type="checkbox" name="profession" value="Cleaning"> Cleaning and Pest Control
              <input type="checkbox" name="profession" value="Maid"> Maid<br>
              <input type="checkbox" name="profession" value="Painter"> painter<br>
              <input type="checkbox" name="profession" value="Babysitter"> Baby Sitter
              <input type="checkbox" name="profession" value="Unskilled"> Un-skilled
                  </p>
                  <input type="submit" class="button" value="Edit">
          
          
        </form>
      </div>
    </div>
  </body>
</html>
