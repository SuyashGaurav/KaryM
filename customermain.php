<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<style>
    .HeaderDesktop {
    color: #e6962d;
    height: 38px;
    width: 100%;
    margin: -8px ;
    padding: 10px;
    top: 0;
    left: 0;
    position: relative;
    font-family: 'Courier New', Courier, monospace;
    opacity: 0.8;
}

    .box-cust-req{
        background-color: #e6962d;
        padding: 20px 8px;
        border-radius: 10px 10px; 
        width : 80%; 
        height : 17.5cm;
        vertical-align: top;
        font-size: 25px;
        opacity: 0.97;
        box-shadow: black 0px 22px 70px 4px;
        margin-top: 5%;
        margin-right: 10%;
        margin-left: 10%;
    }

    .push-req{
        background-color: #e69c2d;
        padding: 20px 0px;
        border-radius: 10px 10px; 
        width : 40%; 
        height : 19cm;
        vertical-align: top;
        font-size: 25px;
        opacity: 0.97;
        box-shadow: black 0px 22px 70px 4px;
        margin: auto;
        padding-left: 30px;
        padding-right: 30px;
    }
    .req-box{
        background-color: white;
        padding: 8px 8px;/
        border-radius: 10px 10px; 
        width : 90%; 
        height : 7cm;
        vertical-align: top;
        font-size: 25px;
    }

    #table2 {
        margin-left: 20px;
        margin-top: -5%;
        font-size: 20px;
        width: 100%;
    }
    #table3 {
        margin-top : -5%; 
        font-size: 20px;
        border-spacing: 100px 0px;
    }

    .form-control {
        margin-right: 30px;
        font-family: system-ui, sans-serif;
        font-size: 19px;
        font-weight: light;
      }
    .login input[type="radio"]:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -2px;
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
        left: -2px;
        position: relative;
        background-color: #3a3a3a;
        content: "";
        display: inline-block;
        visibility: visible;
        border: 1.5px solid white;
      }
      .container {
        position: relative;
        font-family: system-ui, sans-serif;
    }
      .container input[type = "radio"]{
        display: none;
    }
      .container .image:hover {
         opacity: 0.7;
    }
        .image {
        opacity: 1;
        transition: .5s ease;
        backface-visibility: hidden;
        border-radius: 15px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    .container:hover .middle {
    opacity: 1;
}
      .button {
            background-color: #3a3a3a; 
            border: none;
            color: white;
            padding: 17px 0px;
            width: 5cm;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 0px -120px;
            cursor: pointer;
            border-radius: 9px;
            float: center;
            margin-top: 9%;
            margin-left: 80%;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        }

        .button1 {
            width: 80px; 
            float:right; 
            background-color: #3a3a3a; 
            padding: 9px 22px;
            text-align: center; 
            border-radius: 5px; 
            margin-top: 0.3%; 
            margin-right: 1.32%; 
            text-align: center; 
            cursor: pointer;
            font-size: 15px; color: white; border: none; text-decoration: none; display: inline-block;
    }
    
        .button:hover{
            background-color: black;
      }
      .button1:hover{
            background-color: black;
      } 
      .profilecontainer{
            display: none;
            position: absolute;
            z-index: 9;
            top: 48px;
            right: 32px;
            width: 5.4cm;
            height: 5cm;
            background-color: #e69c2d;
            border-radius: 5px;
            padding-top: 30px;
            padding-left: 30px;
            opacity: 0.97;
            box-shadow: black 0px 22px 70px 4px;
        }
        .buttoninprofile {
            background-color: #3a3a3a; 
            border: none;
            color: white;
            padding: 12px 0px;
            width: 4.5cm;
            display: inline-block;
            cursor: pointer;
            border-radius: 9px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        }
        .buttoninprofile:hover{
            background-color: black;
        }
        a:link {text-decoration:none;}
        a:visited {text-decoration:none;}
        a:hover {text-decoration:none;}
        a:active {text-decoration:none;}

      
</style>
</head>
<body style="background-image: url('web-design.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
<script>
    if(window.history.replaceState) {
        window.history.replaceState( null, null, window.location.href );
    }
    function login(){
        window.location.href= "customerlogin.php";
    }
    let i = 0;
        function openF(){
            if(i % 2 == 0) openForm();
            else closeForm();
            i = i+1;
        }
        function openForm() {
          document.getElementById("profilebox").style.display = "block";
        }
        function closeForm() {
          document.getElementById("profilebox").style.display = "none";
        }
        function profile(){
            window.location.href = "customerprofile.php";
        }
        function notification(){
            window.location.href = "customernotification.php";
        }
</script>
    
    <?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "karym";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //login redirect + welcome message
    if (isset($_SERVER["HTTP_REFERER"]) and strpos($_SERVER["HTTP_REFERER"], "customerlogin.php") && (isset($_POST["email"]) || isset($_SESSION["email"]))){
        echo '<h1 class="HeaderDesktop"><img width = "6%" style = "float:left; margin-left: -25px; margin-top: -11px; margin-right: -15px;" src = "logo-removebg-preview.png"> 

        <a onclick = "openF()"> <img style="cursor: pointer; width: 40px; padding-right: 25px; float:right;" src="usericon.png" id="btn"></a>

        <a href="homepage.php" style="color:#e6962d;">KaryM</a>
        <a href = "aboutus.html"><p style="float:right; margin-right: 1.4%; margin-top: 1%; font-size:49%; color: #e6962d;">About Us</p></a>
        </h1>
        <div class="profilecontainer" id="profilebox"> 
        <button value="Submit" class="buttoninprofile" style="font-size:14px" onclick = "profile()">Edit Profile</button><br><br>
        <button value="Submit" class="buttoninprofile" style="font-size:14px" onclick = "notification()">Notification</button><br><br>
        <form method = "post" action= "customermain.php" >
        <input type = "hidden" name = "signout" value = "signout">
        <input type = "submit" value = "Sign out" class = "buttoninprofile" style = "font-size: 14px;">
        </form>
    </div>';
        if(isset($_POST["signout"])){
            session_destroy();
            echo '<script>window.location.replace("customerlogin.php");</script>';
        }
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $_SESSION["email"] =test_input($_SERVER["REQUEST_METHOD"] == "POST" ? $_POST["email"] : $_GET["email"]);
            $_SESSION["password"] = test_input($_SERVER["REQUEST_METHOD"] == "POST" ? $_POST["password"] : $_GET["password"]);
          }

        //verification for login
        $sql2= "SELECT * FROM customers";
        $result2=$conn->query($sql2);
        $_SESSION["name"]="";
        if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
                //search in customer table
                if ($row["Email"]==$_SESSION["email"]){
                    $loginpw=$row["Password"];
                    $_SESSION["name"]=$row["CustomerName"];
                    $_SESSION["Id"]=$row["Customer_Id"];
                    $_SESSION["Phone_no"]=$row["Phone_no"];
                    $_SESSION["Address"]=$row["Address"];
                }
            }
        }
        if ($_SESSION["name"]==""){
            $_SESSION['message']="invalid";
            echo $_SESSION["email"];
            echo "<script>window.location.href='customerlogin.php';</script>";
            exit;
        }
        else{
            if ($_SESSION["password"]==$loginpw){
                echo '<p style="font-size:45px; margin-top: 80px; margin-left: 140px; color:white; background-color: #e69c2d; border-radius: 15px; height: 1.5cm; width: 15cm; padding-left:10px; padding-top: 5px; box-shadow: black 0px 22px 70px 4px; font-family: Garamond, serif; padding-bottom: -10px;">Welcome ' . $_SESSION["name"].'</p>';
            }
            else{
                $_SESSION['message']="invalid";
                echo "<script>window.location.href='customerlogin.php';</script>";
                exit;
            }
        }
    }

    //for signup
    else if (isset($_SERVER["HTTP_REFERER"]) and strpos($_SERVER["HTTP_REFERER"], "customersignup.php") && (isset($_POST["login"]) || isset($_SESSION["login"]))){
        echo '<h1 class="HeaderDesktop"><img width = "6%" style = "float:left; margin-left: -25px; margin-top: -11px; margin-right: -15px;" src = "logo-removebg-preview.png"> 

        <a onclick = "openF()"> <img style="cursor: pointer; width: 40px; padding-right: 25px; float:right;" src="usericon.png" id="btn"></a>

        <a href="homepage.php" style="color:#e6962d;">KaryM</a>
        <a href = "aboutus.html"><p style="float:right; margin-right: 1.4%; margin-top: 1%; font-size:49%; color: #e6962d;">About Us</p></a>
        </h1>
        <div class="profilecontainer" id="profilebox"> 
        <button value="Submit" class="buttoninprofile" style="font-size:14px" onclick = "profile()">Edit Profile</button><br><br>
        <button value="Submit" class="buttoninprofile" style="font-size:14px" onclick = "notification()">Notification</button><br><br>
        <form method = "post" action= "customermain.php" >
        <input type = "hidden" name = "signout" value = "signout">
        <input type="submit" value = "Sign out" class = "buttoninprofile" style = "font-size: 14px;">
        </form>
    </div>';
    if(isset($_POST["signout"])){
        session_destroy();
        echo '<script>window.location.replace("customerlogin.php");</script>';
    }
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["Phone_no"] =  $_POST["phone"];
        $_SESSION["login"] = $_POST["login"];         //email
        $_SESSION["password"] = $_POST["password"];
    }
        // if($_SESSION["name"]== "" || $_SESSION["phone"]=="" || $_SESSION["login"]=="" || $_SESSION["password"] == ""){
        //     $_SESSION['message']="invalid";
        //     echo "<script>window.location.href='customersignup.php';</script>";
        //     exit;
        // }

        $flag = 0;
        $sql2= "SELECT * FROM customers";
        $result2=$conn->query($sql2);
        if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
                //search in customer table
                if ($row["Email"]==$_SESSION["login"]){
                    $flag = 1;
                }
            }
        }
        if($flag == 1 && isset($_SESSION["v"])){
            $_SESSION['message']="invalid";
            echo "<script>window.location.href='customersignup.php';</script>";  
        }

        
        else if($flag != 1) {
           
        $name = $_SESSION["name"];
        $phone = $_SESSION["Phone_no"];
        $login = $_SESSION["login"];
        $password = $_SESSION["password"];

        $sql="SELECT MAX(Customer_Id) from customers";
        $result=$conn->query($sql);
        $row= $result->fetch_assoc();
        $_SESSION["Id"] = $Id=$row["MAX(Customer_Id)"]+1;
        $sql1 = "INSERT INTO customers (Customer_Id, CustomerName, Phone_no, Email, Password) VALUES (".$Id.",'".$name."',".$phone.",'".$login."', '".$password."')";
        // echo $sql1;
        $result1 = mysqli_query($conn, $sql1);
        if ($result1){
            echo '<script> alert("Successfully Signed Up!")</script>';
        }else{
            die("Connection failed: " . $conn->connect_error);
        }
    }
    unset($_SESSION["v"]);
        //insert new data
        echo '<p style="font-size:45px; margin-left: 70px; margin-top: 80px; margin-left: 140px; color:white; background-color: #e69c2d; border-radius: 15px; height: 1.8cm; width: 15cm; padding-left: 20px; padding-top: 10px; box-shadow: black 0px 22px 70px 4px;">Welcome ' . $_SESSION["name"].'</p>';
}

