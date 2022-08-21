<?php   
session_start();  
if(!isset($_SESSION["sess_ename"])){  
    header("location:emplogin.php");  
} else {
?>
<!doctype html>	
<html>  
<head>  
<title>Welcome Employee</title>  
<style>
    body{  
    background-image: url("enter.jpg");      
       margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-size: 100%;
    background-attachment: fixed; 
    color: #261A15;
    font-family: 'Yantramanav', sans-serif;;  
    font-size: 100%;  
     
        }  
            h1 {  
   color: red;}
        h3 {  
    color: rgb(44,62,80);  
    font-family: verdana;  
    font-size: 100%;  
}
         a {
    color: rgb(102, 51, 153);
}
fieldset {
  background-color: black;
  color: white;
  opacity: 0.8;
}
fieldset {
  background-color: black;
  color: white;
  opacity: 0.8;
}
</style>
<link rel="stylesheet" type="text/css" href="emp.css">
</head>  
<body>  
<center><h1><u> AIRLINE RESERVATION SYSTEM </u></h1></center>
<br><h2>Welcome</h2>
<br /><div class="right"><button class="button">
	<a href="adminhome.php"  style="color:black">Back</a></button>

</div><br><br><br>
<form action="" method="POST">
<legend>  
    <fieldset>
	<center>
	<br>
	<h2>Enter Flight Details: </h2><br>
<b> Flight id: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b><input type="text" name="fid" required><br><br>

<b> Plane name: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b><select name="planename" required>
  					<option value="AirIndia">AirIndia</option>
  					<option value="emirates">emirates</option>
  					<option value="indigo">indigo</option>
  					<option value="SpiceJet">SpiceJet</option>
                    <option value="Kingfisher">Kingfisher</option>
				</select><br><br>
<b> Pickup:  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b><input type="text" name="from" required><br><br>
<b> Destination:   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b><input type="text" name="to" required><br><br>
<b> Departure Time:   &nbsp; &nbsp; &nbsp;</b><input type="text" name="deptime" required><br><br>
<b> Arrival Time:   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b><input type="text" name="arrtime" required><br><br>
<b> Fare:  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b><input type="number" name="fare" required><br><br>
<b> Departure Date: &nbsp; &nbsp; &nbsp;</b><input type="text" name="depdate" required><br><br>
&emsp; &emsp; &emsp; &emsp; &emsp;<input type="submit" value="Insert flight details" name="insert" /><br><br>
</form>

	</fieldset>  
</legend>
</form>
</body>  
</html>

<?php
if(isset($_POST["insert"])){  
if(!empty($_POST['fid']) && !empty($_POST['planename']) && !empty($_POST['from']) && !empty($_POST['to']) && !empty($_POST['deptime']) && !empty($_POST['fare']) && !empty($_POST['arrtime'])&& !empty($_POST['depdate'])) {  
    $fid=$_POST['fid'];
	//$seats=$_POST['seats'];
    $planename=$_POST['planename'];
	$from=$_POST['from'];
	$to=$_POST['to'];
	$deptime=$_POST['deptime'];
    $arrtime=$_POST['arrtime'];  
	$fare=$_POST['fare'];
    $depdate=$_POST['depdate'];
  $con=@mysqli_connect('localhost','root','','airline') or die(mysql_error());  
  
$sql="SELECT * FROM aircraft WHERE Dep_Time='$deptime' AND Flight_ID='$planename'";
    $query=mysqli_query($con,$sql);  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
   // $sql="INSERT INTO custlogin(username,idproof,age,email,contactnum,password) VALUES('$user','$id','$age','$email','$cnum','$pass')";  
  $sql="INSERT INTO aircraft (Flight_ID,Dep_Time,Arr_Time,Plane_Name,Src,Dstn,Fare,Dep_Date) VALUES('$fid','$deptime','$arrtime','$planename','$from','$to','$fare','$depdate')";  
	
    $result=mysqli_query($con,$sql);  
        //$lastInsertID =  mysqli_insert_id($con);
		if($result){  
    echo " Successfully Inserted..  ";  
	} else {  
    echo "Failure!";  
    }  
  
    } else {  
    echo "That entry(or Pid) already exists! Please try again with another.";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  

}
?>