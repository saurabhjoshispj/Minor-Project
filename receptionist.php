<?php  
	$conn = mysqli_connect("localhost","root","","doctor");
	
	$pname = $_POST['uname'];
	$mobile = $_POST['password'];

	$query = " insert into receptionist values('$uname','$password')";
	$result = mysqli_query($conn,$query);
	
	header("location:index5.php");


?>