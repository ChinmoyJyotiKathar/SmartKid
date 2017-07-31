<?php
session_start();
?>
<?php


// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "school_admin", "rootisgood");
// Selecting Database
$db = mysqli_select_db($connection,"smartkid");
// Storing Session
$user_check=$_SESSION['login_user'];


// SQL Query To Fetch Complete Information from SCHOOL TABLE
$ses_sql=mysqli_query($connection,"select * from schooltable where AdminName='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['AdminName'];
$profilepic = $row['ProfilePic'];
$school = $row['SchoolName'];
$schoolID = $row['SchoolID'];


// SQL Query To Fetch Complete Information from STUDENT TABLE
$ses_sql=mysqli_query($connection,"select COUNT(DISTINCT StudentID) as total from studenttable where schoolID='$schoolID'");
$row = mysqli_fetch_assoc($ses_sql);
$totalSchoolStudents=$row['total'];
$ses_sql=mysqli_query($connection,"select DISTINCT Class from studenttable where schoolID='$schoolID'");
$classList=array();
while($row = mysqli_fetch_assoc($ses_sql)){
array_push($classList,$row['Class']);
}


//SQL Query to fetch Last Marks Updated from Marks Table
$ses_sql = mysqli_query($connection,"Select * FROM studentmarks where SchoolID='$schoolID' ORDER BY SerialNumber DESC LIMIT 1");
$row = mysqli_fetch_assoc($ses_sql);
$examname = $row['TestName'];
$classnumber = $row['Class'];
$subject = $row['SubjectName'];



if(!isset($_SESSION['login_user'])){
mysqli_close($connection); // Closing Connection
header('Location: loginasadmin.php'); // Redirecting To Home Page
}
?>