<?php

	/*include 'conn.php';*/
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'loging');
	/*if($con)
	{
		echo 'Connected';
	}
	else
		echo 'Not Connected';*/

	if (isset($_POST['submit']))
	{
		# code...
		$uname = $_POST['uname'];
		$pass = $_POST['password'];

		$q = " SELECT * FROM `login` WHERE `username` = '$uname' AND `password` = '$pass' ";
		$query = mysqli_query($con,$q)

		
		if ($query['username'] == $uname && $query['password'] == $pass)
		{
		
			# code... 
			echo "Log in succesfull";
		}
		else
			echo "Try Again";
		
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
					<h1 class="text-white text-center"> Login Form </h1>	
				</div>
				<br><br>
				<label> Username </label>
				<input type="text" name="uname" placeholder="Enter Username" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname'];?>"> </br> </br>

				<label> Password </label>
				<input type="password" name="password" placeholder="Enter Password"> </br> </br>

				<button class="btn btn-success" type="submit" name="submit"> Submit </button> <br><br>

			</div>
			
		</form>
		

	</div>

</body>
</html>