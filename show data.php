<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> STUDENT DATABASE!</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"  integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
      
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
      
    </script>
    <link rel="stylesheet" type="text/css" href="show_data.css">

</head>
<body>
	<br><br>
	<h1> STUDENT APPLICATIONS </h1>
	<br>

	<table border="3" class="table">
		<thead>

			<tr>

				<th>Sr.No.</th>
				<th>Name</th>
				<th>User Name</th>
				<th>E-Mail</th>
				<th>Phone No.</th>
				<th>Gender</th>
				<th>Password</th>

			</tr>

		</thead>z
		<tbody>

		<?php 

			include 'database.php';

			$view = mysqli_query($con,"SELECT * FROM regis_data") or die(mysqli_error($con));

			$row = 0;

			while ($fetch = mysqli_fetch_array($view)) {

				extract($fetch);

				?>

				<tr>

					<td> 
						<?php  echo ++$row;  ?>
					</td>

					<td> 
						<?php  echo $fetch['Name'];  ?>
					</td>

					<td> 
						<?php  echo $fetch['U_Name'];  ?>
					</td>

					<td> 
						<?php  echo $fetch['E_mail'];  ?>
					</td>

					<td> 
						<?php  echo $fetch['Mobile'];  ?>
					</td>

					<td>
						<?php  echo $fetch['Gender'];  ?>
					</td>

					<td> 
						<?php  echo $fetch['Password'];  ?>
					</td>

					<td>
						<a onclick="return conform('update this record!')" href="Update.php?$update_Id=<?php echo $row; ?>"> <i class="glyphicon glyphicon-edit"></i></a>
					</td>
					<td>
						<a onclick="return conform('update this record!')" href="Delete.php?$delete_Id=<?php echo $row; ?>"> <i class="glyphicon glyphicon-trash"></i></a>
					</td>
				</tr>
			<?php  }  ?>
		</tbody>
	</table>
</body>
</html>