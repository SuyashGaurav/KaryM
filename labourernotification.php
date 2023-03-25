<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Notifications</title>
<style>
.box-cust-req{
    box-shadow: black 0px 22px 70px 4px;
    background-color: #e69c2d;
    padding: 20px 8px;
    border-radius: 10px 10px; 
    width : 17cm; 
    height : 1.5cm;
    vertical-align: top;
    font-size: 25px;
    opacity: 0.94;
}
.box-req{
    box-shadow: black 0px 22px 70px 4px;
    background-color: #e69c2d;
    padding: 20px 8px;
    border-radius: 10px 10px; 
    width : 10cm; 
    height : 15cm;
    vertical-align: top;
    font-size: 15px;
    opacity: 0.94;
}
.HeaderDesktop {
    color: #e69c2d;
    height: 38px;
    width: 100%;
    margin: -8px ;
    padding: 10px;
    top: 0;
    left: 0;
    position: relative;
    font-family: 'Courier New', Courier, monospace;
    /* border-bottom: 0.5px solid black; */
}
#table1 {
  border-collapse: separate;
  border-spacing: 20px;
  margin: auto;
}
#table2 {
    margin-left: -45px;
    margin-top: -10px;
    /* padding: 5px; */
}
.login input[type='radio']{
    display: none;
}
.login label:hover {
    color: #25c1d5;
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
    margin-top: -30px;
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
            z-index:9;
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
            margin:7px;
        }
        .buttoninprofile:hover{
            background-color:black;
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
        window.location.href="labourerprofile.php";
    }

    function login(){
        window.location.href="labourerlogin.php";
    }
