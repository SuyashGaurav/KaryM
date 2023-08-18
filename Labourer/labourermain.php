<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

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
    color: black;
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
        window.location.href="labourerprofile.php";
    }
    function notification(){
        window.location.href="labourernotification.php";
    }
    function login(){
        window.location.href="labourerlogin.php";
    }
    
</script>
<h1 class="HeaderDesktop"><img width = "6%" style = "float:left; margin-left: -25px; margin-top: -17px; margin-right: -15px;" src = "../img/logo-removebg-preview.png"><?php if (isset($_SERVER["HTTP_REFERER"]) and (isset($_POST["email"])or isset($_SESSION["email"]))){echo '<a onclick = "openF()"> <img style="cursor: pointer; width: 40px; padding-right: 25px; float:right;" src="../img/usericon.png" id="btn"></a>
    <div class="profilecontainer" id="profilebox"> 
        <button onclick="profile()" value="Submit" class="buttoninprofile" style="font-size:14px">Edit Profile</button><br>
        <button onclick="notification()" value="Submit" class="buttoninprofile" style="font-size:14px">Notification</button><br>
        <form method="post" action="labourermain.php"><input type="hidden" name="signout" value="signout"><input type="submit" value="Sign out" class="buttoninprofile" style="font: size 14px;"></form>
    </div>';}else{echo "<button onclick=\"login()\" style=\"width: 80px; padding:10px 25px; float:right; margin-right:10px; margin-top:5px\" class='button'>Login</button>";}?><a href="../homepage.php" style="color:#e6962d;">KaryM</a><a href = "../aboutus.html"><p style="float:right; margin-right: 1.4%; margin-top: 1%; font-size:49%; color: #e6962d;">About Us</p></a></h1>

    <?php
    $cities='<div class="box-req" style="margin-left: 105px; margin-top: 100px; padding: 20px; color: white;">
       <!-- <select id="select-state" style="width: 9cm;" placeholder="Which city are you looking?" onclick="submitt()">
        <option value="">Select a city...</option>
        <option value="AG">Agra</option>
        <option value="AH">Ahmedabad</option>
        <option value="BA">Bangalore</option>
        <option value="CH">Chandigarh</option>
        <option value="CN">Chennai</option>
        <option value="DE">Delhi</option>
        <option value="DH">Dharwad</option>
        <option value="GU">Gurgaon</option>
        <option value="HY">Hyderabad</option>
        <option value="HU">Hubbali</option>
        <option value="JA">Jaipur</option>
        <option value="JM">Jammu</option>
        <option value="KO">Kolkata</option>
        <option value="KT">Kota</option>
        <option value="LU">Lucknow</option>
        <option value="MU">Mumbai</option>
        <option value="NO">Noida</option>
        <option value="PA">Patna</option>
        <option value="PU">Pune</option>
        <option value="SR">Srinagar</option>
        <option value="TH">Vaishali</option>
        </select><br> -->
        <p style = "font-size: 35px; text-weight: bold;">Cities </p>
        <hr>
        <br>
        
        <form class = "login">
        <table id = "table2">
        <tr>                                                                   
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Agra" value="AG" onclick="submitt()"><label for="Agra">Agra</label> 
        </td>
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Ahmedabad" value="AH" onclick="submitt()"><label for="Ahmedabad">Ahmedabad</label>
        </td>
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Bangalore" value="BA" onclick="submitt()"><label for="Bangalore">Bangalore</label>
        </td>
    </tr>
    <tr>
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Chandigarh" value="CH" onclick="submitt()"><label for="Chandigarh">Chandigarh</label> 
        </td>
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Chennai" value="CN" onclick="submitt()"><label for="Chennai">Chennai</label>
        </td>
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Delhi" value="DE" onclick="submitt()"><label for="Delhi">Delhi</label>
        </td>
    </tr>
    <tr>
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Dharwad" value="DH" onclick="submitt()"><label for="Dharwad">Dharwad</label> 
        </td>
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Gurgaon" value="GU" onclick="submitt()"><label for="Gurgaon">Gurgaon</label>
        </td>
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Hyderabad" value="HY" onclick="submitt()"><label for="Hyderabad">Hyderabad</label>
        </td>
    </tr>
    <tr>
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Hubbali" value="HU" onclick="submitt()"><label for="Hubbali">Hubbali</label> 
        </td>
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Jaipur" value="JA" onclick="submitt()"><label for="Jaipur">Jaipur</label>
        </td>
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Jammu" value="JM" onclick="submitt()"><label for="Jammu">Jammu</label>
        </td>
    </tr>
    <tr>
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Kolkata" value="KO" onclick="submitt()"><label for="Kolkata">Kolkata</label> 
        </td>
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Kota" value="KT" onclick="submitt()"><label for="Kota">Kota</label>
        </td>
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Lucknow" value="LU" onclick="submitt()"><label for="Lucknow">Lucknow</label>
        </td>
    </tr>
    <tr>
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Mumbai" value="MU" onclick="submitt()"><label for="Mumbai">Mumbai</label> 
        </td>
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Noida" value="NO" onclick="submitt()"><label for="Noida">Noida</label>
        </td>
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Patna" value="PA" onclick="submitt()"><label for="Patna">Patna</label>
        </td>
    </tr>
    <tr>
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Pune" value="PU" onclick="submitt()"><label for="Pune">Pune</label> 
        </td>
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Srinagar" value="SR" onclick="submitt()"><label for="Srinagar">Srinagar</label>
        </td>
        <td style="padding: 8px 40px;">
        <input type="radio" name="citySearch" id="Vaishali" value="TH" onclick="submitt()"><label for="Vaishali">Vaishali</label>
        </td>
    </tr>
            
        </table>
        </form>
        </div>';
    $cityselect='function submitt(){
        let y;
        document.getElementById("table1").innerHTML="";
        if(document.getElementById("Agra").checked || document.getElementById("Agra").value == "AG") {
            y="Agra";
        }if(document.getElementById("Ahmedabad").checked) {
            y="Ahmedabad";
        }if(document.getElementById("Bangalore").checked) {
            y="Bangalore";
        }if(document.getElementById("Chandigarh").checked) {
            y="Chandigarh";
        }if(document.getElementById("Chennai").checked) {
            y="Chennai";
        }if(document.getElementById("Delhi").checked) {
            y="Delhi";
        }if(document.getElementById("Dharwad").checked) {
            y="Dharwad";
        }if(document.getElementById("Gurgaon").checked) {
            y="Gurgaon";
        }if(document.getElementById("Hyderabad").checked) {
            y="Hyderabad";
        }if(document.getElementById("Hubbali").checked) {
            y="Hubbali";
        }if(document.getElementById("Jaipur").checked) {
            y="Jaipur";
        }if(document.getElementById("Jammu").checked) {
            y="Jammu";
        }if(document.getElementById("Kolkata").checked) {
            y="Kolkata";
        }if(document.getElementById("Kota").checked) {
            y="Kota";
        }if(document.getElementById("Lucknow").checked) {
            y="Lucknow";
        }if(document.getElementById("Mumbai").checked) {
            y="Mumbai";
        }if(document.getElementById("Noida").checked) {
            y="Noida";
        }if(document.getElementById("Patna").checked) {
            y="Patna";
        }if(document.getElementById("Pune").checked) {
            y="Pune";
        }if(document.getElementById("Srinagar").checked) {
            y="Srinagar";
        }if(document.getElementById("Vaishali").checked) {
            y="Vaishali";
        }';
    
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
if (isset($_SERVER["HTTP_REFERER"]) and isset($_POST['email']) and !strpos($_SERVER["HTTP_REFERER"], "labourermain.php") and !strpos($_SERVER["HTTP_REFERER"], "labourerprofile.php")){
      if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $_SESSION["email"] =test_input($_SERVER["REQUEST_METHOD"] == "POST" ? $_POST["email"] : $_GET["email"]);
        $_SESSION["password"] = test_input($_SERVER["REQUEST_METHOD"] == "POST" ? $_POST["password"] : $_GET["password"]);
      }
    
    //common for both signup and login:verification
    $sql2= "SELECT * FROM labourers";
    $sql3= "select * from contractors";
    $result2=$conn->query($sql2);
    $result3=$conn->query($sql3);
    $_SESSION["name"]="";
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            //search in labourer table
            if ($row["Email"]==$_SESSION["email"]){
                $loginpw=$row["Password"];
                $_SESSION["select"]="labourer";
                $_SESSION["name"]=$row["LabourerName"];
                $_SESSION["Id"]=$row["Labourer_Id"];
                $_SESSION["city"]=$row["City"];
                $_SESSION["phone_no"]=$row["Phone_no"];
                $_SESSION["address"]=$row["Address"];
            }
        }
    }
    if ($result3->num_rows > 0) {

        //search in contractor table
        while($row = $result3->fetch_assoc()) {
            if ($row["Email"]==$_SESSION["email"]){
                $_SESSION["select"]="contractor";
                $loginpw=$row["Password"];
                $_SESSION["name"]=$row["ContractorName"];
                $_SESSION["Id"]=$row["Contractor_Id"];
                $_SESSION["city"]=$row["City"];
                $_SESSION["phone_no"]=$row["Phone_no"];
                $_SESSION["address"]=$row["Address"];


            }
        }
    }
}

