<?php
session_start();
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
      .sel {
          margin-left: -35px;
          margin-bottom: 5px;
          width: 384px;
          height: 50px;
          border: 0;
          border-radius: 8px;
          padding: 0 17px;
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
          <p><input type="text" name="name" value="<?php echo $_SESSION['name']; ?>"  /></p>
          <p>
            <input
            type="tel"
              pattern="[0-9]{10}"
              oninvalid="setCustomValidity('Enter valid 10-digit phone number.')"
              oninput="setCustomValidity('')"
              name="phone"
              value="<?php echo $_SESSION['phone_no']; ?>"
            
            />
          </p>
          <!-- <label for="city" style ="text-align: center; margin-top: 35px; color: white">Choose a City :</label> -->
          <select id="select-state" class="sel" placeholder="Which city are you looking?" name="city">
          <option value="">Select a city...</option>
                <option value="Agra">Agra</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chennai">Chennai</option>
                <option value="Delhi">Delhi</option>
                <option value="Dharwad">Dharwad</option>
                <option value="Gurgaon">Gurgaon</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Hubbali">Hubbali</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Jammu">Jammu</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Kota">Kota</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Noida">Noida</option>
                <option value="Patna">Patna</option>
                <option value="Pune">Pune</option>
                <option value="Srinagar">Srinagar</option>
                <option value="Vaishali">Vaishali</option>
          </select>
          
          <p>
            <input
            type="text"
              pattern="[^'\x22]+"
              oninvalid="setCustomValidity('Exclude inverted commas')"
              oninput="setCustomValidity('')"
              name="address"
              value='<?php echo $_SESSION["address"] ?>'
            />
          </p>
          <p>Profession:</p>
          <table id = "table2" style="width: 400px;">
                <tr>
                    <td>
                    <input type="checkbox" name = "Electrician"> Electrician 
                    </td>
                    <td>
                    <input type="checkbox" name = "Plumber"> Plumber
                    </td>
                    <td>
                    <input type="checkbox"name = "Driver"> Driver
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="checkbox"name = "Carpenter"> Carpenter
                    </td>
                    <td>
                    <input type="checkbox"name = "Cleaning"> Cleaning
                    </td>
                    <td>
                    <input type="checkbox"name = "Maid"> Maid
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="checkbox"name = "Babysitter"> Baby Sitter
                    </td>
                    <td>
                    <input type="checkbox"name = "Painter"> Painter
                    </td>
                    <td>
                    <input type="checkbox"name = "Unskilled"> Un-skilled
                    </td>
                </tr>
                </table>
                <br><br>
                  <input type="submit" class="button" value="Edit">

          
          
        </form>
      </div>
    </div>
  </body>
</html>
