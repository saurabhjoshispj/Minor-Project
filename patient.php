<?php  
	$conn = mysqli_connect("localhost","root","","doctor");
	
	$pname = $_POST['pname'];
	$mobile = $_POST['mobile'];

	$query = " insert into patient values('$pname','$mobile')";
	$result = mysqli_query($conn,$query);
	
	if ($result) {
		?>
		<script type="text/javascript">
			alert("Database Connection Successful");
		</script>
		<?php
	} else {
		?>
		<script type="text/javascript">
			alert("Connection UnSuccessful");
		</script>
		<?php
	}
	
	header("location:index3.php");


?>