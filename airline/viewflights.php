
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
    font-size: 120%;  
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
 <br><br><h2>Flight Details:</h2><br>
<form action="" method="POST">
	


</center>

</fieldset>
</legend>
</form>
<?php
$con=mysqli_connect("localhost","root","","airline");
$cdquery="SELECT * FROM aircraft";
$cdresult=mysqli_query($con,$cdquery);
echo "
<table>
<thead><td>Flight_ID</td><td>Plane_Name</td><td>Src</td><td>Dstn</td><td>Dep_Time</td><td>Arr_Time</td><td>Fare</td><td>Dep_Date</td><td></td></thead>
";

while ($cdrow=mysqli_fetch_array($cdresult)) 
{
	echo "
<tr><td>".$cdrow['Flight_ID']."</td><td>".$cdrow['Plane_Name']."</td><td>".$cdrow['Src']."</td><td>".$cdrow['Dstn']."</td><td>".$cdrow['Dep_Time']."</td><td>".$cdrow['Arr_Time']."</td><td>".$cdrow['Fare']."</td><td>".$cdrow['Dep_Date']."</td><td> <a href=\"http://localhost/Airline/deleteflights.php?Flight_ID=".$cdrow['Flight_ID']."\"><button>Delete</button></a></td></tr>
";
}
echo "</table>";

echo " <br><a href=\"http://localhost/Airline/adminhome.php\">Go Back to Admin Menu!!!</a> ";
?>
</body>
</html>