if (isset($_SERVER["HTTP_REFERER"]) and strpos($_SERVER["HTTP_REFERER"], "labourermain.php") and isset($_SESSION["Id"])){
    if (isset($_POST["signout"])){
        session_destroy();
    
        echo '<script>window.location.replace("labourerlogin.php");</script>';
    }
    if (isset($_POST["customerid"])){
        $dupsql="SELECT * FROM labourersrequests";
        $tab=$conn->query($dupsql);
        $matching=0;
        while( $rowiseread=$tab->fetch_assoc()){
            if($rowiseread['Labourer_Id']==$_SESSION["Id"] && $rowiseread["Customer_Id"]==$_POST["customerid"]){
                $matching=1;
            }
        }
        if ($matching==0){
            $sql="INSERT into labourersrequests (Customer_Id,Labourer_Id) VALUES(".$_POST["customerid"].",".$_SESSION["Id"].")";
            if ($conn->query($sql)){
                echo '<script>alert("Notification successfully sent to customer!");</script>';
            }
            else{
                echo '<script>alert("Unexpected error");</script>';
            }
           }
           else{
                echo '<script>alert("Notification already successfully sent to customer!");</script>';
           }
        }
        echo '<p style="font-size:45px; margin-left: 70px; margin-top: 80px; margin-left:60px; color:white; background-color: #e69c2d; border-radius: 15px; height: 1.5cm; width: 12cm; padding-left: 20px; padding-top: 5px; box-shadow: black 0px 22px 70px 4px; font-family: Garamond, serif; padding-bottom: -10px;">Welcome ' . $_SESSION["name"].'</p>';
        echo '<p style="font-size:40px; margin-left: 70px; font-family:Monospace; color:#25c1d5;">Find the best jobs </p>';
        
        echo '<p style="font-size:20px; margin-left: 70px; margin-top: -20px; color: white;">Browse jobs posted on Karym, find the work that you love to do.</p>';
        $_SESSION["Plumber"]=$_SESSION["Electrician"]= $_SESSION["Driver"]=$_SESSION["Maid"]= $_SESSION["Babysitter"]=$_SESSION["Painter"]= $_SESSION["CleaningAndPestcontrol"]=$_SESSION["Carpenter"]=0;
        //printing results of available work
        $sql4="select * from labourers where Labourer_Id=".$_SESSION["Id"];
        $sql5="select * from contractors where Contractor_Id=".$_SESSION["Id"];
        $result4=$conn->query($sql4);
        $result5=$conn->query($sql5);
        // $_SESSION['select']=$select;
        if ($result4->num_rows ==1 || $result5->num_rows ==1){
            if ($result4->num_rows ==1){
                $row = $result4->fetch_assoc();}
            else{
                $row = $result5->fetch_assoc();
            }
            if ($row["Plumber"]==1){
                $_SESSION["Plumber"]=1;
            }
            if ($row["Electrician"]==1){
                $_SESSION["Electrician"]=1;
            }if ($row["Driver"]==1){
                $_SESSION["Driver"]=1;
            }if ($row["Carpenter"]==1){
                $_SESSION["Carpenter"]=1;
            }if ($row["CleaningAndPestcontrol"]==1){
                $_SESSION["CleaningAndPestcontrol"]=1;
            }if ($row["Painter"]==1){
                $_SESSION["Painter"]=1;
            }if ($row["Maid"]==1){
                $_SESSION["Maid"]=1;
            }if ($row["Babysitter"]==1){
                $_SESSION["Babysitter"]=1;
            }
        }
        else{
            echo "Error";
        }
    
        $sql = "SELECT * FROM customers, workrequests where customers.Customer_Id=workrequests.Customer_Id and ((workrequests.Plumber=1 and workrequests.Plumber=".$_SESSION["Plumber"].") or (workrequests.Electrician=1 and workrequests.Electrician=".$_SESSION["Electrician"].") or(workrequests.Driver=1 and workrequests.Driver=".$_SESSION["Driver"].") or(workrequests.CleaningAndPestcontrol=1 and workrequests.CleaningAndPestcontrol=".$_SESSION["CleaningAndPestcontrol"].") or(workrequests.Painter=1 and workrequests.Painter=".$_SESSION["Painter"].") or(workrequests.Babysitter=1 and workrequests.Babysitter=".$_SESSION["Babysitter"].") or(workrequests.Maid=1 and workrequests.Maid=".$_SESSION["Maid"].") or(workrequests.Carpenter=1 and workrequests.Carpenter=".$_SESSION["Carpenter"]."))";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        
        //javascript to push row into array, need to use filter later without server
        echo "<script>const workrequests=[];</script>";
        while ($row= $result->fetch_assoc()){
            echo "<script>workrequests.push(['".$row['CustomerName']."','".$row['Address']."','".$row["Work_request"]."','".$row["City"]."',".$row["Customer_Id"]."]);</script>";
        }   
        }
        else {
        echo '<script>alert("No jobs available");</script>';
        }
        
        //himanshu radio
        echo $cities.'<table id="table1" align="right" style= "margin-top: -16.6cm; margin-right:0.1px; margin-left: 50%; color:white;"></table>
                    <script>
                    
                    if ("'.$_SESSION["city"].'"!=""){
                    let i=0;
                    for (let x of workrequests){   
                        if (x[3]=="'.$_SESSION["city"].'"){
                            document.getElementById("table1").innerHTML+=\'<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">\' +x[0]+ \'<span style="float:right; font-size: 18px; font-family: courier;">\'+x[3]+ \'</span><br><span style="font-size: 18px;">\'+ x[1]+ \'<br></span><span style="font-size: 15px; font-family: Arial;">\'+ x[2]+ \'</span></div>  <form method="post" action="labourermain.php" ><input type="hidden" name="customerid" id="work\'+i+\'"><input type="submit" value="Contact me" class="button"></form></td></tr>\';
                              document.getElementById("work"+i).value=x[4];
                           }
                        i+=1;
                        
                    }
                    
                }
    
                else{
                    let i=0;
                    for (let x of workrequests){   
                        document.getElementById("table1").innerHTML+=\'<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">\' +x[0]+ \'<span style="float:right; font-size: 18px; font-family: courier;">\'+x[3]+ \'</span><br><span style="font-size: 18px;">\'+ x[1]+ \'<br></span><span style="font-size: 15px; font-family: Arial;">\'+ x[2]+ \'</span></div>  <form method="post" action="labourermain.php" ><input type="hidden" name="customerid" id="work\'+i+\'"><input type="submit" value="Contact me" class="button"></form></td></tr>\';
                        document.getElementById("work"+i).value=x[4];
                        i+=1;  
                    }
                }'
                    .$cityselect.
                        'let i=0;
                        for (let x of workrequests){
                
                            if (x[3]==y){
                                document.getElementById("table1").innerHTML+=\'<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">\' +x[0]+ \'<span style="float:right; font-size: 18px; font-family: courier;">\'+x[3]+ \'</span><br><span style="font-size: 18px;">\'+ x[1]+ \'<br></span><span style="font-size: 15px; font-family: Arial;">\'+ x[2]+ \'</span></div>  <form method="post" action="labourermain.php" ><input type="hidden" name="customerid" id="work\'+i+\'"><input type="submit" value="Contact me" class="button"></form></td></tr>\';
                              document.getElementById("work"+i).value=x[4];
                
                               }
                               i+=1;
                        }
                }
                     </script>
                     <br><br>';
                    
    
        
        $conn->close();
                
    
    
}