else if(isset($_SERVER["HTTP_REFERER"]) and strpos($_SERVER["HTTP_REFERER"], "customerprofile.php") and isset($_POST['name'])&& (isset($_POST["email"]) || isset($_SESSION["email"]))){
    echo '<h1 class="HeaderDesktop"><img width = "6%" style = "float:left; margin-left: -25px; margin-top: -11px; margin-right: -15px;" src = "logo-removebg-preview.png"> 

        <a onclick = "openF()"> <img style="cursor: pointer; width: 40px; padding-right: 25px; float:right;" src="usericon.png" id="btn"></a>

        <a href="homepage.php" style="color:#e6962d;">KaryM</a>
        <a href = "aboutus.html"><p style="float:right; margin-right: 1.4%; margin-top: 1%; font-size:49%; color: #e6962d;">About Us</p></a>
        </h1>
        <div class="profilecontainer" id="profilebox"> 
        <button value="Submit" class="buttoninprofile" style="font-size:14px" onclick = "profile()">Edit Profile</button><br><br>
        <button value="Submit" class="buttoninprofile" style="font-size:14px" onclick = "notification()">Notification</button><br><br>
        <form method = "post" action= "customermain.php" >
        <input type = "hidden" name = "signout" value = "signout">
        <input type="submit" value = "Sign out" class = "buttoninprofile" style = "font-size: 14px;">
        </form>
    </div>';
    if(isset($_POST["signout"])){
        session_destroy();
        echo '<script>window.location.replace("customerlogin.php");</script>';
    }
    $custname=$_POST['name'];
    $custphone=$_POST['phone'];
    $_SESSION["city"]=$custcity=$_POST['city'];
    $custaddress=$_POST['address'];

        $updsql="UPDATE customers SET Address='".$custaddress."',Phone_no=".$custphone.",CustomerName='".$custname."', City='".$custcity."' where Customer_Id=".$_SESSION['Id'];  
        // echo '<br>'.$updsql;  
    if ($conn->query($updsql)){
        echo '<script>alert("Successfully updated your profile");</script>';
    }
}


