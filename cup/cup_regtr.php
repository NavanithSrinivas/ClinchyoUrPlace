<!DOCTYPE html>
<html lang="en">
<head>
  <title>CUP Signup</title>
  <link rel="icon" href="img/cup_logo_ico.ico" type="image/x-icon">
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

  <div class ="center">
<br><br><br><br><br>
<div class="container" >
    <div class="col-md-6" >
        <div id="logbox"  >
		 <?php
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
  $data=mysql_select_db("clinchyourplace") or die("unable to connect db");
  $res=mysql_query("SELECT * FROM `company_details` WHERE Name LIKE '%cisco%'") or die("cannot select record<br>");

  
 ?>
            <form id="signup" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                <h1>Create an Acccount</h1>
				<input name="name" type="text" placeholder="Your name" required="required" class="input pass"/>
				<input name="emailid" type="email" placeholder="Email address" required="required" class="input pass"/>
                <input name="regno" type="text" placeholder="Enter your Reg.no" required="required" class="input pass"/>
                <input name="pass" type="password" placeholder="Enter password" required="required" class="input pass"/>
				<input name="cpass" type="password" placeholder="Confirm password" required="required" class="input pass"/>
				<input name="submit" type="submit" value="Sign me up!" class="inputButton" />
<?php

if(isset($_POST['submit']))
{
	
	$name=$_POST["name"];
	$email=$_POST["emailid"];
	$regno=$_POST["regno"];
	$pass=$_POST["cpass"];
	//$reg[7]=str_split($regno,1);
	//echo $reg[0];
	//if($reg[0-1] != range(14,17)){die("invalid regno");}
	//if($reg[2-4] != "130" || $reg[1-3] != "120"){die("invalid regno");}
	//if($reg[5-6] != range(0,60)){die("invalid regno");}
	$res=mysql_query("INSERT INTO `user_details`(`ID`, `Name`, `password`,`Email-ID`, `FeedBack`) VALUES ('$regno','$name','$pass','$email','')");
	
  ?><script>window.location="http://localhost/cup/cup_signup.php" </script> 
  

<?php 

} ?>
            </form>
        </div>
    </div>
	</div>
	</div>
    <!--col-md-6-->




</body>
</html>