else if(isset($_SERVER["HTTP_REFERER"]) and strpos($_SERVER["HTTP_REFERER"], "labourerprofile.php") and isset($_SESSION["Id"])){
    if (isset($_POST["name"])){
    $ptnam=$_POST['name'];
    $pttel=$_POST['phone'];
    $_SESSION["city"]=$ptcity=$_POST['city'];
    $ptadd=$_POST['address'];
    $ptelec=isset($_POST['Electrician'])?1:0;
    $ptplum=isset($_POST['Plumber'])?1:0;
    $ptdri=isset($_POST['Driver'])?1:0;
    $ptcarp=isset($_POST['Carpenter'])?1:0;
    $ptclean=isset($_POST['Cleaning'])?1:0;
    $ptmaid=isset($_POST['Maid'])?1:0;
    $ptpainter=isset($_POST['Painter'])?1:0;
    $ptbs=isset($_POST['Babysitter'])?1:0;
    $ptus=isset($_POST['Unskilled'])?1:0;

    if($_SESSION['select']=="labourer")
        $updsql="UPDATE labourers SET Address='".$ptadd."',Phone_no=".$pttel." ,LabourerName='".$ptnam."', City='".$ptcity."', Electrician=".$ptelec.", Plumber= ".$ptplum."  ,Driver=".$ptdri." ,Carpenter= ".$ptcarp."  ,CleaningAndPestcontrol= ".$ptclean."  ,Maid= ".$ptmaid." , Painter=".$ptpainter ." ,Babysitter=". $ptbs ."  ,Unskilled=". $ptus." where Labourer_Id=".$_SESSION['Id'];

    if($_SESSION['select']=="contractor")
        $updsql="UPDATE contractors SET Address='".$ptadd."',Phone_no=".$pttel." ,ContractorName='".$ptnam."', City='".$ptcity."', Electrician=".$ptelec.", Plumber= ".$ptplum."  ,Driver=".$ptdri." ,Carpenter= ".$ptcarp."  ,CleaningAndPestcontrol= ".$ptclean."  ,Maid= ".$ptmaid." , Painter=".$ptpainter ." ,Babysitter=". $ptbs ."  ,Unskilled=". $ptus." where Contractor_Id=".$_SESSION['Id'];
    

    if ($conn->query($updsql)){
        echo '<script>alert("Successfully updated your profile");</script>';
    }
}
echo '<p style="font-size:45px; margin-left: 70px; margin-top: 80px; margin-left: 60px; color:white; background-color: #e69c2d; border-radius: 15px; height: 1.5cm; width: 12cm; padding-left: 20px; padding-top: 5px; box-shadow: black 0px 22px 70px 4px; font-family: Garamond, serif; padding-bottom: -10px;">Welcome ' . $_SESSION["name"].'</p>';
    echo '<p style="font-size:40px; margin-left: 70px; font-family:Monospace; color:#25c1d5;">Find the best jobs </p>';
    echo '<p style="font-size:20px; margin-left: 70px; margin-top: -20px;">Browse jobs posted on Karym, find the work that you love to do.</p>';
    $_SESSION["Plumber"]=$_SESSION["Electrician"]= $_SESSION["Driver"]=$_SESSION["Maid"]= $_SESSION["Babysitter"]=$_SESSION["Painter"]= $_SESSION["CleaningAndPestcontrol"]=$_SESSION["Carpenter"]=0;
    //printing results of available work
    $sql4="select * from labourers where Labourer_Id=".$_SESSION["Id"];
    $sql5="select * from contractors where Contractor_Id=".$_SESSION["Id"];
    $result4=$conn->query($sql4);
    $result5=$conn->query($sql5);
    // $_SESSION['select']=$select;
    if ($result4->num_rows ==1 || $result5->num_rows ==1){
        if ($result4->num_rows ==1){
            $row = $result4->fetch_assoc();}
        else{
            $row = $result5->fetch_assoc();
        }
        if ($row["Plumber"]==1){
            $_SESSION["Plumber"]=1;
        }
        if ($row["Electrician"]==1){
            $_SESSION["Electrician"]=1;
        }if ($row["Driver"]==1){
            $_SESSION["Driver"]=1;
        }if ($row["Carpenter"]==1){
            $_SESSION["Carpenter"]=1;
        }if ($row["CleaningAndPestcontrol"]==1){
            $_SESSION["CleaningAndPestcontrol"]=1;
        }if ($row["Painter"]==1){
            $_SESSION["Painter"]=1;
        }if ($row["Maid"]==1){
            $_SESSION["Maid"]=1;
        }if ($row["Babysitter"]==1){
            $_SESSION["Babysitter"]=1;
        }
    }
    else{
        echo "Error";
    }

    $sql = "SELECT * FROM customers, workrequests where customers.Customer_Id=workrequests.Customer_Id and ((workrequests.Plumber=1 and workrequests.Plumber=".$_SESSION["Plumber"].") or (workrequests.Electrician=1 and workrequests.Electrician=".$_SESSION["Electrician"].") or(workrequests.Driver=1 and workrequests.Driver=".$_SESSION["Driver"].") or(workrequests.CleaningAndPestcontrol=1 and workrequests.CleaningAndPestcontrol=".$_SESSION["CleaningAndPestcontrol"].") or(workrequests.Painter=1 and workrequests.Painter=".$_SESSION["Painter"].") or(workrequests.Babysitter=1 and workrequests.Babysitter=".$_SESSION["Babysitter"].") or(workrequests.Maid=1 and workrequests.Maid=".$_SESSION["Maid"].") or(workrequests.Carpenter=1 and workrequests.Carpenter=".$_SESSION["Carpenter"]."))";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    
    //javascript to push row into array, need to use filter later without server
    echo "<script>const workrequests=[];</script>";
    while ($row= $result->fetch_assoc()){
        echo "<script>workrequests.push(['".$row['CustomerName']."','".$row['Address']."','".$row["Work_request"]."','".$row["City"]."',".$row["Customer_Id"]."]);</script>";
    }   
    }
    else {
    echo '<script>alert("No jobs available");</script>';
    }
    
    //himanshu radio
    echo $cities.'<table id="table1" align="right" style= "margin-top: -16.6cm; margin-right:0.1px; margin-left: 50%; color:white;"></table>
                <script>
                
                if ("'.$_SESSION["city"].'"!=""){
                let i=0;
                for (let x of workrequests){   
                    if (x[3]=="'.$_SESSION["city"].'"){
                        document.getElementById("table1").innerHTML+=\'<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">\' +x[0]+ \'<span style="float:right; font-size: 18px; font-family: courier;">\'+x[3]+ \'</span><br><span style="font-size: 18px;">\'+ x[1]+ \'<br></span><span style="font-size: 15px; font-family: Arial;">\'+ x[2]+ \'</span></div>  <form method="post" action="labourermain.php" ><input type="hidden" name="customerid" id="work\'+i+\'"><input type="submit" value="Contact me" class="button"></form></td></tr>\';
                          document.getElementById("work"+i).value=x[4];
                       }
                    i+=1;
                    
                }
                
            }

            else{
                let i=0;
                for (let x of workrequests){   
                    document.getElementById("table1").innerHTML+=\'<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">\' +x[0]+ \'<span style="float:right; font-size: 18px; font-family: courier;">\'+x[3]+ \'</span><br><span style="font-size: 18px;">\'+ x[1]+ \'<br></span><span style="font-size: 15px; font-family: Arial;">\'+ x[2]+ \'</span></div>  <form method="post" action="labourermain.php" ><input type="hidden" name="customerid" id="work\'+i+\'"><input type="submit" value="Contact me" class="button"></form></td></tr>\';
                    document.getElementById("work"+i).value=x[4];
                    i+=1;  
                }
            }'
                .$cityselect.
                    'let i=0;
                    for (let x of workrequests){
            
                        if (x[3]==y){
                            document.getElementById("table1").innerHTML+=\'<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">\' +x[0]+ \'<span style="float:right; font-size: 18px; font-family: courier;">\'+x[3]+ \'</span><br><span style="font-size: 18px;">\'+ x[1]+ \'<br></span><span style="font-size: 15px; font-family: Arial;">\'+ x[2]+ \'</span></div>  <form method="post" action="labourermain.php" ><input type="hidden" name="customerid" id="work\'+i+\'"><input type="submit" value="Contact me" class="button"></form></td></tr>\';
                          document.getElementById("work"+i).value=x[4];
            
                           }
                           i+=1;
                    }
            }
                 </script>
                 <br><br>';
                

    
    $conn->close();
            
}


               //login redirect + welcome message


