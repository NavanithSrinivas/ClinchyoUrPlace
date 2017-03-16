<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
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
			<link rel="stylesheet" href="css/reset.css">
			<link rel="stylesheet" href="css/dropdown.css">
			
			<link rel="stylesheet" href="css/compreset.css">
			<link rel="stylesheet" href="css/compstyle.css">
			<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    
        <style>
		 
 

    </style>
 
        <script src="js/prefixfree.min.js"></script>
		<script src="js/compprefixfree.min.js"></script>
</head>

  <body>
 <!-- <div id="preloader" >
            <div id="status"><img src="img/Cup_logo1.jpg"></div>
        </div>-->
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
			  <font size ="150%" > Clinch yoUr Place </font>
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
                <li class="wow fadeInDown" data-wow-delay="0s"><a class="active" href="index.php">Home</a></li>
                                
              </ul>
            </div>
          </div>
        </nav>
		<div id="leftside">
		</div>
		<div class="slider-area">
		
			<div id ="middle" >
			<center>
			<?php
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
  $data=mysql_select_db("clinchyourplace") or die7("unable to connect db");
 

  
 ?>
			<br>
			  <div id ="cgpa">
			  	<form id="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >

			    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="5px">	CGPA </font>
	            &nbsp;&nbsp;&nbsp;<input type="text"class="inputs" placeholder="CGPA" name="cgpa"/>
			  </div>
			
			 

&nbsp;&nbsp;&nbsp;
<input type ="submit" name="submit"  value="SUBMIT" height="100px" width="200px"></input>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    </div>
	<div id="leftside">
		</div>
	
	<div id="result">
	<div class="container">
    <div class="well well-sm">
        <strong>Display</strong>
        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span>Grid</a>
        </div>
    </div>
	<?php if(isset($_POST['submit'])){
		$res=$_POST['cgpa'];
		 $result=mysql_query("SELECT * FROM `company_details` WHERE `Min_CGPA` <= $res ") or die("cannot select record<br>");  ?>
    <div id="products" class="row list-group"  >

        <div class="item  col-xs-4 col-lg-4" id="combox">

            <div class="thumbnail">
								 <?php while($rows=mysql_fetch_array($result)) { ?>

								 
								 
                <img class="group list-group-image" src="<?php echo $rows["logo"]; ?>" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <?php echo $rows["Name"] ; ?></h4>
                    <p class="group inner list-group-item-text">
                        <?php echo $rows["description"]; ?></p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                <?php echo $rows["Min_CGPA"]; ?></p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="">Go</a>
	
                        </div>
                    </div>
                </div>
				<?php } } ?>
            </div>
			
        </div>
        </div>
</div>
	
	
	</div>
	
    
    </div>
	  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>

        <script src="js/compindex.js"></script>
  </body>
</html>
