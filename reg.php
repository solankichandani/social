<?php 
	$con=mysqli_connect("localhost","root","","form_");
	if(isset($_POST['txtfnm']))
	{
		$fnm =$_POST['txtfnm'];
		$lnm =$_POST['txtlnm'];
		$em =$_POST['txtem'];
		$pwd=$_POST['txtpwd'];
		$co =$_POST['txtco'];
		$br=$_POST['txtbr'];
		$sql="INSERT INTO `form_mgt`(`first_name`, `last_name`, `email`,`password`, `contact`, `birth_date`) VALUES ('$fnm','$lnm','$em','$pwd','$co','$br')";
		
		mysqli_query($con,$sql);
		{
			header("location:login.php");
		}
		
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container mt-3">
		<form action="reg.php" method="POST" >
			<u><b><center>REGISTRATION FORM </center></u></b>
				<input type="text" name="txtfnm" class="form-control" placeholder="enter first name" required><br>
				<input type="text" name="txtlnm" class="form-control" placeholder="enter last name" required><br>
				<input type="email" name="txtem" class="form-control" placeholder="enter email" required><br>
				<input type="password" name="txtpwd" class="form-control" placeholder="enter password" requried><br>
				<input type="text" name="txtco" class="form-control" placeholder="enter contact"  required><br>
				<input type="date" name="txtbr" class="form-control" placeholder="enter birth date" required><br>
				
				<input type="submit" class="btn btn-success w-100" value="register">
			</div>
		</form>
	</body>
			
	