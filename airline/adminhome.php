<?php   
session_start();  
if(!isset($_SESSION["sess_ename"])){  
    header("location:adminlogin.php");  
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
   color: black;}
        h3 {  
    color: rgb(44,62,80);  
    font-family: verdana;  
    font-size: 120%;  
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

<div class="right"><button class="button">
	<a href="adminlogin.php"  style="color:black">Logout</a></button>
</div><br><br><br>
</form>
<form action="" method="POST">
<legend>  
    <fieldset>
<form action="enter.php" method="POST"> 
	<div class="right">
	<input type="button" value="Add Flight" onclick="location.href='enter.php';" /><br><br>
</div><br>
<form action="viewflights.php" method="POST"> 
	<div class="right">
	<input type="button" value="View Flights" onclick="location.href='viewflights.php';" /><br><br>
</div><br>
<div class="right"><button class="button">
	<a href="Updatetimings.php"  style="color:black">Update Timings</a></button>
</div><br><br><br>
<form action="view.php" method="POST"> 
	<div class="right">
	<input type="button" value="Bookings" onclick="location.href='view.php';" /><br><br>
</div><br>
    </fieldset>  
</legend>
</form>
<?php
}
?>
</body>  
</html>
<!doctype html>	
