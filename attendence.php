<?php

include('session.php');

?>

<!DOCTYPE html>
<html>
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
    </style>
    <style>


        .calendar-header {

            color: yellow;
        }
    </style>


    <script type="text/javascript">
        // these are labels for the days of the week
        cal_days_labels = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

        // these are human-readable month name labels, in order
        cal_months_labels = ['January', 'February', 'March', 'April',
            'May', 'June', 'July', 'August', 'September',
            'October', 'November', 'December'];

        // these are the days of the week for each month, in order
        cal_days_in_month = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

        // this is the current date
        cal_current_date = new Date();

        function Calendar(month, year) {
            this.month = (isNaN(month) || month == null) ? cal_current_date.getMonth() : month;
            this.year  = (isNaN(year) || year == null) ? cal_current_date.getFullYear() : year;
            this.html = '';
        }

        Calendar.prototype.generateHTML = function(){

            // get first day of month
            var firstDay = new Date(this.year, this.month, 1);
            var startingDay = firstDay.getDay();

            // find number of days in month
            var monthLength = cal_days_in_month[this.month];

            // compensate for leap year
            if (this.month == 1) { // February only!
                if((this.year % 4 == 0 && this.year % 100 != 0) || this.year % 400 == 0){
                    monthLength = 29;
                }
            }

            // do the header
            var monthName = cal_months_labels[this.month]
            var html = '<table class="calendar-table" style="float:left; margin-left:4%; margin-bottom:3%">';
            html += '<tr><th colspan="7" style="padding: 25px 10px;width: 41%;background:  #e6fff5; text-align: center;border-radius: 25px">';
            html +=  monthName+ "&nbsp;" + this.year;
            html += '</th></tr>';
            html += '<tr class="calendar-header">';
            for(var i = 0; i <= 6; i++ ){
                html += '<td class="calendar-header-day">';
                html += cal_days_labels[i];
                html += '</td>';
            }
            html += '</tr><tr>';
            var arrayfromphp = <?php echo json_encode($studentattendence); ?>;
            var january= arrayfromphp.slice(0,31);
            var february= arrayfromphp.slice(31,60);
            //var march= arrayfromphp[59,90];
            //var april= arrayfromphp[90,120];
            //var may= arrayfromphp[120,151];
            //var june= arrayfromphp[151,181];
            //var july= arrayfromphp[181,212];
            //var august= arrayfromphp[212,242];
            //var september= arrayfromphp[242,272];
            //var october= arrayfromphp[272,303];
            //var november= arrayfromphp[303,333];
            //var december= arrayfromphp[333,364];


            var mymonth = [0,0,0,0];
            // fill in the days
            var day = 1;
            var flag;
            // this loop is for is weeks (rows)
            for(var i=0;i<1;i++){
                if(monthName == 'January'){
                    mymonth = january;
                    break;
                }
                if(monthName == 'February'){
                    mymonth = february;
                    break;
                }
                if(monthName == 'March'){
                    mymonth = march;
                    break;
                }
                if(monthName == 'April'){
                    mymonth = april;
                    break;
                }
                if(monthName == 'May'){
                    mymonth = may;
                    break;
                }
                if(monthName == 'June'){
                    mymonth = june;
                    break;
                }
                if(monthName == 'July'){
                    mymonth = july;
                    break;
                }
                if(monthName == 'August'){
                    mymonth = august;
                    break;
                }
                if(monthName == 'September'){
                    mymonth = september;
                    break;
                }
                if(monthName == 'October'){
                    mymonth = october;
                    break;
                }
                if(monthName == 'November'){
                    mymonth = november;
                    break;
                }
                if(monthName == 'December'){
                    mymonth = december;
                    break;
                }
                else{
                mymonth = january;
                break;
                }
            }



            flag = mymonth[0];
            for (var i = 0; i < 9; i++) {
                // this loop is for weekdays (cells)
                for (var j = 0; j <= 6; j++) {
                    html += '<td class="calendar-day">';
                    if (day <= monthLength && (i > 0 || j >= startingDay)) {
                        if (mymonth[flag]==1)
                        {
                            html+= '<div style="color:white;">' + day + '</div>';

                            day++;}
                        else if(mymonth[flag] == 0)  {
                            html+= '<div style="color:red;">' + day + '</div>';
                            day++;
                        }
                        else   {
                            html+= '<div style="color:black;">' + day + '</div>';
                            day++;
                        }
                       flag++;
                    }
                    html += '</td>';
                }
                // stop making rows if we've run out of days
                if (day > monthLength) {
                    break;
                } else {
                    html += '</tr><tr>';
                }
            }
            html += '</tr></table>';

            this.html = html;
        }





        Calendar.prototype.getHTML = function() {
            return this.html;
        }
    </script>