else if (isset($_SERVER["HTTP_REFERER"]) and strpos($_SERVER["HTTP_REFERER"], "customermain.php") and $_SERVER["REQUEST_METHOD"]=="POST" && (isset($_POST["email"]) || isset($_SESSION["email"]))){
    echo '<h1 class="HeaderDesktop"><img width = "6%" style = "float:left; margin-left: -25px; margin-top: -11px; margin-right: -15px;" src = "logo-removebg-preview.png"> 

        <a onclick = "openF()"> <img style="cursor: pointer; width: 40px; padding-right: 25px; float:right;" src="usericon.png" id="btn"></a>

        <a href="homepage.php" style="color:#e6962d;">KaryM</a>
        <a href = "aboutus.html"><p style="float:right; margin-right: 1.4%; margin-top: 1%; font-size:49%; color: #e6962d;">About Us</p></a>
        </h1>
        <div class="profilecontainer" id="profilebox"> 
        <button value="Submit" class="buttoninprofile" style="font-size:14px" onclick = "profile()">Edit Profile</button><br><br>
        <button value="Submit" class="buttoninprofile" style="font-size:14px" onclick = "notification()">Notification</button><br><br>
        <form method = "post" action= "customermain.php" >
        <input type = "hidden" name = "signout" value = "signout">
        <input type="submit" value = "Sign out" class = "buttoninprofile" style = "font-size: 14px;">
        </form>
    </div>';
    if(isset($_POST["signout"])){
        session_destroy();
        echo '<script>window.location.replace("customerlogin.php");</script>';
    }
        $reqcom="select max(Request_no) from workrequests";
        $rtab=$conn->query($reqcom);
        $rearr=$rtab->fetch_assoc();
        $reqnum=$rearr['max(Request_no)']+1;
        $whatwrk=$_POST['workSearch'];
        $wrkreq=$_POST['workrequest'];
        $mainformsql="INSERT INTO workrequests(Customer_Id,Work_request,".$whatwrk.",Request_no)  VALUES(".$_SESSION['Id'].",'".$wrkreq."',1,".$reqnum.") ";
    
        if($conn->query($mainformsql)){
           echo' <script>
            alert("Your WORK-REQUEST has been submitted!");
            </script>';
        }

}
else{
    echo '<h1 class="HeaderDesktop"><img width = "6%" style = "float:left; margin-left: -25px; margin-top: -11px; margin-right: -15px;" src = "logo-removebg-preview.png">
    <button onclick= "login()" class = "button1">Login</button>
    <a href="homepage.php" style="color:#e6962d;">KaryM</a>
        <a href = "aboutus.html"><p style="float:right; margin-right: 1.8%; margin-top: 1.45%; font-size:49%; #e6962d;">About Us</p></a>
        </h1>';
}
echo 
'<div class = "box-cust-req" style = "margin-left: 10%; margin-right: 10%; margin-top: 5%">
<p style = "margin-left: 37%; margin-top: 0.5%; font-size: 24px; color: white;">Home Services, on Demand</p>