else if (isset($_SERVER["HTTP_REFERER"]) and strpos($_SERVER["HTTP_REFERER"], "labourerlogin.php") and (isset($_POST["email"]) or isset($_SESSION["email"]))){
    
    if ($_SESSION["name"]==""){
        $_SESSION['message']="invalid";
        // header("Location: labourerlogin.php");
        echo '<script>window.location.href="labourerlogin.php";</script>';
    }
    else{
        echo $_SESSION["Id"];
        if (((isset($loginpw) and $_SESSION["password"]==$loginpw)) or (isset($_SESSION["email"])) and !isset($_POST["email"])){
            echo '<p style="font-size:45px; margin-left: 70px; margin-top: 80px; margin-left:60px; color:white; background-color: #e69c2d; border-radius: 15px; height: 1.5cm; width: 12cm; padding-left: 20px; padding-top: 5px; box-shadow: black 0px 22px 70px 4px; font-family: Garamond, serif; padding-bottom: -10px;">Welcome ' . $_SESSION["name"].'</p>';
            echo '<p style="font-size:40px; margin-left: 70px; font-family:Monospace; color:#25c1d5;">Find the best jobs </p>';
            echo '<p style="font-size:20px; margin-left: 70px; margin-top: -20px;">Browse jobs posted on Karym, find the work that you love to do.</p>';
        }
        else{
            $_SESSION['message']="invalid";
            echo '<script>window.location.href="labourerlogin.php" </script>';
        }
}

    
    //post login
    $_SESSION["Plumber"]=$_SESSION["Electrician"]= $_SESSION["Driver"]=$_SESSION["Maid"]= $_SESSION["Babysitter"]=$_SESSION["Painter"]= $_SESSION["CleaningAndPestcontrol"]=$_SESSION["Carpenter"]=0;
    //printing results of available work
    $sql4="select * from labourers where Labourer_Id=".$_SESSION["Id"];
    $sql5="select * from contractors where Contractor_Id=".$_SESSION["Id"];
    $result4=$conn->query($sql4);
    $result5=$conn->query($sql5);
    // $_SESSION['select']=$select;
    if ($result4->num_rows ==1 || $result5->num_rows ==1){
        if ($result4->num_rows ==1){
            $row = $result4->fetch_assoc();}
        else{
            $row = $result5->fetch_assoc();
        }
        if ($row["Plumber"]==1){
            $_SESSION["Plumber"]=1;
        }
        if ($row["Electrician"]==1){
            $_SESSION["Electrician"]=1;
        }if ($row["Driver"]==1){
            $_SESSION["Driver"]=1;
        }if ($row["Carpenter"]==1){
            $_SESSION["Carpenter"]=1;
        }if ($row["CleaningAndPestcontrol"]==1){
            $_SESSION["CleaningAndPestcontrol"]=1;
        }if ($row["Painter"]==1){
            $_SESSION["Painter"]=1;
        }if ($row["Maid"]==1){
            $_SESSION["Maid"]=1;
        }if ($row["Babysitter"]==1){
            $_SESSION["Babysitter"]=1;
        }
    }
    else{
        echo "Error";
    }

    $sql = "SELECT * FROM customers, workrequests where customers.Customer_Id=workrequests.Customer_Id and ((workrequests.Plumber=1 and workrequests.Plumber=".$_SESSION["Plumber"].") or (workrequests.Electrician=1 and workrequests.Electrician=".$_SESSION["Electrician"].") or(workrequests.Driver=1 and workrequests.Driver=".$_SESSION["Driver"].") or(workrequests.CleaningAndPestcontrol=1 and workrequests.CleaningAndPestcontrol=".$_SESSION["CleaningAndPestcontrol"].") or(workrequests.Painter=1 and workrequests.Painter=".$_SESSION["Painter"].") or(workrequests.Babysitter=1 and workrequests.Babysitter=".$_SESSION["Babysitter"].") or(workrequests.Maid=1 and workrequests.Maid=".$_SESSION["Maid"].") or(workrequests.Carpenter=1 and workrequests.Carpenter=".$_SESSION["Carpenter"]."))";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    
    //javascript to push row into array, need to use filter later without server
    echo "<script>const workrequests=[];</script>";
    while ($row= $result->fetch_assoc()){
        echo "<script>workrequests.push(['".$row['CustomerName']."','".$row['Address']."','".$row["Work_request"]."','".$row["City"]."',".$row["Customer_Id"]."]);</script>";
    }   
    }
    else {
    echo '<script>alert("No jobs available");</script>';
    }
    
    //himanshu radio
    echo $cities.'<table id="table1" align="right" style= "margin-top: -16.6cm; margin-right:0.1px; margin-left: 50%; color:white;"></table>
                <script>
                
                if ("'.$_SESSION["city"].'"!=""){
                let i=0;
                for (let x of workrequests){   
                    if (x[3]=="'.$_SESSION["city"].'"){
                        document.getElementById("table1").innerHTML+=\'<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">\' +x[0]+ \'<span style="float:right; font-size: 18px; font-family: courier;">\'+x[3]+ \'</span><br><span style="font-size: 18px;">\'+ x[1]+ \'<br></span><span style="font-size: 15px; font-family: Arial;">\'+ x[2]+ \'</span></div>  <form method="post" action="labourermain.php" ><input type="hidden" name="customerid" id="work\'+i+\'"><input type="submit" value="Contact me" class="button"></form></td></tr>\';
                          document.getElementById("work"+i).value=x[4];
                       }
                    i+=1;
                    
                }
                
            }

            else{
                let i=0;
                for (let x of workrequests){   
                    document.getElementById("table1").innerHTML+=\'<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">\' +x[0]+ \'<span style="float:right; font-size: 18px; font-family: courier;">\'+x[3]+ \'</span><br><span style="font-size: 18px;">\'+ x[1]+ \'<br></span><span style="font-size: 15px; font-family: Arial;">\'+ x[2]+ \'</span></div>  <form method="post" action="labourermain.php" ><input type="hidden" name="customerid" id="work\'+i+\'"><input type="submit" value="Contact me" class="button"></form></td></tr>\';
                    document.getElementById("work"+i).value=x[4];
                    i+=1;  
                }
            }'
                .$cityselect.
                    'let i=0;
                    for (let x of workrequests){
            
                        if (x[3]==y){
                            document.getElementById("table1").innerHTML+=\'<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">\' +x[0]+ \'<span style="float:right; font-size: 18px; font-family: courier;">\'+x[3]+ \'</span><br><span style="font-size: 18px;">\'+ x[1]+ \'<br></span><span style="font-size: 15px; font-family: Arial;">\'+ x[2]+ \'</span></div>  <form method="post" action="labourermain.php" ><input type="hidden" name="customerid" id="work\'+i+\'"><input type="submit" value="Contact me" class="button"></form></td></tr>\';
                          document.getElementById("work"+i).value=x[4];
            
                           }
                           i+=1;
                    }
            }
                 </script>
                 <br><br>';
                

    
    $conn->close();
    
}

