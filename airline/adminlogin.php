<!doctype html>  
<html>  
<head>  
<title>Admin Login</title>  
    <style>   
        body{  
    background-image: url("adminlogin1.jpg");      
       margin-top: 100px;  
    margin-bottom: 130px;  
    margin-right: 150px;  
    margin-left: 150px;  
	background-size: 100%;
    background-attachment: fixed; 
	color: #261A15;
    font-family: 'Yantramanav', sans-serif;;  
    font-size: 100%;  
     
        }  
            h1 {  
   color: white;}
        h3 {  
    color: rgb(44,62,80);  
    font-family: verdana;  
    font-size: 120%;  
}
		 a {
    color: black;
}
fieldset {
  background-color: white;
  color: black;
  opacity: 0.7;
}</style>  
</head>  
<body>  
     <br><center><h1><u> AIRLINE RESERVATION SYSTEM </u></h1></center>  <br>  
	<br />
    <legend>  
    <fieldset>
    <center>
    <br>
    
   <h3>Admin Login Form</h3>  
<form action="" method="POST">  
<br /><b>Employee name: </b>&nbsp;<input type="text" name="empname"><br />  
<br /><b>Password: </b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="password" name="emppass"><br />   <br>
<br /><input type="submit" value="Login" name="submit" /><br />

<br /><div class="right"><button class="button">
	<a href="index.php"  style="color:black">Back</a></button>
</fieldset>  
</legend> 
</form>  
<?php  
    $con=mysqli_connect("localhost","root","","airline");
    //mysql_select_db("Practice")
    //if (isset($_POST['email']))

    if(isset($_POST['submit']))
    {
        $empname = $_POST['empname'];
        $emppass = $_POST['emppass'];

        $sql="SELECT * FROM admin WHERE Name='".$empname."' AND Pswd='".$emppass."'";
        $query=mysqli_query($con,$sql);  
        $numrows=mysqli_num_rows($query);  
        if($numrows!=0)  
        {  
            while($row=mysqli_fetch_assoc($query))  
            {  
                $dbename=$row['Name'];  
                $dbpassword=$row['Pswd'];  
            }  
  
            if($empname == $dbename && $emppass == $dbpassword)  
            {  
                session_start();  
                $_SESSION['sess_ename']=$empname;  
     
                /* Redirect browser */  
                header("Location: adminhome.php");  
            }  
        } 
        else 
        {  
            echo "Invalid username or password!";  
        }  
  }

?>

</body>  
</html>   