<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
	<?php
					session_start();
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
  $sel=$_SESSION['chosen'];
  $table=$_SESSION['level'];
  
   
   $data=mysql_select_db($sel,$dbhandle) or die("unable to connect db");
   $rss=mysql_query("select * from `$table`");
   $max=mysql_num_rows($rss);
 					?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CUP-CLinch ypUr Place </title>
        <meta name="description" content="company is a free job board template">
        <meta name="author" content="Ohidul">
        <meta name="keyword" content="html, css, bootstrap, job-board">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/cup_logo_ico.ico" type="image/x-icon">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/animate.css">        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <link rel="stylesheet" href="style.css">
        
		<link rel="stylesheet" href="responsive.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<style>
		#qtn{
		border-radius: 25px;
		border: 2px solid #73AD21;
		padding: 20px;
		width: 1000px;
		height: 350px;
		font-family: Candara, Calibri, Segoe, "Segoe UI", Optima, Arial, sans-serif;
		font-size: 25px;
		font-style: normal;
		font-variant: normal;
		font-weight: 400;
		line-height: 30px;
		
		}
	
		
		</style>
    </head>
    <body>

       <!-- <div id="preloader" >
            <div id="status"><img src="img/Cup_logo1.jpg"></div>
        </div>
        <!-- Body content -->
		
        <div class="header-connect" id="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8 col-xs-8">
                        <div class="header-half header-call">
                            <p>
                                <span><i class="icon-cloud"></i>+91 99 67 781763</span>
                                <span><i class="icon-mail"></i>cupqueries@gmail.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-3  col-xs-offset-1">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vine"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              
			  <img src="img/Cup_logo1.jpg" width = "100px" height = "100px" alt="">
			  <font size ="150%" >Clinch yoUr Place </font>
			  <!--<font size = "6px" color ="black">C</font>
												linch yo
				<font size = "6px" color ="black">U</font>
												  r <font size = "6px" color ="black">
												  P</font>
												  lace</a>-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <!--<div class="button navbar-right">
                  <button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.8s">Login</button>
                  <button class="navbar-btn nav-button wow fadeInRight" data-wow-delay="0.6s">Sign up</button>
              </div>-->
              <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow fadeInDown" data-wow-delay="0s"><a class="active" href="#">Home</a></li>
                				
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav><center>
		<form name="ques" method="post" >
		
	<?php 	
					
 $_SESSION['tid']++;
 $tid=$_SESSION['tid'];
 
 $rs=mysql_query("select * from `$table` where ids = $tid")or die("roe");
 
 
 $rows=mysql_fetch_array($rs);
 
	?> 
	<div id="qtn" align="left">
	<p><?php echo $rows["qst"]; ?></p>
	
	<div class="answ">
	<input type="radio"  id="answ" name="ans" value="<?php echo $rows["opt1"]; ?>" /><?php echo $rows["opt1"]; ?><br>
	<input type="radio"  id="answ" name="ans" value="<?php echo $rows["opt2"]; ?>" /><?php echo $rows["opt2"]; ?><br>
	<input type="radio"  id="answ" name="ans" value="<?php echo $rows["opt3"]; ?>" /><?php echo $rows["opt3"]; ?><br>
   <input type="radio"  id="answ" name="ans" value="<?php echo $rows["opt4"]; ?>" /><?php echo $rows["opt4"]; ?><br>
   <input type="hidden" name="cans" value="<?php  echo $rows["crtans"]; ?>" />
   <?php if($_SESSION['tid'] < $max){
	   
   
	  ?> 
<center>   <input type="submit" class="next" name="next" value="next >"/></center><?php 
	  if(isset($_POST['next'])){
		
		if( $_POST['ans']== $_POST['cans']){
		
		$_SESSION['right']++;
	}
	else {$_SESSION['wrong']++;}
	 
	  
	   
 
} 
	   } 
	  else{
	   if( $_POST['ans']== $_POST['cans']){
		
		$_SESSION['right']++;
	}
	else {$_SESSION['wrong']++;}
	   
   ?><input type="submit" name="submit" value="submit" OnClick="dis()"/><?php 
   
  
   }
	  if(isset($_POST['submit'])){
		   
		  
	   ?><script>window.location="http://localhost/quiz/marks.php" </script><?php }  ?>
	
	   



</center>
 </div>
 
	</div>
	

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/main.js"></script>
					
		
    </body>
</html>