<form action = "customernext.php" method = "post" id = "myform">
<table id = "table3" class="container">
    <tr>
      <td>
            <input type="radio" name="role" id="Electrician1" value="Electrician1" onclick="submitt()">
            <label for="Electrician1"><img  class = "image" style = "width: 5.5cm; height: 3cm; margin-top: 30%;" src = "electrician.png"></label>
            <div style = "color: white; margin-left: 1.5cm"> Electrician</div>
    </td>
    <td>
            <input type="radio" name="role" id="Plumber1" value="Plumber1" onclick="submitt()">
            <label for="Plumber1"><img  class = "image" style = "width: 5.5cm; height:3cm; margin-top: 30%;" src = "plumber.jpg"></label>
            <div style = "color: white; margin-left: 1.5cm"> Plumber</div>
    </td>
    <td>
            <input type="radio" name="role" id="Carpenter1" value="Carpenter1" onclick="submitt()">
            <label for="Carpenter1"><img  class = "image" style = "width: 5.5cm; height:3cm; margin-top: 30%;" src = "carpenter.jpg"></label>
            <div style = "color: white; margin-left: 1.5cm"> Carpenter</div>
    </td>
    </tr>
    <tr>
      <td>
            <input type="radio" name="role" id="Driver1" value="Driver1" onclick="submitt()">
            <label for="Driver1"><img  class = "image" style = "width: 5.5cm; height:3cm; margin-top: 30%;" src = "driver.jpg"></label>
            <div style = "color: white; margin-left: 1.5cm"> Driver</div>
    </td>
    <td>
            <input type="radio" name="role" id="Painter1" value="Painter1" onclick="submitt()">
            <label for="Painter1"><img  class = "image" style = "width: 5.5cm; height: 3cm; margin-top: 30%;" src = "painter.jpg"></label>
            <div style = "color: white; margin-left: 1.5cm"> Painter</div>
    </td>
    <td>
            <input type="radio" name="role" id="Babysitter1" value="Babysitter1" onclick="submitt()">
            <label for="Babysitter1"><img  class = "image" style = "width: 5.5cm; height: 3cm; margin-top: 30%;" src = "babysitter.jpg"></label>
            <div style = "color: white; margin-left: 1.5cm"> Babysitter</div>
    </td>
    </tr>
    <tr>
      <td>
            <input type="radio" name="role" id="Maid1" value="Maid1" onclick="submitt()">
            <label for="Maid1"><img  class = "image" style = "width: 5.5cm; height:3cm; margin-top: 30%;" src = "maid.jpg"></label>
            <div style = "color: white; margin-left: 1.5cm"> Maid</div>
    </td>
    <td>
            <input type="radio" name="role" id="Unskilled1" value="Labourer1" onclick="submitt()">
            <label for="Unskilled1"><img  class = "image" style = "width: 5.5cm; height: 3cm; margin-top: 30%;" src = "unskilled.jpg"></label>
            <div style = "color: white; margin-left: 1.5cm"> Un-Skilled</div>
    </td>
    <td>
            <input type="radio" name="role" id="CleaningAndPestcontrol1" value="Pestcontroller1" onclick="submitt()">
            <label for="CleaningAndPestcontrol1"><img  class = "image" style = "width: 5.5cm; height: 3cm; margin-top: 30%;" src = "pestcontrol.jpg"></label>
            <div style = "color: white; margin-left: 1.5cm"> Pest Control</div>
    </td>
    </tr>