</head>
<body>
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
                        <a  href="profile.php">
                            <i class="fa fa-user"></i>
                            <span>HOME</span>
                        </a>
                    </li>


                    <li>
                        <a class="active" href="attendence.php">
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
                        <a href="requestfeedback.html">
                            <i class="fa fa-envelope"></i>
                            <span>REQUEST FEEDBACK </span>
                        </a>

                    </li>


                    <li class="sub">
                        <a href="charts.html">
                            <i class="fa fa-area-chart"></i>
                            <span>CHARTS</span>
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

           <!-- <div class="alert alert-info" style="font-size: 20px">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Sorry! We are currently working on this section!
            </div> -->

            <div class="panel panel-success">
                <div class="panel-heading" style="text-align: center; width: 100%"> Today's Date </div>
                <div class="panel-body" style="text-align: center">Today is February 2, 2017</div>
                <div class="panel-body" style="text-align: center">
                   <div style="display: inline">
                    <h3 style="color: green;float: left;margin-right: 33%;margin-left: 10%">33</h3>
                    <h3 style="color: red;float: left;margin-right: 33%">03</h3>
                    <h3 style="color: #00a0dc;float: left">36</h3>
                   </br>
                    <div style="display: inline">
                    <p style="float: left;margin-right: 31%;margin-left: 8%">Present</p>
                    <p style="float: left;margin-right: 26%">Absent</p>
                    <p style="float: left;">Total Students</p>
                    </div>
                </div>
            </div>
            </div>
            </br>

            <div  >
                <script type="text/javascript">
                    var cal = new Calendar(0,2017);
                    cal.generateHTML();
                    document.write(cal.getHTML());
                </script>
            </div>
            <script type="text/javascript">
                var cal = new Calendar(1,2017);
                cal.generateHTML();
                document.write(cal.getHTML());
            </script>
            <script type="text/javascript">
                var cal = new Calendar(2,2017);
                cal.generateHTML();
                document.write(cal.getHTML());
            </script>
            <script type="text/javascript">
                var cal = new Calendar(3,2017);
                cal.generateHTML();
                document.write(cal.getHTML());
            </script>
            <script type="text/javascript">
                var cal = new Calendar(4,2017);
                cal.generateHTML();
                document.write(cal.getHTML());
            </script>
            <script type="text/javascript">
                var cal = new Calendar(5,2017);
                cal.generateHTML();
                document.write(cal.getHTML());
            </script>
            <script type="text/javascript">
                var cal = new Calendar(6,2017);
                cal.generateHTML();
                document.write(cal.getHTML());
            </script>
            <script type="text/javascript">
                var cal = new Calendar(7,2017);
                cal.generateHTML();
                document.write(cal.getHTML());
            </script>
            <script type="text/javascript">
                var cal = new Calendar(8,2017);
                cal.generateHTML();
                document.write(cal.getHTML());
            </script>
            <script type="text/javascript">
                var cal = new Calendar(9,2017);
                cal.generateHTML();
                document.write(cal.getHTML());
            </script>
            <script type="text/javascript">
                var cal = new Calendar(10,2017);
                cal.generateHTML();
                document.write(cal.getHTML());
            </script>
            <script type="text/javascript">
                var cal = new Calendar(11,2017);
                cal.generateHTML();
                document.write(cal.getHTML());
            </script>


</diiv>



        </section>
        <!--main content end-->
    </section>

<div id="my"> </div>
    <!-- footer -->
    <div class="footer" style="padding: 5px; bottom: 0;position: fixed;width: 100%">
        <div class="wthree-copyright">
            <p>© 2017 Student Profile. All rights reserved | Design by Chinmoy Jyoti Kathar</p>

        </div>
    </div>
    <!-- / footer -->
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/jquery.flot.min.js"></script>
    <script src="js/graph.js"></script>

</body>
</html>
