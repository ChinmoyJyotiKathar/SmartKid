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
                <p style="font-size: 20px">Student Profile</p>
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
                        <a  href="profile.php">
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
                        <a class="active" href="ebook.php">
                            <i class="fa fa-envelope"></i>
                            <span> E-Books & Videos</span>
                        </a>

                    </li>


                    <li class="sub">
                        <a href="charts.html">
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




            <div class="clearfix"> </div>

            <!-- tasks -->
            <div class="agile-last-grids">
                <div class="col-md-4 agile-last-left">
                    <div class="agile-last-grid">
                        <div class="area-grids-heading">
                            <h3><span class="label label-success">Maths</span></h3>

                        </div>


                        <div class="list-group" >
                            <a href="http://epathshala.nic.in/e-pathshala-4/flipbook/" class="list-group-item list-group-item-success"  > NCERT Maths Book </a>
                            <a href="#" class="list-group-item list-group-item-warning"  > RD Sharmah Mathematics </a>
                            <a href="#" class="list-group-item list-group-item-info"  > Arihant Publications </a>
                        </div>

                        <div class="videoWrapper">
                            <!-- Copy & Pasted from YouTube -->
                            <iframe width="560" height="349" src="http://www.youtube.com/embed/8CluknrLeys?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <p style="text-align: center;">The Fundamental Theorem of Arithmetic</p>
                        <p style="text-align: center;">For More Videos: </p>
                        <a href="https://www.khanacademy.org/math/in-in-grade-10-ncert" style="margin-left: 30%"> <button class="btn btn-send"> Click Here </button></a>

                    </div>
                </div>
                <div class="col-md-4 agile-last-left agile-last-middle">
                    <div class="agile-last-grid">
                        <div class="area-grids-heading">
                            <h3><span class="label label-danger">Science</span></h3>
                        </div>
                        <div class="list-group" >
                            <a href="http://epathshala.nic.in/e-pathshala-4/flipbook/" class="list-group-item list-group-item-success"  > NCERT Science Book </a>
                            <a href="#" class="list-group-item list-group-item-warning"  > Luxor Science Series </a>
                            <a href="#" class="list-group-item list-group-item-info"  > Arihant Publications </a>
                        </div>
                        <div class="videoWrapper">
                            <!-- Copy & Pasted from YouTube -->
                            <iframe width="560" height="349" src="http://www.youtube.com/embed/-rsYk4eCKnA?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <p style="text-align: center;">What IS Photosynthesis</p>
                        <p style="text-align: center;">For More Videos: </p>
                        <a href="https://www.khanacademy.org/science/biology" style="margin-left: 30%"> <button class="btn btn-success"> Click Here </button></a>

                    </div>
                </div>
                <div class="col-md-4 agile-last-left agile-last-right">
                    <div class="agile-last-grid">
                        <div class="area-grids-heading">
                            <h3 ><span class="label label-default">English</span></h3>
                        </div>
                        <div class="list-group" >
                            <a href="http://epathshala.nic.in/e-pathshala-4/flipbook/" class="list-group-item list-group-item-success"  > NCERT English Book </a>
                            <a href="#" class="list-group-item list-group-item-warning"  > Wren And Martin Grammar </a>
                            <a href="#" class="list-group-item list-group-item-info"  > Adhir Debnath Grammar </a>
                        </div>
                        <div class="videoWrapper">
                            <!-- Copy & Pasted from YouTube -->
                            <iframe width="560" height="349" src="http://www.youtube.com/embed/UejW-WQpujs?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <p style="text-align: center;">Introduction To Nouns</p>
                        <p style="text-align: center;">For More Videos: </p>
                        <a href="https://www.khanacademy.org/humanities/grammar" style="margin-left: 30%"> <button class="btn btn-primary"> Click Here </button></a>

                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

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