</script>
<h1 class="HeaderDesktop"><img width = "6%" style = "float:left; margin-left: -25px; margin-top: -17px; margin-right: -15px;" src = "logo-removebg-preview.png"><?php if (isset($_SERVER["HTTP_REFERER"]) and (isset($_POST["email"])or isset($_SESSION["email"]))){echo '<a onclick = "openF()"> <img style="cursor: pointer; width: 40px; padding-right: 25px; float:right;" src="usericon.png" id="btn"></a>
    <div class="profilecontainer" id="profilebox"> 
        <button onclick="profile()" value="Submit" class="buttoninprofile" style="font-size:14px">Edit Profile</button><br>
        <form method="post" action="labourernotification.php"><input type="hidden" name="signout" value="signout"><input type="submit" value="Sign out" class="buttoninprofile" style="font: size 14px;"></form>
    </div>';}else{echo "<button onclick=\"login()\" style=\"width: 80px; padding:10px 25px; float:right; margin-right:10px; margin-top:5px\" class='button'>Login</button>";}?><a href="homepage.php" style="color:#e6962d;">KaryM</a><a href = "aboutus.html"><p style="float:right; margin-right: 1.4%; margin-top: 1%; font-size:49%; color: #e6962d;">About Us</p></a></h1>
   <?php

   $empty1=$empty2=0;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "karym";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }
        if(isset($_SERVER["HTTP_REFERER"]) and strpos($_SERVER["HTTP_REFERER"], "labourermain.php") and isset($_SESSION["Id"])){
            echo '<p style="font-size:45px; margin-left: 70px; margin-top: 80px; margin-left: 140px; color:white; background-color: #e69c2d; border-radius: 15px; height: 1.8cm; width: 15cm; padding-left: 20px; padding-top: 10px; box-shadow: black 0px 22px 70px 4px;">Welcome ' . $_SESSION["name"].'</p>';
            
            
            echo '<table id="table1" style= "margin:auto; color:white;">';
            $sql="SELECT * from customers, customersrequests where customersrequests.Labourer_Id=". $_SESSION["Id"]." and customers.Customer_Id=customersrequests.Customer_Id";
            

            $result=$conn->query($sql);
            
            if ($result->num_rows>0){
                $empty1=1;
            echo '<p style="font-size:40px; margin-left: 70px; text-align: center; font-family:Monospace; color:#25c1d5;">Here are the jobs requested by customers for you</p>';
            while ($row=$result->fetch_assoc()){
                        echo '<tr><td class="box-cust-req"><img src="cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">'.$row["CustomerName"].'<span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span><br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">'.$row["Phone_no"].'</span></div>  <form action="labourernotification.php" method="post">
                        <input type="submit" class="button" value="Accept" >
                        <input type="hidden" name="custid" value="'.$row['Customer_Id'].'">
                        
                    </form> </td></tr>
                          
                        ';
                        
            }}
           
            echo '</table>';
            echo '<table id="table1" style= "margin:auto; color:white;">';
            $sql="SELECT * from customers, labourersrequests where labourersrequests.Labourer_Id=". $_SESSION["Id"]." and labourersrequests.Approved=1 and customers.Customer_Id=labourersrequests.Customer_Id";
            

            $result=$conn->query($sql);
            if ($result->num_rows>0){
                $empty2=1;
            echo '<p style="font-size:40px; margin-left: 70px; text-align: center; font-family:Monospace; color:#25c1d5;">Here are your jobs customers have accepted</p>';
            while ($row=$result->fetch_assoc()){
                        echo '<tr><td class="box-cust-req"><img src="cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">'.$row["CustomerName"].'<span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span><br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">'.$row["Phone_no"].'</span></div>  </td></tr>
                          
                        ';
                        
            }}
            echo '</table>';
            if ($empty1==0 and $empty2==0){
                echo '<p style="font-size:40px; margin-left: 70px; font-family:Monospace; color:#25c1d5;">There are no jobs for you.</p>';

            }
        }
            if(isset($_SERVER["HTTP_REFERER"]) and strpos($_SERVER["HTTP_REFERER"], "labourernotification.php") and (isset($_POST["custid"]) or isset($_POST["signout"]))){

                    if(isset($_POST["signout"])){
                        session_destroy();
                        echo '<script>window.location.href="labourerlogin.php";</script>';
                    }
                   $updsql="update customersrequests set Approved = 1 where Customer_Id= ".$_POST['custid']." and Labourer_Id=".$_SESSION["Id"]."";
                    if($conn->query($updsql)){

                    echo'
                    <script>
                     alert("Hurray!! Customer will be happy for having you.");
                    </script>
                    ';
                    }

                    echo '<table id="table1" style= "margin:auto; color:white;">';
                    $sql="SELECT * from customers, customersrequests where customersrequests.Labourer_Id=". $_SESSION["Id"]." and customers.Customer_Id=customersrequests.Customer_Id";
                    
        
                    $result=$conn->query($sql);
                    
                    if ($result->num_rows>0){
                        $empty1=1;
                    echo '<p style="font-size:40px; margin-left: 70px; font-family:Monospace; color:#25c1d5);">Here are the jobs requested by customers for you</p>';
                    while ($row=$result->fetch_assoc()){
                                echo '<tr><td class="box-cust-req"><img src="cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">'.$row["CustomerName"].'<span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span><br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">'.$row["Phone_no"].'</span></div>  <form action="labourernotification.php" method="post">
                                <input type="submit" class="button" value="Accept" >
                                <input type="hidden" name="custid" value="'.$row['Customer_Id'].'">
                                
                            </form> </td></tr>
                                  
                                ';
                                
                    }}
                   
                    echo '</table>';
                    echo '<table id="table1" style= "margin:auto; color:white;">';
                    $sql="SELECT * from customers, labourersrequests where labourersrequests.Labourer_Id=". $_SESSION["Id"]." and labourersrequests.Approved=1 and customers.Customer_Id=labourersrequests.Customer_Id";
                    
        
                    $result=$conn->query($sql);
                    if ($result->num_rows>0){
                        $empty2=1;
                    echo '<p style="font-size:40px; margin-left: 70px; font-family:Monospace; color:#25c1d5;">Here are your jobs customers have accepted</p>';
                    while ($row=$result->fetch_assoc()){
                                echo '<tr><td class="box-cust-req"><img src="cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">'.$row["CustomerName"].'<span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span><br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">'.$row["Phone_no"].'</span></div>  </td></tr>
                                  
                                ';
                                
                    }}
                    echo '</table>';
                    if ($empty1==0 and $empty2==0){
                        echo '<p style="font-size:40px; margin-left: 70px; font-family:Monospace; color:#25c1d5;">There are no jobs for you.</p>';
        
                    }
            
            echo '</table>';
            if ($empty1==0 and $empty2==0){
                echo '<p style="font-size:40px; margin-left: 70px; font-family:Monospace; color:#25c1d5;">There are no jobs for you.</p>';

            }

        }

            
        
    ?>
</body>
</html>