</table>
</form>
</div>



<script>
function submitt(){
    document.getElementById("myform").submit();
}
</script>';

echo
'<div class = "push-req" style = "margin-top: 7%;" align="center">
<p style = "margin-left: 7%; margin-top: 4s%; font-size: 24px; color: white;">Tell me your work</p>
<p style = "margin-top: -0.6%; margin-left: 7%; color: white; font-size: 20px; font-weight: bold;">Category :</p>
<br><br>

<table id = "table2" class="login">
<form method="post" action="customermain.php">
        <tr style = "color: white;">
            <td>
            <input type="radio" name="workSearch" id="Electrician" value="Electrician">
            <label for="Electrician" class="form-control">Electrician</label> 
            </td>
            <td>
            <input type="radio" name="workSearch" id="Plumber" value="Plumber">
            <label for="Plumber" class="form-control">Plumber</label>
            </td>
            <td>
            <input type="radio" name="workSearch" id="Babysitter" value="Babysitter">
            <label for="Babysitter" class="form-control">Babysitter</label>
            </td>
        </tr>  
        <tr style = "color: white;">
            <td>
            <input type="radio" name="workSearch" id="Carpenter" value="Carpenter">
            <label for="Carpenter" class="form-control">Carpenter</label>
            </td>
            <td>
            <input type="radio" name="workSearch" id="Driver" value="Driver">
            <label for="Driver" class="form-control">Driver</label>
            </td>
            <td>
            <input type="radio" name="workSearch" id="CleaningAndPestcontrol" value="CleaningAndPestcontrol">
            <label for="CleaningAndPestcontrol" class="form-control">Cleaning</label>
            </td>
        </tr>
        <tr style = "color: white;">
            <td>
            <input type="radio" name="workSearch" id="Maid" value="Maid">
            <label for="Maid" class="form-control">Maid</label>
            </td>
            <td>
            <input type="radio" name="workSearch" id="Painter" value="Painter">
            <label for="Painter" class="form-control">Painter</label>
            </td>
            <td>
            <input type="radio" name="workSearch" id="Unskilled" value="Unskilled">
            <label for="Unskilled" class="form-control">Unskilled</label>
            </td>
        </tr>
        <tr style = "color: white;">
            <td colspan="3"><br>
            <label for="workrequest" style = "font-size: 20px; font-weight: bold;">Your work request goes here :</label>
            <br><br>
                <textarea id="workrequest" name="workrequest" rows="20" cols="100" class = "req-box"></textarea>
            </td>      
            </tr>
        <tr>
         <td>
            <input type="submit" value="Submit" class="button" style="font-size:18px">
        </td>
        </tr>
        </form>
</table>
</div>';

?>

</body>
</html>