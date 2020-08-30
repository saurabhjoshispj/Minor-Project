<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hospital web page</title> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon"  href="icon.png" type="image/x-icon">
</head>
  <body>
 <div id="mobile-menu-open" class="shadow-large">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <!-- End #mobile-menu-toggle -->
    <body onload="myFunction()">
<div id="loading"></div>
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
	
<style>
body { 
	background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url("1.jpg");
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

<center><br><br><br><h1>                         <mark>                         <span class="center"><span class="icon"><img src="images/icon-logo.png" alt="center" /></span>
-: ANALYSIS ON MEDICINES AND DOCTORS AVAILABILITY IN HOSPITAL :-                         <span class="center"><span class="icon"><img src="images/icon-logo.png" alt="center" /></span>
</h1></center><hr>
<br><br><center>

  <a href="index2.php">
  
 <button class="button button1">Patients corner</button></a><br>
 <a href="index4.php">
<button class="button button2">Receiptionist corner</button></a><br>
<a href="index7.php">
<button class="button button3">Help</button></a><br>
<a href="about.php">
<button class="button button4">About</button></a><br>
</center>
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            call: "+917558201023", // Call phone number
            call_to_action: "Call us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
</body>
</html>