else if (isset($_SERVER["HTTP_REFERER"]) and strpos($_SERVER["HTTP_REFERER"], "labourersignup.php") and (isset($_POST["email"]) or isset($_SESSION["email"]))){
    if ($_SESSION["name"]!="" && (isset($_SESSION["v"]))){

        $_SESSION['message']="invalid";
        unset($_SESSION["v"]);
       header("Location: labourersignup.php");
        
   }
   else{
        //insert new data
        if(isset($_SESSION["v"])){
        $_SESSION["name"]=$_POST["name"];
        $phone_no=$_POST["phone_no"];
        $select=$_POST["select"];
        $_SESSION['select']=$select;
        $_SESSION['phone_no']=$phone_no;
        $_SESSION["address"]="";

        if ($select=="labourer"){
            $sql="SELECT MAX(Labourer_Id) from labourers";
            $result=$conn->query($sql);
            $row= $result->fetch_assoc();
            $Id=$row["MAX(Labourer_Id)"]+1;
            $_SESSION['Id']=$Id;
            $sql="INSERT INTO labourers (Labourer_Id,LabourerName,Phone_no,Email,Password) values(".$Id.",'".$_SESSION['name']."',".$phone_no.",'".$_SESSION['email']."','".$_SESSION['password']."')";
            if ($conn->query($sql)){
                echo '<script> alert("Successfully Signed Up!")</script>';
            }else{
                die("Connection failed: " . $conn->connect_error);
            }
        }
        if ($select=="contractor"){
            $sql="SELECT MAX(Contractor_Id) from contractors";
            $result=$conn->query($sql);
            $row= $result->fetch_assoc();
            $Id=$row["MAX(Contractor_Id)"]+1;
            $_SESSION['Id']=$Id;
            $sql="INSERT INTO contractors (Contractor_Id,ContractorName,Phone_no,Email,Password) values(".$Id.",'".$_SESSION['name']."',".$phone_no.",'".$_SESSION['email']."','".$_SESSION['password']."')";
            if ($conn->query($sql)){
                echo '<script> alert("Successfully Signed Up!")</script>';
            }else{
                die("Connection failed: " . $conn->connect_error);
            }
        } 
        unset($_SESSION["v"]);

    }

    echo '<p style="font-size:45px; margin-left: 70px; margin-top: 80px; margin-left: 60px; color:white; background-color: #e69c2d; border-radius: 15px; height: 1.5cm; width: 12cm; padding-left: 20px; padding-top: 5px; box-shadow: black 0px 22px 70px 4px; font-family: Garamond, serif; padding-bottom: -10px;">Welcome ' . $_SESSION["name"].'</p>';
        echo '<p style="font-size:40px; margin-left: 70px; font-family:Monospace; color:#25c1d5;">Find the best jobs </p>';
        echo '<p style="font-size:20px; margin-left: 70px; margin-top: -20px;">Browse jobs posted on Karym, find the work that you love to do.</p>';
    
   //fill profile page to get customised information
   $sql = "SELECT * FROM customers, workrequests where customers.Customer_Id=workrequests.Customer_Id";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
    
    //javascript to push row into array, need to use filter later without server
    echo "<script>const workrequests=[]; i=0;</script>";
    while ($row= $result->fetch_assoc()){
        echo "<script> workrequests.push(['".$row['CustomerName']."','".$row['Address']."','".$row["Work_request"]."','".$row["City"]."']);</script>";
    }   
    }
    else {
    echo '<script>alert("No jobs available");</script>';
    }
   echo $cities.'<table id="table1" align="right" style= "margin-top: -16.6cm; margin-right:0.1px; margin-left: 50%; color:white;"></table>
                <script>
                 i=0;
                for (let x of workrequests){   
                    
                    document.getElementById("table1").innerHTML+=\'<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">\' +x[0]+ \'<span style="float:right; font-size: 18px; font-family: courier;">\'+x[3]+ \'</span><br><span style="font-size: 18px;">\'+ x[1]+ \'<br></span><span style="font-size: 15px; font-family: Arial;">\'+ x[2]+ \'</span></div>  <form method="post" action="labourermain.php" ><input type="hidden" name="customerid" id="work\'+i+\'"><input type="submit" value="Contact me" class="button"></form></td></tr>\';
                    document.getElementById("work"+i).value=x[4];
                    i+=1;
                }
                '
                .$cityselect.
                    '
                    let i=0;
                    for (let x of workrequests){
            
                        if (x[3]==y){
                            document.getElementById("table1").innerHTML+=\'<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">\' +x[0]+ \'<span style="float:right; font-size: 18px; font-family: courier;">\'+x[3]+ \'</span><br><span style="font-size: 18px;">\'+ x[1]+ \'<br></span><span style="font-size: 15px; font-family: Arial;">\'+ x[2]+ \'</span></div>  <form method="post" action="labourermain.php" ><input type="hidden" name="customerid" id="work\'+i+\'"><input type="submit" value="Contact me" class="button"></form></td></tr>\';
                          document.getElementById("work"+i).value=x[4];
                            
                           }
                           i+=1;
                    }
            }
                 </script>
                 <br><br>';

    }
    $conn->close();
   }

