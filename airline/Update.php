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
<form action="Updatetimings.php" method="POST"> 
	<div class="right">
	<input type="button" value="Back" onclick="location.href='Updatetimings.php';" /><br><br>
</div><br>
</fieldset>
</legend>
</form>
<html>
    <body>
        <?php
        session_start();
        $con=@mysqli_connect('localhost','root','','airline') or die(mysql_error());
        if(!isset($_POST["DepartureTime"])){ 
            echo "
            <table>
            <form action=\"Update.php?id=".$_GET["Flight_ID"]."\" method=\"post\">
            <tr><td>Edit Departure Time : </td></tr>
            <tr><td>Flight_ID</td><td>Departure Time</td><td>Departure Date</td><td>Submit</td></tr>
            <tr><td>".$_GET["Flight_ID"]."<td><input type=\"datetime\" name=\"DepartureTime\" required> </td> <td><input type=\"date\" name=\"DepartureDate\" required> </td><td><input type=\"submit\"></td></tr>
            
            </form>
            ";
            }
            else{
                $sql = "UPDATE `Aircraft` SET `Dep_Time`='".$_POST["DepartureTime"]."' ,`Dep_Date`='".$_POST["DepartureDate"]."' where Flight_ID= ('".$_GET["id"]."')";
                
                if ($con->query($sql) === TRUE) {
                    echo "Departure Date and Time updated successfully";
                } else {
                    echo "Error:" . $con->error;
                }
            }
            
            
            ?>