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
		table,tr,td{
		font-family: Candara, Calibri, Segoe, "Segoe UI", Optima, Arial, sans-serif;
		font-size: 30px;
		font-style: normal;
		font-variant: normal;
		font-weight: 400;
		line-height: 30px;
		
		text-align:center;
		}
		.button {
		text-decoration: none;
        text-align: center;
        font-size: 25px;
        font-weight: bold;
		font-style: bold;
		font-family: "Open Sans", Helvetica, sans-serif;
		position: relative;
        width: 20%;
        height: 50px;
        display: block;
        margin: 30px auto 30px;
        color: white;
        background-color: #3CC;
        border: none;
        -webkit-box-shadow: 0 5px 0 #2CADAD;
        -moz-box-shadow: 0 5px 0 #2CADAD;
        box-shadow: 0 5px 0 #2CADAD;
		}
		.button:hover {
		text-decoration: none;
		font-weight: bold;
        top: 7px;
        -webkit-box-shadow: 0 3px 0 #2CADAD;
        -moz-box-shadow: 0 3px 0 #2CADAD;
        box-shadow: 0 3px 0 #2CADAD;
    }
    .button:active {
        top: 5px;
        box-shadow: none;
    }
    .button:focus {
        outline: none;
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
        </nav>
		<center>
		<table >
		<tr>
		    <td width="300px">Correct answer(s) : </td>
			<td width="100px"><font color="#4dff4d" size="10"><?php echo $_SESSION['right'] ;?></font></td>
			<td><img src="img\happy.png" width="100px" height="100px"></td>
		</tr>
			<td width="300px">Wrong answer(s) : </td>
			<td width="100px"><font color="red" size="10"><?php echo $_SESSION['wrong'] ;?></font></td>
			<td><img src="img\sad.png" width="100px" height="100px"></td>
		</tr>
		</table>
			<a href = "testindex.php" class = "button" >Take another test !</a>
		</center>


 

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/main.js"></script>
					
		
    </body>
</html>
