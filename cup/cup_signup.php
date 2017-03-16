<!DOCTYPE html>
<html lang="en">
<head>
  <title>CUP login</title>
<!--  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
  <link rel="stylesheet" href="login.css">
</head>
<body  background = "img/slider-image-3.jpg">
<div class ="title">
<img src = "img/cup_logo1.jpg" height= "100px" width = "100px" >
<font>
Clinch yoUr Place
</font>
</div>
<?php
session_start();
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
  $data=mysql_select_db("clinchyourplace") or die("unable to connect db");
  $res=mysql_query("SELECT * FROM `company_details` WHERE Name LIKE '%cisco%'") or die("cannot select record<br>");

  
 ?>
  <div class ="center">
<br><br><br><br><br>
<div class="container" >
    <div class="col-md-6" >
        <div id="logbox"  >
            <form id="signup" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                <h1>Login in !</h1>
				<input name="email" type="email" placeholder="Email address" required="required" class="input pass"/>
                <input name="pass" type="password" placeholder="Enter your password" required="required" class="input pass"/>
                <input name="submit" type="submit" value="log in !" class="inputButton"/><h2> new user ? then </h2>
				<!--<input type="button" onclick = "cup_regtr.html" value="sign up" class="inputButton"/>-->
				<a href = "cup_regtr.php" class = "inputButton" >sign up </a>

            </form>
			</div>
        
		<?php

if(isset($_POST['submit']))
{

	$email=$_POST["email"];
	$pass=$_POST["pass"];
	
  $res=mysql_query("SELECT * FROM `user_details` WHERE `Email-ID` = '$email' and `password` = '$pass' ");
 $rows=mysql_fetch_array($res);
if(mysql_num_rows($res)==0)
 {die("INVALID ");}
else{
	$_SESSION['name']=$rows["Name"];
	echo $_SESSION['name'];
  ?><script>window.location="http://localhost/cup/index.php" </script> 
  

<?php } 
}?>

    </div>
	</div>
	</div>
    <!--col-md-6-->




</body>
</html>