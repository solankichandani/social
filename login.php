<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.1/css/bootstrap.min.css"/>
<?php
	$con=mysqli_connect("localhost","root","","form_");
	if(!$con)
	{
			echo "errro";
	}
	else
	{
		if(isset($_POST['txtmail']))
		{
			$mail=$_POST['txtmail'];
			$pwd=$_POST['txtpwd'];
			$sql="SELECT * from `form_mgt` where email='$mail' and password='$pwd'";
			$res=mysqli_query($con,$sql);
			$count = mysqli_affected_rows($con);
			if($count == 1)
			{
				session_start();
				$_SESSION['form_mgt']=$mail;
				if(isset($_SESSION['form_mgt']))
				header("location:home1.php");
				
			}
			else
			{
				echo("invelid username or password!");
			}
		}
			
	}
?>
<html>
	<head>
		<title> LOGIN PAGE </title>
	</head>
	<body>
		<div class="cantainer mt-3">
			<form action="login.php" method="POST">
				<u><center><h3> LOGIN PAGE </h3></u></center>
				<input type="email" name="txtmail" class="form-control" placeholder="enter mail address" requried><br>
				<input type="password" name="txtpwd" class="form-control" placeholder="enter password" requried><br>
				<input type="submit"  class="btn btn-primary w-100" value="login">
			</form>
		</div>
</html>