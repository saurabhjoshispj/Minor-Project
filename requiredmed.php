<html><!DOCTYPE html>
    <html>
    <head>
    	<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head<link href="css/bootstrap.min.css" rel="stylesheet">
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
       <style>
        body { 
    background-image: url("3.jpg");
    height: 100vh;
    background-size: cover; 
    background-position: center;
 }  
    table {
    border-collapse: collapse;
    width: 100%;
    color: #588c7e;
    font-family: monospace;
    font-size: 25px;
    text-align: left;
    }
    th {
    background-color: #588c7e;
    color: white;
    }
    tr:nth-child(even) {background-color: #f2f2f2}
    
    </style>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Search Required Medicine</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
		

			<h1 align="center"><br><br>
		<mark>Enter Required Medicine Name : - </h1><br /><hr>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Medicine Name" class="form-control" />
				</div><hr>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />
	</body>
</html>


<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>




