<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KaryM</title>
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

    #table1 {
    border-collapse: separate;
    border-spacing: 20px;
    margin: auto;
}
.box-cust-req{
    /* box-shadow: 4px 4px rgb(234, 218, 218);  */
    background-color: #e6962d;
    padding: 20px 8px;
    border-radius: 10px 10px; 
    width : 17cm; 
    height : 1.5cm;
    opacity: 0.97;
    box-shadow: black 0px 22px 70px 4px;
    vertical-align: top;
    font-size: 25px;
    color: white;
}
.box-cust{
    /* box-shadow: 4px 4px rgb(234, 218, 218);  */
    background-color: #e6962d;
    /* padding: 10px 4px; */
    border-radius: 10px 10px; 
    width : auto; 
    height : auto;
    opacity: 0.97;
    box-shadow: black 0px 22px 70px 4px;
    vertical-align: top;
    font-size: 25px;
    margin-top: 100px;
}
.button {
    background-color: #3a3a3a; 
    color: white; 
    border: none;
    padding: 9px 30px; 
    text-align: center;
    text-decoration: none;
    display: inline-block;
    cursor: pointer;
    margin-top: -20px;
    margin-right: 15px;
    border-radius: 5px;
    float: right;
    /* box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px; */
}
.button:hover{
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
    if ( window.history.replaceState ) {
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
echo '<h1 class="HeaderDesktop"><img width = "6%" style = "float:left; margin-left: -25px; margin-top: -11px; margin-right: -15px;" src = "logo-removebg-preview.png"> 

<a onclick = "openF()"> <img style="cursor: pointer; width: 40px; padding-right: 25px; float:right;" src="usericon.png" id="btn"></a>

<a href="homepage.php" style="color:#e6962d;"><a href="homepage.php" style="color:#e6962d;">KaryM</a></a>
<a href = "aboutus.html"><p style="float:right; margin-right: 1.4%; margin-top: 1%; font-size:49%; color: #e6962d;">About Us</p></a>
</h1>
<div class="profilecontainer" id="profilebox"> 
<button value="Submit" class="buttoninprofile" style="font-size:14px" onclick = "profile()">Edit Profile</button><br><br>
<button value="Submit" class="buttoninprofile" style="font-size:14px" onclick = "notification()">Notification</button><br><br>
<button value="Submit" class="buttoninprofile" style="font: size 14px; onclick = "logout()">Log Out</button>
</div>';
$servername = "localhost";                        
$username = "root";
$password = "";
$dbname = "karym";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $customerid=$_SESSION['Id'];

if (isset($_SERVER["HTTP_REFERER"]) and strpos($_SERVER["HTTP_REFERER"], "customermain.php")){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $_SESSION["role"] = $_POST["role"];
    }
    $select = $_SESSION["role"];
    $sql2 = "SELECT * FROM labourers";
    $sql3 = "SELECT * FROM contractors";
    $result2=$conn->query($sql2);
    $result3=$conn->query($sql3);



    echo '<table style = "margin-top: 30px;">
            
    <tr>
        <td style="font-size:37px; margin-left: 70px; margin-top: 80px; margin-left: 140px; color:white; background-color: #e69c2d; border-radius: 15px; height: 1.5cm; width: 18cm; padding-left: 20px; padding-top: 0px; box-shadow: black 0px 22px 70px 4px; font-family: Garamond, serif;">' 
            ."Here are ". substr($select,0,-1)."s for you.".
        '</td>
    </tr>
    </table>';

    if($select == "Electrician1"){
    if ($result2->num_rows > 0) {
        echo ".";
        while($row = $result2->fetch_assoc()) {
            if($row["Electrician"] == 1){
            echo'<table id = "table1">
            
            <tr>
                <td class="box-cust-req"> 
                
                <img src="cust-icon.png"  width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                '<div style = "margin-left:87px; margin-top:-60px;">
                '.$row["LabourerName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                </div>
                <form method=post action="customernext.php">
                <input type="hidden" name="labourername" value='.$row["Labourer_Id"].'>
                <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                </form>
                </td>
            </tr>
            </table>';

            $labourerid=$row["Labourer_Id"];

        }
    }
        } else {
        echo "No jobs";
        }

        
        if ($result3->num_rows > 0) {
            // echo ".";
            while($row = $result3->fetch_assoc()) {
                if($row["Electrician"] == 1){
                echo'<table id = "table1">
                
                <tr>
                    <td class="box-cust-req"> 
                    
                    <img src="cust-icon.png"  width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">
                    '.$row["ContractorName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                    </div>
                    <form method=post action="customernext.php">
                    <input type="hidden" name="labourername" value='.$row["Contractor_Id"].'>
                    <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                    </form>
                    </td>
                </tr>
                </table>';
    
                $labourerid=$row["Contractor_Id"];
    
            }
        }
            } else {
            echo "No jobs";
            }



    }
    
    if($select == "Plumber1"){
        if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
                if($row["Plumber"] == 1){
                echo'<table id = "table1">
                <tr>
                    <td class="box-cust-req"> 
                    <img src="cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">'.$row["LabourerName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                </div>
                <form method=post action="customernext.php">
                <input type="hidden" name="labourername" value='.$row["Labourer_Id"].'>
                <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                </form>
                </td>
                </tr>
                </table>';
                
                $labourerid=$row["Labourer_Id"];

            }
        }
            } else {
            echo "No jobs";
            }

            
        if ($result3->num_rows > 0) {
            // echo ".";
            while($row = $result3->fetch_assoc()) {
                if($row["Plumber"] == 1){
                echo'<table id = "table1">
                
                <tr>
                    <td class="box-cust-req"> 
                    
                    <img src="cust-icon.png"  width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">
                    '.$row["ContractorName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                    </div>
                    <form method=post action="customernext.php">
                    <input type="hidden" name="labourername" value='.$row["Contractor_Id"].'>
                    <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                    </form>
                    </td>
                </tr>
                </table>';
    
                $labourerid=$row["Contractor_Id"];
    
            }
        }
            } else {
            echo "No jobs";
            }
        }
    
        if($select == "Carpenter1"){
            if ($result2->num_rows > 0) {
                while($row = $result2->fetch_assoc()) {
                    if($row["Carpenter"] == 1){
                    echo'<table id = "table1">
                    <tr>
                        <td class="box-cust-req"> 
                        <img src="cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                        '<div style = "margin-left:87px; margin-top:-60px;">'.$row["LabourerName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                        
                        </div>
                        <form method=post action="customernext.php">
                <input type="hidden" name="labourername" value='.$row["Labourer_Id"].'>
                <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                </form>
                </td>
                    </tr>
                    </table>';

                    $labourerid=$row["Labourer_Id"];
                }
            }
                } else {
                    echo "<br>";
                echo "No jobs";
                }

                
        if ($result3->num_rows > 0) {
            // echo ".";
            while($row = $result3->fetch_assoc()) {
                if($row["Carpenter"] == 1){
                echo'<table id = "table1">
                
                <tr>
                    <td class="box-cust-req"> 
                    
                    <img src="cust-icon.png"  width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">
                    '.$row["ContractorName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                    </div>
                    <form method=post action="customernext.php">
                    <input type="hidden" name="labourername" value='.$row["Contractor_Id"].'>
                    <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                    </form>
                    </td>
                </tr>
                </table>';
    
                $labourerid=$row["Contractor_Id"];
    
            }
        }
            } else {
            echo "No jobs";
            }
            }

    if($select == "Driver1"){
        if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
                if($row["Driver"] == 1){
                echo'<table id = "table1">
                <tr>
                    <td class="box-cust-req"> 
                    <img src="cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">'.$row["LabourerName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                </div>
                <form method=post action="customernext.php">
                <input type="hidden" name="labourername" value='.$row["Labourer_Id"].'>
                <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                </form>
                </td>
                </tr>
                </table>';

                $labourerid=$row["Labourer_Id"];
            }
        }
            } else {
            echo "No jobs";
            }

            
        if ($result3->num_rows > 0) {
            // echo ".";
            while($row = $result3->fetch_assoc()) {
                if($row["Driver"] == 1){
                echo'<table id = "table1">
                
                <tr>
                    <td class="box-cust-req"> 
                    
                    <img src="cust-icon.png"  width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">
                    '.$row["ContractorName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                    </div>
                    <form method=post action="customernext.php">
                    <input type="hidden" name="labourername" value='.$row["Contractor_Id"].'>
                    <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                    </form>
                    </td>
                </tr>
                </table>';
    
                $labourerid=$row["Contractor_Id"];
    
            }
        }
            } else {
            echo "No jobs";
            }
        }

    if($select == "Painter1"){
        if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
                if($row["Painter"] == 1){
                $labourerid=$row["Labourer_Id"];
                echo'<table id = "table1">
                <tr>
                    <td class="box-cust-req"> 
                    <img src="cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">'.$row["LabourerName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                </div>
                <form method=post action="customernext.php">
                <input type="hidden" name="labourername" value='.$row["Labourer_Id"].'>
                <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                </form>
                </td>
                </tr>
                </table>';

            }
        }
            } else {
            echo "No jobs";
            }

            
        if ($result3->num_rows > 0) {
            // echo ".";
            while($row = $result3->fetch_assoc()) {
                if($row["Painter"] == 1){
                echo'<table id = "table1">
                
                <tr>
                    <td class="box-cust-req"> 
                    
                    <img src="cust-icon.png"  width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">
                    '.$row["ContractorName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                    </div>
                    <form method=post action="customernext.php">
                    <input type="hidden" name="labourername" value='.$row["Contractor_Id"].'>
                    <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                    </form>
                    </td>
                </tr>
                </table>';
    
                $labourerid=$row["Contractor_Id"];
    
            }
        }
            } else {
            echo "No jobs";
            }
        }

        if($select == "Babysitter1"){
            if ($result2->num_rows > 0) {
                while($row = $result2->fetch_assoc()) {
                    if($row["Babysitter"] == 1){
                    echo'<table id = "table1">
                    <tr>
                        <td class="box-cust-req"> 
                        <img src="cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                        '<div style = "margin-left:87px; margin-top:-60px;">'.$row["LabourerName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                </div>
                <form method=post action="customernext.php">
                <input type="hidden" name="labourername" value='.$row["Labourer_Id"].'>
                <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                </form>
                </td>
                    </tr>
                    </table>';

                    $labourerid=$row["Labourer_Id"];
                }
            }
            if ($result3->num_rows > 0) {
                // echo ".";
                while($row = $result3->fetch_assoc()) {
                    if($row["Babysitter"] == 1){
                    echo'<table id = "table1">
                    
                    <tr>
                        <td class="box-cust-req"> 
                        
                        <img src="cust-icon.png"  width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                        '<div style = "margin-left:87px; margin-top:-60px;">
                        '.$row["ContractorName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                        </div>
                        <form method=post action="customernext.php">
                        <input type="hidden" name="labourername" value='.$row["Contractor_Id"].'>
                        <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                        </form>
                        </td>
                    </tr>
                    </table>';
        
                    $labourerid=$row["Contractor_Id"];
        
                }
            }
                } else {
                echo "No jobs";
                }
                } else {
                echo "No jobs";
                }


            }
    
        if($select == "Maid1"){
            if ($result2->num_rows > 0) {
                while($row = $result2->fetch_assoc()) {
                    if($row["Maid"] == 1){
                    echo'<table id = "table1">
                    <tr>
                        <td class="box-cust-req"> 
                        <img src="cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                        '<div style = "margin-left:87px; margin-top:-60px;">'.$row["LabourerName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                </div>
                <form method=post action="customernext.php">
                <input type="hidden" name="labourername" value='.$row["Labourer_Id"].'>
                <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                </form>
                </td>
                    </tr>
                    </table>';

                    $labourerid=$row["Labourer_Id"];
                }
            }
                } else {
                echo "No jobs";
                }

                
        if ($result3->num_rows > 0) {
            // echo ".";
            while($row = $result3->fetch_assoc()) {
                if($row["Maid"] == 1){
                echo'<table id = "table1">
                
                <tr>
                    <td class="box-cust-req"> 
                    
                    <img src="cust-icon.png"  width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">
                    '.$row["ContractorName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                    </div>
                    <form method=post action="customernext.php">
                    <input type="hidden" name="labourername" value='.$row["Contractor_Id"].'>
                    <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                    </form>
                    </td>
                </tr>
                </table>';
    
                $labourerid=$row["Contractor_Id"];
    
            }
        }
            } else {
            echo "No jobs";
            }
            }
            
            if($select == "Labourers1"){
                if ($result2->num_rows > 0) {
                    while($row = $result2->fetch_assoc()) {
                        if($row["Unskilled"] == 1){
                        echo'<table id = "table1">
                        <tr>
                            <td class="box-cust-req"> 
                            <img src="cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                            '<div style = "margin-left:87px; margin-top:-60px;">'.$row["LabourerName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                            </div>
                            <form method=post action="customernext.php">
                <input type="hidden" name="labourername" value='.$row["Labourer_Id"].'>
                <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                </form>
                            </td>
                        </tr>
                        </table>';

                        $labourerid=$row["Labourer_Id"];
                    }
                }
                    } else {
                    echo "No jobs";
                    }

                    
        if ($result3->num_rows > 0) {
            // echo ".";
            while($row = $result3->fetch_assoc()) {
                if($row["Unskilled"] == 1){
                echo'<table id = "table1">
                
                <tr>
                    <td class="box-cust-req"> 
                    
                    <img src="cust-icon.png"  width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">
                    '.$row["ContractorName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                    </div>
                    <form method=post action="customernext.php">
                    <input type="hidden" name="labourername" value='.$row["Contractor_Id"].'>
                    <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                    </form>
                    </td>
                </tr>
                </table>';
    
                $labourerid=$row["Contractor_Id"];
    
            }
        }
            } else {
            echo "No jobs";
            }
                }

                if($select == "Pestcontroller1"){
                    if ($result2->num_rows > 0) {
                        while($row = $result2->fetch_assoc()) {
                            if($row["CleaningAndPestcontrol"] == 1){
                            echo'<table id = "table1">
                            <tr>
                                <td class="box-cust-req"> 
                                <img src="cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                                '<div style = "margin-left:87px; margin-top:-60px;">'.$row["LabourerName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                                </div>
                                <form method=post action="customernext.php">
                <input type="hidden" name="labourername" value='.$row["Labourer_Id"].'>
                <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                </form>
                                </td>
                            </tr>
                            </table>';

                            $labourerid=$row["Labourer_Id"];
                        }
                    }
                        } else {
                        echo "No jobs";
                        }

                        
        if ($result3->num_rows > 0) {
            // echo ".";
            while($row = $result3->fetch_assoc()) {
                if($row["CleaningAndPestcontrol"] == 1){
                echo'<table id = "table1">
                
                <tr>
                    <td class="box-cust-req"> 
                    
                    <img src="cust-icon.png"  width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">
                    '.$row["ContractorName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                    </div>
                    <form method=post action="customernext.php">
                    <input type="hidden" name="labourername" value='.$row["Contractor_Id"].'>
                    <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                    </form>
                    </td>
                </tr>
                </table>';
    
                $labourerid=$row["Contractor_Id"];
    
            }
        }
            } else {
            echo "No jobs";
            }
                    }

                    // function notifit($labourerid){
                    //     $sqlfun="INSERT INTO customersrequests(Customer_Id,Labourer_Id) VALUES($customerid,$labourerid)";
                    //     $conn->query($sqlfun);

                    //     echo'
                    //     <script>
                    //         alert("Hello Customer,Your request has been submited!");
                        
                    //     </script>;';
                    // }




                // function notifit($labourerid){
                //     echo'
                //     <script>
                //         '.$sqlfun.'="INSERT INTO customersrequests(Customer_Id,Labourer_Id) VALUES('.$customerid.','.$labourerid.')";
                //         '.$conn->query($sqlfun);.'
                    
                //         alert("Hello Customer,Your request has been submited!");
                    
                //     </script>;';
                // }


}
else if (isset($_SERVER["HTTP_REFERER"]) and strpos($_SERVER["HTTP_REFERER"], "customernext.php") and isset($_POST["labourername"])){
    $dupsql="SELECT * FROM customersrequests";
    $tab=$conn->query($dupsql);
    $matching=0;
    while( $rowiseread=$tab->fetch_assoc()){
        if($rowiseread['Labourer_Id']==$_POST["labourername"] && $rowiseread["Customer_Id"]==$_SESSION["Id"]){
            $matching=1;
        }
    }
   if ($matching==0){
    $sqlfun="INSERT INTO customersrequests(Customer_Id,Labourer_Id) VALUES(".$_SESSION["Id"].",".$_POST["labourername"].")";
    $conn->query($sqlfun);
    echo'

    <script>
    alert("Hello Customer,Your request has been submited!");
    // window.location.href='.$_SERVER["HTTP_REFERER"].';
    </script>;';
   }
   else{
    echo'

    <script>
    alert("Hello Customer,Your request has already been submited!");
    // window.location.href='.$_SERVER["HTTP_REFERER"].';
    </script>;';
   }

    $select = $_SESSION["role"];
    $sql2 = "SELECT * FROM labourers";
    $sql3 = "SELECT * FROM contractors";
    $result2=$conn->query($sql2);
    $result3=$conn->query($sql3);

    echo '<table style = "margin-top: 30px;">
            
    <tr>
        <td style="color: white; font-size: 30px;">' 
            ."Here are ". substr($select,0,-1)."s for you.".
        '</td>
    </tr>
    </table>';

    if($select == "Electrician1"){
    if ($result2->num_rows > 0) {
        echo ".";
        while($row = $result2->fetch_assoc()) {
            if($row["Electrician"] == 1){
            echo'<table id = "table1">
            
            <tr>
                <td class="box-cust-req"> 
                
                <img src="cust-icon.png"  width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                '<div style = "margin-left:87px; margin-top:-60px;">
                '.$row["LabourerName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                </div>
                <form method=post action="customernext.php">
                <input type="hidden" name="labourername" value='.$row["Labourer_Id"].'>
                <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                </form>
                </td>
            </tr>
            </table>';

            $labourerid=$row["Labourer_Id"];

        }
    }
        } else {
        echo "No jobs";
        }

        
        if ($result3->num_rows > 0) {
            // echo ".";
            while($row = $result3->fetch_assoc()) {
                if($row["Electrician"] == 1){
                echo'<table id = "table1">
                
                <tr>
                    <td class="box-cust-req"> 
                    
                    <img src="cust-icon.png"  width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">
                    '.$row["ContractorName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                    </div>
                    <form method=post action="customernext.php">
                    <input type="hidden" name="labourername" value='.$row["Contractor_Id"].'>
                    <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                    </form>
                    </td>
                </tr>
                </table>';
    
                $labourerid=$row["Contractor_Id"];
    
            }
        }
            } else {
            echo "No jobs";
            }



    }
    
    if($select == "Plumber1"){
        if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
                if($row["Plumber"] == 1){
                echo'<table id = "table1">
                <tr>
                    <td class="box-cust-req"> 
                    <img src="cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">'.$row["LabourerName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                </div>
                <form method=post action="customernext.php">
                <input type="hidden" name="labourername" value='.$row["Labourer_Id"].'>
                <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                </form>
                </td>
                </tr>
                </table>';
                
                $labourerid=$row["Labourer_Id"];

            }
        }
            } else {
            echo "No jobs";
            }

            
        if ($result3->num_rows > 0) {
            // echo ".";
            while($row = $result3->fetch_assoc()) {
                if($row["Plumber"] == 1){
                echo'<table id = "table1">
                
                <tr>
                    <td class="box-cust-req"> 
                    
                    <img src="cust-icon.png"  width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">
                    '.$row["ContractorName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                    </div>
                    <form method=post action="customernext.php">
                    <input type="hidden" name="labourername" value='.$row["Contractor_Id"].'>
                    <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                    </form>
                    </td>
                </tr>
                </table>';
    
                $labourerid=$row["Contractor_Id"];
    
            }
        }
            } else {
            echo "No jobs";
            }
        }
    
        if($select == "Carpenter1"){
            if ($result2->num_rows > 0) {
                while($row = $result2->fetch_assoc()) {
                    if($row["Carpenter"] == 1){
                    echo'<table id = "table1">
                    <tr>
                        <td class="box-cust-req"> 
                        <img src="cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                        '<div style = "margin-left:87px; margin-top:-60px;">'.$row["LabourerName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                        
                        </div>
                        <form method=post action="customernext.php">
                <input type="hidden" name="labourername" value='.$row["Labourer_Id"].'>
                <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                </form>
                </td>
                    </tr>
                    </table>';

                    $labourerid=$row["Labourer_Id"];
                }
            }
                } else {
                    echo "<br>";
                echo "No jobs";
                }

                
        if ($result3->num_rows > 0) {
            // echo ".";
            while($row = $result3->fetch_assoc()) {
                if($row["Carpenter"] == 1){
                echo'<table id = "table1">
                
                <tr>
                    <td class="box-cust-req"> 
                    
                    <img src="cust-icon.png"  width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">
                    '.$row["ContractorName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                    </div>
                    <form method=post action="customernext.php">
                    <input type="hidden" name="labourername" value='.$row["Contractor_Id"].'>
                    <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                    </form>
                    </td>
                </tr>
                </table>';
    
                $labourerid=$row["Contractor_Id"];
    
            }
        }
            } else {
            echo "No jobs";
            }
            }

    if($select == "Driver1"){
        if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
                if($row["Driver"] == 1){
                echo'<table id = "table1">
                <tr>
                    <td class="box-cust-req"> 
                    <img src="cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">'.$row["LabourerName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                </div>
                <form method=post action="customernext.php">
                <input type="hidden" name="labourername" value='.$row["Labourer_Id"].'>
                <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                </form>
                </td>
                </tr>
                </table>';

                $labourerid=$row["Labourer_Id"];
            }
        }
            } else {
            echo "No jobs";
            }

            
        if ($result3->num_rows > 0) {
            // echo ".";
            while($row = $result3->fetch_assoc()) {
                if($row["Driver"] == 1){
                echo'<table id = "table1">
                
                <tr>
                    <td class="box-cust-req"> 
                    
                    <img src="cust-icon.png"  width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">
                    '.$row["ContractorName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                    </div>
                    <form method=post action="customernext.php">
                    <input type="hidden" name="labourername" value='.$row["Contractor_Id"].'>
                    <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                    </form>
                    </td>
                </tr>
                </table>';
    
                $labourerid=$row["Contractor_Id"];
    
            }
        }
            } else {
            echo "No jobs";
            }
        }

    if($select == "Painter1"){
        if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
                if($row["Painter"] == 1){
                $labourerid=$row["Labourer_Id"];
                echo'<table id = "table1">
                <tr>
                    <td class="box-cust-req"> 
                    <img src="cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">'.$row["LabourerName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                </div>
                <form method=post action="customernext.php">
                <input type="hidden" name="labourername" value='.$row["Labourer_Id"].'>
                <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                </form>
                </td>
                </tr>
                </table>';

            }
        }
            } else {
            echo "No jobs";
            }

            
        if ($result3->num_rows > 0) {
            // echo ".";
            while($row = $result3->fetch_assoc()) {
                if($row["Painter"] == 1){
                echo'<table id = "table1">
                
                <tr>
                    <td class="box-cust-req"> 
                    
                    <img src="cust-icon.png"  width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">
                    '.$row["ContractorName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                    </div>
                    <form method=post action="customernext.php">
                    <input type="hidden" name="labourername" value='.$row["Contractor_Id"].'>
                    <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                    </form>
                    </td>
                </tr>
                </table>';
    
                $labourerid=$row["Contractor_Id"];
    
            }
        }
            } else {
            echo "No jobs";
            }
        }

        if($select == "Babysitter1"){
            if ($result2->num_rows > 0) {
                while($row = $result2->fetch_assoc()) {
                    if($row["Babysitter"] == 1){
                    echo'<table id = "table1">
                    <tr>
                        <td class="box-cust-req"> 
                        <img src="cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                        '<div style = "margin-left:87px; margin-top:-60px;">'.$row["LabourerName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                </div>
                <form method=post action="customernext.php">
                <input type="hidden" name="labourername" value='.$row["Labourer_Id"].'>
                <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                </form>
                </td>
                    </tr>
                    </table>';

                    $labourerid=$row["Labourer_Id"];
                }
            }
            if ($result3->num_rows > 0) {
                // echo ".";
                while($row = $result3->fetch_assoc()) {
                    if($row["Babysitter"] == 1){
                    echo'<table id = "table1">
                    
                    <tr>
                        <td class="box-cust-req"> 
                        
                        <img src="cust-icon.png"  width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                        '<div style = "margin-left:87px; margin-top:-60px;">
                        '.$row["ContractorName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                        </div>
                        <form method=post action="customernext.php">
                        <input type="hidden" name="labourername" value='.$row["Contractor_Id"].'>
                        <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                        </form>
                        </td>
                    </tr>
                    </table>';
        
                    $labourerid=$row["Contractor_Id"];
        
                }
            }
                } else {
                echo "No jobs";
                }
                } else {
                echo "No jobs";
                }


            }
    
        if($select == "Maid1"){
            if ($result2->num_rows > 0) {
                while($row = $result2->fetch_assoc()) {
                    if($row["Maid"] == 1){
                    echo'<table id = "table1">
                    <tr>
                        <td class="box-cust-req"> 
                        <img src="cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                        '<div style = "margin-left:87px; margin-top:-60px;">'.$row["LabourerName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                </div>
                <form method=post action="customernext.php">
                <input type="hidden" name="labourername" value='.$row["Labourer_Id"].'>
                <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                </form>
                </td>
                    </tr>
                    </table>';

                    $labourerid=$row["Labourer_Id"];
                }
            }
                } else {
                echo "No jobs";
                }

                
        if ($result3->num_rows > 0) {
            // echo ".";
            while($row = $result3->fetch_assoc()) {
                if($row["Maid"] == 1){
                echo'<table id = "table1">
                
                <tr>
                    <td class="box-cust-req"> 
                    
                    <img src="cust-icon.png"  width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">
                    '.$row["ContractorName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                    </div>
                    <form method=post action="customernext.php">
                    <input type="hidden" name="labourername" value='.$row["Contractor_Id"].'>
                    <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                    </form>
                    </td>
                </tr>
                </table>';
    
                $labourerid=$row["Contractor_Id"];
    
            }
        }
            } else {
            echo "No jobs";
            }
            }
            
            if($select == "Labourers1"){
                if ($result2->num_rows > 0) {
                    while($row = $result2->fetch_assoc()) {
                        if($row["Unskilled"] == 1){
                        echo'<table id = "table1">
                        <tr>
                            <td class="box-cust-req"> 
                            <img src="cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                            '<div style = "margin-left:87px; margin-top:-60px;">'.$row["LabourerName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                            </div>
                            <form method=post action="customernext.php">
                <input type="hidden" name="labourername" value='.$row["Labourer_Id"].'>
                <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                </form>
                            </td>
                        </tr>
                        </table>';

                        $labourerid=$row["Labourer_Id"];
                    }
                }
                    } else {
                    echo "No jobs";
                    }

                    
        if ($result3->num_rows > 0) {
            // echo ".";
            while($row = $result3->fetch_assoc()) {
                if($row["Unskilled"] == 1){
                echo'<table id = "table1">
                
                <tr>
                    <td class="box-cust-req"> 
                    
                    <img src="cust-icon.png"  width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">
                    '.$row["ContractorName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                    </div>
                    <form method=post action="customernext.php">
                    <input type="hidden" name="labourername" value='.$row["Contractor_Id"].'>
                    <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                    </form>
                    </td>
                </tr>
                </table>';
    
                $labourerid=$row["Contractor_Id"];
    
            }
        }
            } else {
            echo "No jobs";
            }
                }

                if($select == "Pestcontroller1"){
                    if ($result2->num_rows > 0) {
                        while($row = $result2->fetch_assoc()) {
                            if($row["CleaningAndPestcontrol"] == 1){
                            echo'<table id = "table1">
                            <tr>
                                <td class="box-cust-req"> 
                                <img src="cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                                '<div style = "margin-left:87px; margin-top:-60px;">'.$row["LabourerName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                                </div>
                                <form method=post action="customernext.php">
                <input type="hidden" name="labourername" value='.$row["Labourer_Id"].'>
                <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                </form>
                                </td>
                            </tr>
                            </table>';

                            $labourerid=$row["Labourer_Id"];
                        }
                    }
                        } else {
                        echo "No jobs";
                        }

                        
        if ($result3->num_rows > 0) {
            // echo ".";
            while($row = $result3->fetch_assoc()) {
                if($row["CleaningAndPestcontrol"] == 1){
                echo'<table id = "table1">
                
                <tr>
                    <td class="box-cust-req"> 
                    
                    <img src="cust-icon.png"  width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right">'.
                    '<div style = "margin-left:87px; margin-top:-60px;">
                    '.$row["ContractorName"].'<span style="font-size: 18px; font-family: oxygen; margin-left: 2%; " >Phone:'.$row["Phone_no"].'</span> <span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span>' . '<br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">
                    </div>
                    <form method=post action="customernext.php">
                    <input type="hidden" name="labourername" value='.$row["Contractor_Id"].'>
                    <input type="submit" class="button" style = "bottom: 0px; right: -1cm;"  value="Contact me">
                    </form>
                    </td>
                </tr>
                </table>';
    
                $labourerid=$row["Contractor_Id"];
    
            }
        }
            } else {
            echo "No jobs";
            }
        }

}
else{
    echo '<script>alert("Please login as customer from login page"); window.location.href="customerlogin.php"; </script>';
}
?>



</body>
</html>