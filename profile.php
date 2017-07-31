<?php

include('session.php');

?>

<!DOCTYPE html>
<head>
	<title>SchoolBase Admin Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- bootstrap-css -->
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<!-- //bootstrap-css -->
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/style-responsive.css" rel="stylesheet"/>
	<!-- font CSS -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="css/font.css" type="text/css"/>
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/morris.css" type="text/css"/>
	<!-- calendar -->
	<link rel="stylesheet" href="css/monthly.css">
	<!-- //calendar -->
	<!-- //font-awesome icons -->
	<script src="js/jquery2.0.3.min.js"></script>
	<script src="js/raphael-min.js"></script>
	<script src="js/morris.js"></script>
	<style>




		#floatingbox {
			float: left;
			width: 800px;
			height: 140px;
			margin-left: 10px;
			border: 5px solid lightpink;
		}
		.videoWrapper {
			position: relative;
			padding-bottom: 56.25%; /* 16:9 */
			padding-top: 25px;
			height: 0;
			margin-bottom: 6%;
		}
		.videoWrapper iframe {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}
	</style>

</head>
<body>
<?php

#include('session.php');
#session_start();
#$login_session=$_SESSION['login_user'];
#echo $login_session;

?>
<section id="container">
	<!--header start-->
	<header class="header fixed-top clearfix">
		<!--logo start-->
		<div class="brand">
			<a href="index.php" class="logo">
				<p style="font-size: 20px;font-family: Papyrus">SmartKid</p>
			</a>
			<div class="sidebar-toggle-box">
				<div class="fa fa-bars"></div>
			</div>
		</div>
		<!--logo end-->

		<div class="top-nav clearfix" >
			<!--search & user info start-->



			<ul class="nav pull-right top-menu" >

				<li >
					<input type="text" class="form-control search" placeholder=" Search">
				</li>
				<!-- user login dropdown start-->
				<li class="dropdown" >
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<img alt="" <?php echo '<img src="data:image/jpg;base64,'.base64_encode( $profilepic ).'"/>'; ?>
						<span class="username"><?php echo $login_session ?></span>
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu extended logout">

						<li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
						<li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
					</ul>
				</li>
				<!-- user login dropdown end -->

			</ul>
			<!--search & user info end-->
		</div>
	</header>
	<!--header end-->
	<!--sidebar start-->
	<aside>
		<div id="sidebar" class="nav-collapse">
			<!-- sidebar menu start-->
			<div class="leftside-navigation">
				<ul class="sidebar-menu" id="nav-accordion">
					<li>
						<a class="active" href="profile.php">
							<i class="fa fa-user"></i>
							<span>HOME</span>
						</a>
					</li>


					<li>
						<a href="attendence.php">
							<i class="fa fa-dashboard"></i>
							<span>ATTENDENCE </span>
						</a>
					</li>

					<li>
						<a href="result.php">
							<i class="fa fa-bullhorn"></i>
							<span>RESULTS </span>
						</a>
					</li>




					<li class="sub">
						<a href="ebook.php">
							<i class="fa fa-envelope"></i>
							<span> E-Books & Videos</span>
						</a>

					</li>


					<li class="sub">
						<a href="#">
							<i class="fa fa-area-chart"></i>
							<span> Online Quiz </span>
						</a>

					</li>




				</ul>
			</div>
			<!-- sidebar menu end-->
		</div>
	</aside>
	<!--sidebar end-->
	<!--main content start-->
	<section id="main-content">
		<section class="wrapper">
			<!-- //Student Profile-->
			<div style="display: inline">
			<div class="row" style="width: 55%;float: left">
				<div class="panel-body " >
					<div class="col-md-12 w3ls-graph">
						<!--agileinfo-grap-->
						<div class="agileinfo-grap" style="background-color:  #e6fff5">
							<div class="agileits-box" >
								<header class="agileits-box-header clearfix" >

									<div class="toolbar" style=" display: inline" >

										<img  class="img-circle" style="width:80px; height:auto; float:left" alt="" <?php echo '<img src="data:image/jpg;base64,'.base64_encode( $profilepic ).'"/>'; ?>
										<h4 style="margin-left: 4%;margin-top: 8%"> &nbsp;<strong> <?php echo $login_session;?> </strong>  </h4>
										<!--
										<p id="floatingbox" style="text-align: center ;color: dodgerblue"></br>Name: <?php echo $login_session;?> </br> School: <?php echo $schoolName;?> </br>
											Class: <?php echo $studentClass;?> </br>Section: <?php echo chr($studentSec+64);?></br>Roll No: <?php echo $studentRoll;?></p> -->

									</div>
									</br>
									</br>
									<p>  School:  <strong> <?php echo $schoolName;?></strong> </p>
									<div style="display: inline">
										<p style="float: left">  class:  <strong> <?php echo $studentClass;?> </strong> </p>
										<p style="float: left; margin-left: 10%">  Section:  <strong>  <?php echo chr($studentSec+64);?> </strong> </p>
									</div>
									</br>
									<p>  Roll Number:  <strong>  <?php echo $studentRoll;?> </strong></p>
								</header>

							</div>
						</div>
						<!--//agileinfo-grap-->

					</div>
				</div>
			</div>




				<div class="row" style="width: 25%;float: left; margin-left: 0%">
					<div class="panel-body " >
						<div class="col-md-12 w3ls-graph">
							<!--agileinfo-grap-->
							<div class="agileinfo-grap" style="background-color:  #e6fff5">
								<div class="agileits-box" >
									<header class="agileits-box-header clearfix" >

										<h4 style="text-align: center">    <strong> Class Rank</strong> </h4>
										</br>
									    </br>
										<h1 style="text-align: center">02</h1>
										</br>
										</br>
										<p style="text-align: center ;color: green">Good</p>
									</header>

								</div>
							</div>
							<!--//agileinfo-grap-->

						</div>
					</div>
				</div>

				<div class="row" style="width: 25%;  float: left">
					<div class="panel-body " >
						<div class="col-md-12 w3ls-graph">
							<!--agileinfo-grap-->
							<div class="agileinfo-grap" style="background-color:  #e6fff5">
								<div class="agileits-box" >
									<header class="agileits-box-header clearfix" >

										<header class="agileits-box-header clearfix" >

											<h4 style="text-align: center">    <strong> Attendance</strong> </h4>
											</br>
											</br>
											<h1 style="text-align: center">89%</h1>
											</br>
											</br>
											<p style="text-align: center; color: green">Good</p>
										</header>

									</header>

								</div>
							</div>
							<!--//agileinfo-grap-->

						</div>
					</div>
				</div>



			</div>




				<div class="clearfix"> </div>


			<div class="agil-info-calendar">

				<div class="col-md-6 w3agile-notifications" style="width: 100%">
					<div class="notifications" >
						<!--notification start-->

						<header class="panel-heading">
							Notification
						</header>



						<div class="alert alert-warning ">
							<span class="alert-icon"><i class="fa fa-bell-o"></i></span>
							<div class="notification-info">
								<ul class="clearfix notification-meta">
									<li class="pull-left notification-sender"><span><a href="#">Utpal Das</a></span> Class teacher </li>
									<li class="pull-right notification-time">1 Day Ago</li>
								</ul>
								<p>
									Unit Test 2 starts on 5 July Thursday.
								</p>
							</div>
						</div>
						<div class="alert alert-info clearfix">
							<span class="alert-icon"><i class="fa fa-bell-o"></i></span>
							<div class="notification-info">
								<ul class="clearfix notification-meta">
									<li class="pull-left notification-sender"><span><a href="#">Rita Sharma</a></span> Maths teacher </li>
									<li class="pull-right notification-time">6 days ago</li>
								</ul>
								<p>
									Maths Class Test Result Declared
								</p>
							</div>
						</div>

					</div>


					<!--notification end-->
				</div>
			</div>
			<div class="clearfix"> </div>





		</section>
		<!-- footer -->
		<div class="footer" style="padding: 5px;">
			<div class="wthree-copyright">
				<p>© 2017 Student Profile. All rights reserved | Design by Chinmoy Jyoti Kathar</a></p>
			</div>
		</div>
		<!-- / footer -->
	</section>
	<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->
<script>
    $(document).ready(function() {
        //BOX BUTTON SHOW AND CLOSE
        jQuery('.small-graph-box').hover(function() {
            jQuery(this).find('.box-button').fadeIn('fast');
        }, function() {
            jQuery(this).find('.box-button').fadeOut('fast');
        });
        jQuery('.small-graph-box .box-close').click(function() {
            jQuery(this).closest('.small-graph-box').fadeOut(200);
            return false;
        });

        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }



        });


    });
</script>
<!-- calendar -->
<script type="text/javascript" src="js/monthly.js"></script>
<script type="text/javascript">
    $(window).load( function() {

        $('#mycalendar').monthly({
            mode: 'event',

        });

        $('#mycalendar2').monthly({
            mode: 'picker',
            target: '#mytarget',
            setWidth: '250px',
            startHidden: true,
            showTrigger: '#mytarget',
            stylePast: true,
            disablePast: true
        });



    });
</script>
<!-- //calendar -->
</body>
</html>
