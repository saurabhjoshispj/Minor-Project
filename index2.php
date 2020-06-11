<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon"  href="icon.png" type="image/x-icon">
    <meta charset="utf-8">
    <title>Login page for Patient </title>
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
<script type="text/javascript" src="js/jquery.min.js"></script>
    
  </head>
   <style>
        body{
            margin: 0;
            padding: 0;
        }
        body:before{
            content: '';
            position: fixed;
            width: 100vw;
            height: 100vh;
            background-image: url("3.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            -webkit-filter: blur(10px);
            -moz-filter: blur(10px);
            -o-filter: blur(10px);
            -ms-filter: blur(10px);
            filter: blur(10px);
        }
        .contact-form
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
            height: 500px;
            padding: 80px 40px;
            box-sizing: border-box;
            background: rgba(0,0,0,.5);
        }
        .avatar {
            position: absolute;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            top: calc(-80px/2);
            left: calc(50% - 40px);
        }
        .contact-form h2 {
            margin: 0;
            padding: 0 0 20px;
            color: #fff;
            text-align: center;
            text-transform: uppercase;
        }
        .contact-form p
        {
            margin: 0;
            padding: 0;
            font-weight: bold;
            color: #fff;
        }
        .contact-form input
        {
            width: 100%;
            margin-bottom: 20px;
        }
        .contact-form input[type="text"],
        .contact-form input[type="password"]
        {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }
        .contact-form input[type="submit"] {
            height: 30px;
            color: #fff;
            font-size: 15px;
            background: red;
            cursor: pointer;
            border-radius: 25px;
            border: none;
            outline: none;
            margin-top: 15%;
        }
        .contact-form a
        {
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
        }
        input[type="checkbox"] {
            width: 20%;
        }
    </style>
  <body>
    </head>
<body>
    <div class="contact-form">
        <img src="2.png" class="avatar">
        <h2>Patient Details</h2>
         <form action="patient.php" method="post">
  <p>Enter Patient Name :-</p>
    <i class="fa fa-user icon"></i>
    <input type="text" required placeholder="Patient Name" name="pname">
        <p>Enter Mobile No. :-</p>
    <i class="fa fa-mobile"></i>
    <input type="text" required placeholder="Mobile Number" name="mobile">
             <input type="SUBMIT" name="submit" class="btn" value="SUBMIT">

        </form>
    </div>
</body>
</html>

<?php

include 'patient.php';

if (isset($_post['submit'])) {

    # code...
}
?>