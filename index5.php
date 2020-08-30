<!DOCTYPE html>
<html>
<head>
	<title>Receiptionist page</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon"  href="icon.png" type="image/x-icon">
 <div id="mobile-menu-open" class="shadow-large">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <!-- End #mobile-menu-toggle -->
    <header>
        <div id="mobile-menu-close">
            <span>Close</span> <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <ul id="menu" class="shadow">
            <li>
                <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>
Home</a>
            </li>
            <li>
                <a href="index7.php"><i class="fa fa-question" aria-hidden="true"></i>
Help</a>
            </li>
         
            <li>
                <a href="about.php"><i class="fa fa-info-circle" aria-hidden="true"></i>
About</a>
            </li>
            
            <li>
                <a href="contact us.php"><i class="fa fa-phone-square" aria-hidden="true"></i>
Contact us.</a>
            </li>
        </ul>
    </header>
    <!-- End header -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon"  href="icon.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="style4.css">

  <link rel="icon"  href="icon.png" type="image/x-icon">
<style>
	body { 
	background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url("3.jpg");
	height: 100vh;
 	background-size: cover; 
 	background-position: center;
 }	
</style>

	<style>
.button {
  background-color: green; /* cyan */
  border: 2px solid black;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 20px 10px;
  cursor: pointer;
  position: center;
}

.button1 {width: 500px;}
.button2 {width: 500px;}
.button3 {width: 500px;}
.button4 {width: 500px;}



</style>
</head>
<body>
<br>
<center><h1><br><br> <mark><i class="fa fa-hospital-o" aria-hidden="true"></i>
Receiptionist Page <i class="fa fa-hospital-o" aria-hidden="true"></i>
</h1></center><hr>
<center>
  <a href="index6.php">
<button class="button button1">Check Appointment</button></a><br>
<a href="requiredmed.php">
<button class="button button2">Check Required Medicine </button><br>
<a href="checkstock.php">
<button class="button button3">Check Stock </button><br>
<a href="seasonal_report.php">
<button class="button button4">Seasonal report </button></a><br>


</center>

</body>
</html>
<?php

include 'receptionist.php';

if (isset($_post['submit'])) {

    # code...
}
?>