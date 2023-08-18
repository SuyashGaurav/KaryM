<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Notifications</title>
<style>
.box-cust-req{
    box-shadow: 4px 4px rgb(234, 218, 218); 
    background-color: #e69c2d;
    padding: 20px 8px;
    border-radius: 10px 10px; 
    width : 17cm; 
    height : 1.5cm;
    vertical-align: top;
    font-size: 25px;
}
.box-req{
    box-shadow: 4px 4px rgb(234, 218, 218); 
    background-color:  #e69c2d;
    padding: 20px 8px;
    border-radius: 10px 10px; 
    width : 10cm; 
    height : 15cm;
    vertical-align: top;
    font-size: 15px;
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
<body style="background-image: url('../img/web-design.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
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
        window.location.href="customerprofile.php";
    }

    function login(){
        window.location.href="labourerlogin.php";
    }
</script>
<h1 class="HeaderDesktop"><img width = "6%" style = "float:left; margin-left: -25px; margin-top: -17px; margin-right: -15px;" src = "../img/logo-removebg-preview.png"><a onclick = "openF()"> <img style="cursor: pointer; width: 40px; padding-right: 25px; float:right;" src="../img/usericon.png" id="btn"></a>
    <div class="profilecontainer" id="profilebox"> 
        <button onclick="profile()" value="Submit" class="buttoninprofile" style="font-size:14px">Edit Profile</button><br>
        <form method="post" action="labourernotification.php"><input type="hidden" name="signout" value="signout"><input type="submit" value="Sign out" class="buttoninprofile" style="font: size 14px;"></form>
    </div>
    <a href = "../homepage.php">
    <a href="../homepage.php" style="color:#e6962d;">KaryM</a></a>
    <a href = "../aboutus.html"><p style="float:right; margin-right: 1.4%; margin-top: 1%; font-size:49%; color: #e6962d;">About Us</p></a></h1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "karym";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }
        if(isset($_SERVER["HTTP_REFERER"]) and (strpos($_SERVER["HTTP_REFERER"], "customermain.php") or strpos($_SERVER["HTTP_REFERER"], "customermain.php"))){
            // $_SESSION["name"]="JKLa";
            // $_SESSION["Id"]=2000;
            
            echo '<p style="font-size:45px; margin-left: 70px; margin-top: 80px; margin-left: 140px; color:white; background-color: #e69c2d; border-radius: 15px; height: 1.8cm; width: 15cm; padding-left: 20px; padding-top: 10px; box-shadow: black 0px 22px 70px 4px;">Welcome ' . $_SESSION["name"].'</p>';
            
            
            echo '<table id="table1" style= "margin:auto; color:white;">';
            $sql="SELECT * from labourers, labourersrequests where labourersrequests.Customer_Id=". $_SESSION["Id"]." and labourers.Labourer_Id=labourersrequests.Labourer_Id";
            $sql1="SELECT * from contractors, labourersrequests where labourersrequests.Customer_Id=". $_SESSION["Id"]." and contractors.Contractor_Id=labourersrequests.Labourer_Id";

            $result=$conn->query($sql);
            $result1=$conn->query($sql1);
            if ($result->num_rows>0 or $result1->num_rows>0){
            echo '<p style="font-size:40px; margin-left: 70px; font-family:Monospace; color:#25c1d5;">Here are the jobs requested by labourers and contractors for you</p>';
            while ($row=$result->fetch_assoc()){
                        echo '<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">'.$row["LabourerName"].'<span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span><br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">'.$row["Phone_no"].'</span></div>  <form action="customernotification.php" method="post">
                        <input type="submit" class="button" value="Accept" >
                        <input type="hidden" name="labid" value="'.$row['Labourer_Id'].'">
                        
                    </form> </td></tr>
                          
                        ';
                        
            }
            while ($row=$result1->fetch_assoc()){
                echo '<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">'.$row["ContractorName"].'<span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span><br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">'.$row["Phone_no"].'</span></div>  <form action="customernotification.php" method="post">
                <input type="submit" class="button" value="Accept" >
                <input type="hidden" name="labid" value="'.$row['Contractor_Id'].'">
                
            </form> </td></tr>
                  
                ';
                
    }
        }
           
            echo '</table>';
            echo '<table id="table1" style= "margin:auto; color:white;">';
            $sql="SELECT * from labourers, customersrequests where customersrequests.Customer_Id=". $_SESSION["Id"]." and customersrequests.Approved=1 and labourers.Labourer_Id=customersrequests.Labourer_Id";
            $sql1="SELECT * from contractors, customersrequests where customersrequests.Customer_Id=". $_SESSION["Id"]." and customersrequests.Approved=1 and contractors.Contractor_Id=customersrequests.Labourer_Id";
            $result=$conn->query($sql);
            $result1=$conn->query($sql1);
            if ($result->num_rows>0 or $result1->num_rows>0){
            echo '<p style="font-size:40px; margin-left: 70px; font-family:Monospace; color:#25c1d5;">Here are your jobs labourers and contractors have accepted</p>';
            while ($row=$result->fetch_assoc()){
                        echo '<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">'.$row["LabourerName"].'<span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span><br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">'.$row["Phone_no"].'</span></div>  </td></tr>
                          
                        ';
                        
            }
            while ($row=$result1->fetch_assoc()){
                echo '<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">'.$row["ContractorName"].'<span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span><br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">'.$row["Phone_no"].'</span></div>  </td></tr>
                  
                ';
                
    }
        
        }
            echo '</table>';
    }
            if(isset($_SERVER["HTTP_REFERER"]) and strpos($_SERVER["HTTP_REFERER"], "customernotification.php")){
      
                   $updsql="update labourersrequests set Approved = 1 where Labourer_Id= ".$_POST['labid']." and Customer_Id=".$_SESSION["Id"]."";
                    if($conn->query($updsql)){

                    echo'
                    <script>
                     alert("Hurray!! Labourer will be happy for having you.");
                    </script>
                    ';
                    }
                    echo '<p style="font-size:45px; margin-left: 70px; margin-top: 80px; margin-left: 140px; color:white; background-color: #e69c2d; border-radius: 15px; height: 1.8cm; width: 15cm; padding-left: 20px; padding-top: 10px; box-shadow: black 0px 22px 70px 4px;">Welcome ' . $_SESSION["name"].'</p>';
            
            
                    echo '<table id="table1" style= "margin:auto; color:white;">';
                    $sql="SELECT * from labourers, labourersrequests where labourersrequests.Customer_Id=". $_SESSION["Id"]." and labourers.Labourer_Id=labourersrequests.Labourer_Id";
                    $sql1="SELECT * from contractors, labourersrequests where labourersrequests.Customer_Id=". $_SESSION["Id"]." and contractors.Contractor_Id=labourersrequests.Labourer_Id";
        
                    $result=$conn->query($sql);
                    $result1=$conn->query($sql1);
                    if ($result->num_rows>0 or $result1->num_rows>0){
                    echo '<p style="font-size:40px; margin-left: 70px; font-family:Monospace; color:#25c1d5;">Here are the jobs requested by labourers and contractors for you</p>';
                    while ($row=$result->fetch_assoc()){
                                echo '<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">'.$row["LabourerName"].'<span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span><br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">'.$row["Phone_no"].'</span></div>  <form action="customernotification.php" method="post">
                                <input type="submit" class="button" value="Accept" >
                                <input type="hidden" name="labid" value="'.$row['Labourer_Id'].'">
                                
                            </form> </td></tr>
                                  
                                ';
                                
                    }
                    while ($row=$result1->fetch_assoc()){
                        echo '<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">'.$row["ContractorName"].'<span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span><br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">'.$row["Phone_no"].'</span></div>  <form action="customernotification.php" method="post">
                        <input type="submit" class="button" value="Accept" >
                        <input type="hidden" name="labid" value="'.$row['Contractor_Id'].'">
                        
                    </form> </td></tr>
                          
                        ';
                        
            }
                }
                   
                    echo '</table>';
                    echo '<table id="table1" style= "margin:auto; color:white;">';
                    $sql="SELECT * from labourers, customersrequests where customersrequests.Customer_Id=". $_SESSION["Id"]." and customersrequests.Approved=1 and labourers.Labourer_Id=customersrequests.Labourer_Id";
                    $sql1="SELECT * from contractors, customersrequests where customersrequests.Customer_Id=". $_SESSION["Id"]." and customersrequests.Approved=1 and contractors.Contractor_Id=customersrequests.Labourer_Id";
                    $result=$conn->query($sql);
                    $result1=$conn->query($sql1);
                    if ($result->num_rows>0 or $result1->num_rows>0){
                    echo '<p style="font-size:40px; margin-left: 70px; font-family:Monospace; color:#25c1d5;">Here are your jobs labourers and contractors have accepted</p>';
                    while ($row=$result->fetch_assoc()){
                                echo '<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">'.$row["LabourerName"].'<span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span><br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">'.$row["Phone_no"].'</span></div>  </td></tr>
                                  
                                ';
                                
                    }
                    while ($row=$result1->fetch_assoc()){
                        echo '<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">'.$row["ContractorName"].'<span style="float:right; font-size: 18px; font-family: courier;">'.$row["City"].'</span><br><span style="font-size: 18px;">'.$row["Address"].'<br></span><span style="font-size: 15px; font-family: Arial;">'.$row["Phone_no"].'</span></div>  </td></tr>
                          
                        ';
                        
            }
                
                }
                    echo '</table>';
            
            }

            
        
    ?>
</body>
</html>