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

      #table2 {
    margin-left: -25px;
    margin-top: -10px;
    /* padding: 5px; */
    }

      .container {
        margin: 0px auto;
        width: 520px;
        height: 400px;
        border-radius: 9px;
        background-color: #e6962d;
        opacity: 0.97;
        box-shadow: black 0px 22px 70px 4px;
      }
      .login {
        position: relative;
        margin: 0 auto;
        padding: 20px 20px 20px;
        width: 320px;
      }

      .box-req{
    box-shadow: 4px 4px rgb(234, 218, 218); 
    background-color: white; 
    padding: 20px 8px;
    border-radius: 10px 10px; 
    width : 10cm; 
    height : 15cm;
    vertical-align: top;
    font-size: 15px;
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
      .login input[type="text"],
      .login input[type="email"],
      .login input[type="tel"],
      .login input[type="password"]{
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
      a:link {text-decoration:none;}
        a:visited {text-decoration:none;}
        a:hover {text-decoration:none;}
        a:active {text-decoration:none;}

    </style>
  </head>

  <body style="background-image: url('../img/web-design.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
  <br>  
  <h1 style="text-align: center; margin-top: 35px; color: white">
      Edit Profile
    </h1>
    <div class="container">
      <div class="login">
        
        <form method="post" action="customermain.php">
          <p><input type="text" name="name" value="<?php echo $_SESSION['name']; ?>" placeholder="Name" required/></p>
          <p>
            <input
              type="tel"
              pattern="[0-9]{10}"
              title="Invalid input"
              name="phone"
              value="<?php echo $_SESSION['Phone_no']; ?>"
              />
          </p>
          <label for="city"></label>
          <select id="city" class="sel" placeholder="Which city are you looking?" name = "city" required>
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
              name="address"
              value="<?php echo $_SESSION["Address"];?>"
              pattern="[^'\x22]+" title="Invalid input"
              placeholder=" Address"
            />
          </p>
          <input type="submit" class="button" value="Submit">
        </form>
      </div>
    </div>
  </body>
</html>
