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

	<div class="container">
		<div class="col-lg-12">
			<br><br> 
				<h1 class= "text-white text-center bg-dark"> Submitted </h1>
				<br>
					<table class="table table-striped table-hover table-bordered">
						<tr class="bg-dark text-white text-center">
							<th> ID </th>
							<th> First Name </th>
							<th> Last Name </th>
							<th> Email </th>
							<th> Age </th>
							<th> Location </th>
							<th> Date </th>							
							<th> Update </th>
							<th> Delete </th>
						</tr>

	<?php

		include 'conn.php';
		
		$q = "SELECT * FROM `crud`";
		$query = mysqli_query($con,$q);

		while ($result = mysqli_fetch_array($query))
		{
			# code...		
	?>

						<tr class="text-center">
							<td> <?php echo $result['id']; ?> </td>
							<td> <?php echo $result['firstname']; ?> </td>
							<td> <?php echo $result['lastname']; ?> </td>
							<td> <?php echo $result['email']; ?> </td>
							<td> <?php echo $result['age']; ?> </td>
							<td> <?php echo $result['location']; ?> </td>
							<td> <?php echo $result['date']; ?> </td>
							<td> <button class="btn-success btn"> <a href="update.php?id=<?php echo $result['id'];?>" class= "text-white"> Update </a>  </button></td>
							<td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $result['id'];?>" class=" text-white"> Delete </a>  </button></td>
							
							
						</tr>
	<?php
		} 
	?>

					</table>		
		</div>	
	</div>
	<div align="center">
	<button class="btn-success btn"> <a href="addData.php" class="text-white text-center"> Add New Data </a> </button>
	</div>
</body>
</html>