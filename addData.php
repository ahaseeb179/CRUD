<?php

	include 'conn.php';
	if (isset($_POST['submit']))
	{
		# code...
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$age = $_POST['age'];
		$location = $_POST['location'];
		$date = $_POST['date'];
		
		$q = "INSERT INTO `crud` (`firstname`, `lastname`, `email`, `password`, `age`, `location`, `date`) VALUES ('$firstname','$lastname','$email','$password','$age','$location','$date')";
		$query = mysqli_query($con,$q);
		header('location:data.php');

	}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 	<br><br>
</head>
<body>
	<div class="col-lg-6 m-auto">
		<form method="POST">
			<div class="card">
				<div class="card-header bg-dark">
					<h1 class="text-white text-center"> Submission Form </h1>	
				</div>
				<br><br>
				<label> First Name </label>
				<input type="text" name="firstname" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname'];?>"> </br> </br>

				<label> Last Name </label>
				<input type="text" name="lastname" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname'];?>"> </br> </br>

				<label> Email </label>
				<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>"> </br> </br>

				<label> Password </label>
				<input type="password" name="password"> </br> </br>

				<label> Age </label>
				<input type="text" name="age" value="<?php if(isset($_POST['age'])) echo $_POST['age'];?>"> </br> </br>

				<label> Location </label>
				<input type="text" name="location" value="<?php if(isset($_POST['location'])) echo $_POST['location'];?>"> </br> </br>

				<label> Date </label>
				<input type="Date" name="date" value="<?php if(isset($_POST['date'])) echo $_POST['date'];?>"> </br> </br>

				<button class="btn btn-success" type="submit" name="submit"> Submit </button> <br><br>

			</div>
			
		</form>
		

	</div>

</body>
</html>