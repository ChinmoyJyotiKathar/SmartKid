<?php

include('sessionAdmin.php');

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
		img {
			border: 3px solid #777;
			border-radius: 4px;
			padding: 5px;
		}
		img:hover{
			border: 3px solid #ddd ;
		}

		#floatingbox {
			float: left;
			width: 80%;
			height: 140px;
			margin-left: 10px;
			border: 5px solid lightpink;
		}
	</style>

</head>
<body>

<section id="container">
	<!--header start-->
	<header class="header fixed-top clearfix">
		<!--logo start-->
		<div class="brand">
			<a href="index.html" class="logo">
				<p style="font-size: 20px;font-family: Papyrus">SmartKid</p>
			</a>
			<div class="sidebar-toggle-box">
				<div class="fa fa-bars"></div>
			</div>
		</div>
		<!--logo end-->

		<div class="top-nav clearfix">
			<!--search & user info start-->
			<ul class="nav pull-right top-menu">
				<li>
					<input type="text" class="form-control search" placeholder=" Search">
				</li>
				<!-- user login dropdown start-->
				<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<img alt="" <?php echo '<img src="data:image/jpg;base64,'.base64_encode( $profilepic ).'"/'; ?>>
						<span class="username"><?php echo $login_session ?></span>
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu extended logout">

						<li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
						<li><a href="logoutAdmin.php"><i class="fa fa-key"></i> Log Out</a></li>
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
						<a class="active" href="profileAdmin.php">
							<i class="fa fa-user"></i>
							<span>HOME</span>
						</a>
					</li>

										<li>
						<a href="UploadAttendence.php">
							<i class="fa fa-dashboard"></i>
							<span>UPLOAD ATTENDENCE </span>
						</a>
					</li>

					<li>
						<a href="uploadMarks.php">
							<i class="fa fa-bullhorn"></i>
							<span>UPLOAD RESULTS </span>
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
			<div class="row">
				<div class="panel-body">
					<div class="col-md-12 w3ls-graph">
						<!--agileinfo-grap-->
						<div class="agileinfo-grap">
							<div class="agileits-box">
								<header class="agileits-box-header clearfix">
									<h3 style="text-align: center ;color: dodgerblue"><span class="label label-primary">Your Profile</span></h3>
									<div class="toolbar">

										<!-- <img src="images/student.jpg" alt="your image" style="width:130px; height:140px; float:left"> -->
									<img style="width:130px; height:140px; float:left"	<?php echo '<img src="data:image/jpg;base64,'.base64_encode( $profilepic ).'"/'; ?> >
										<p id="floatingbox" style="text-align: center ;color: dodgerblue"></br>Name: <?php echo $login_session; ?> </br>
											School: <?php echo $school ?> </br>School ID: <?php echo $schoolID;?></br>
											</p>

									</div>
								</header>

							</div>
						</div>
						<!--//agileinfo-grap-->

					</div>
				</div>
			</div>
			<div class="market-updates ">
				<!-- //Class Rank-->
				<div class="col-md-3 market-update-gd" style="width:28%;">
					<div class="market-update-block clr-block-1">
						<div class="col-md-4 market-update-right">
							<i class="fa fa-users" ></i>
						</div>
						<div class="col-md-8 market-update-left"  style="text-align: center">
							<h4>TOTAL STUDENTS</h4>
							<h4><?php echo $totalSchoolStudents;?></h4>

						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //Attendence-->
				<div class="col-md-3 market-update-gd" style="width:38%">
					<div class="market-update-block clr-block-2">
						<div class="col-md-4 market-update-right">
							<i class="fa fa-eye"> </i>
						</div>
						<div class="col-md-8 market-update-left"  style="text-align: center">
							<h4 >Attendence Updated</h4>
							<h4>July 13, 2017</h4>

						</div>
						<div class="clearfix"> </div>
					</div>
				</div>

				<!-- //CONDUCT-->
				<div class="col-md-3 market-update-gd" style="width:34%">
					<div class="market-update-block clr-block-3">
						<div class="col-md-4 market-update-right">
							<i class="fa fa-users"></i>
						</div>
						<div class="col-md-8 market-update-left" style="text-align: center">
							<h4>Marks Last Updated</h4>
							<h4>Class <?php echo $classnumber; ?>, <?php echo $subject; ?>, <?php echo $examname; ?></h4>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>

				<div class="clearfix"> </div>
			</div>
<div style="width: 200%">
			<div class="agil-info-calendar">
				<!-- calendar -->
				<div class="col-md-6 agile-calendar">
					<div class="calendar-widget">
						<div class="panel-heading ui-sortable-handle">
					<span class="panel-icon">
                      <i class="fa fa-calendar-o "></i>
                    </span>
							<span class="panel-title"> Calendar</span>
						</div>
						<!-- grids -->
						<div class="agile-calendar-grid">
							<div class="page">

								<div class="w3l-calendar-left">
									<div class="calendar-heading">

									</div>
									<div class="monthly" id="mycalendar"></div>
								</div>

								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>
				<!-- //calendar -->



			</br>



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