else{


    
    echo '<p style="font-size:40px; margin-left: 70px; font-family:Monospace; color:#25c1d5;">Find the best jobs </p>';
    echo '<p style="font-size:20px; margin-left: 70px; margin-top: -20px;">Browse jobs posted on Karym, find the work that you love to do.</p>';

//fill profile page to get customised information
$sql = "SELECT * FROM customers, workrequests where customers.Customer_Id=workrequests.Customer_Id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
//javascript to push row into array, need to use filter later without server
echo "<script>const workrequests=[]; i=0;</script>";
while ($row= $result->fetch_assoc()){
    echo "<script> workrequests.push(['".$row['CustomerName']."','".$row['Address']."','".$row["Work_request"]."','".$row["City"]."']);</script>";
}   

}
else {
echo '<script>alert("No jobs available");</script>';
}
echo $cities.'<table id="table1" align="right" style= "margin-top: -16.6cm; margin-right:0.1px; margin-left: 50%; color:white;"></table>
       
            <script>
            function loginredir(){
                var val = confirm("Do you want to login/Signup?");
                if (val == true) {
                    window.location.href="labourerlogin.php";
                } 
            }
            for (let x of workrequests){   
                document.getElementById("table1").innerHTML+=\'<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">\' +x[0]+ \'<span style="float:right; font-size: 18px; font-family: courier;">\'+x[3]+ \'</span><br><span style="font-size: 18px;">\'+ x[1]+ \'<br></span><span style="font-size: 15px; font-family: Arial;">\'+ x[2]+ \'</span></div> <button onclick="loginredir()" class="button">Contact me</button> </td></tr>\';
    
            }
            '
            .$cityselect.
                '
                for (let x of workrequests){
        
                    if (x[3]==y){
                        document.getElementById("table1").innerHTML+=\'<tr><td class="box-cust-req"><img src="../img/cust-icon.png" style = "margin-left: 10px; margin-top: -3px;" width="60px"><img src="../img/cust-location1.png" style = "margin-top: -10px; margin-right: 10px;" width="40px" align="right"><div style = "margin-left:87px; margin-top:-60px;">\' +x[0]+ \'<span style="float:right; font-size: 18px; font-family: courier;">\'+x[3]+ \'</span><br><span style="font-size: 18px;">\'+ x[1]+ \'<br></span><span style="font-size: 15px; font-family: Arial;">\'+ x[2]+ \'</span></div> <button onclick="loginredir()" class="button">Contact me</button> </td></tr>\';

                       }
                
                }
        }
             </script>
             <br><br>';
        $conn->close();

}

    
    
?>
</body>
</html>
<!-- cellspacing="80px -->