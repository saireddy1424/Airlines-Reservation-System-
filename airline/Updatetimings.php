<!doctype html>

<html>
<head>
<title>Welcome</title>
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
    color: rgb(44,62,80);  
    font-family: verdana;  
    font-size: 140%;  
}  
         h2 {  
    color: rgb(1,50,67);  
    font-family: verdana;  
    font-size: 110%;  
}
         a {
    color: rgb(102, 51, 153);
}</style>  
<link rel="stylesheet" type="text/css" href="page.css">
<style>
table {
    border-collapse: collapse;
    width: 80%;
	color: #00332E;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
tr:nth-child(odd){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
fieldset {
  background-color: black;
  color: white;
  opacity: 0.8;
}
</style>

</head>
<body>
 <center><h1><u> AIRLINE RESERVATION SYSTEM </u></h1></center>
 <br><br><h2>Update Date and Time:</h2>
<form action="" method="POST">
	


</center>
<form action="adminhome.php" method="POST"> 
	<div class="right">
	<input type="button" value="Back" onclick="location.href='adminhome.php';" /><br><br>
</div><br>
</fieldset>
</legend>
</form>
	

<html>
<body>
<?php
$con=@mysqli_connect('localhost','root','','airline') or die(mysql_error());

    echo "
    <table>
    
    <thead><td>Flight ID</td><td>Plane Name</td><td>Departure time</td><td>Departure Date</td><td>Update</td></thead>";
    $query = "SELECT Flight_ID, Plane_Name,Dep_Time,Dep_Date from Aircraft";
    $result = mysqli_query($con, $query);
    while($cdrow=mysqli_fetch_array($result)){
        echo "<tr><td>".$cdrow[0]."</td><td>".$cdrow[1]."</td><td>".$cdrow[2]."</td><td>".$cdrow[3]."</td><td> <a href=\"http://localhost/Airline/Update.php?Flight_ID=".$cdrow[0]."\"><button>Update</button></a></td></tr>";
    }
    //<tr><td><select id=\"id\" name=\"id\" required></td>
    
 
?>

</body>
</html>    