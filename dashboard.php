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
    <link rel="stylesheet" type="text/css" href="dashboard.css">

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
				<th>E-Mail</th>
				<th>Password</th>
				<th>Id's</th>
			</tr>

		</thead>
		<tbody>

		<?php 

			include 'connect.php';

			$view = mysqli_query($con,"SELECT * FROM student") or die(mysqli_error($con));

			$row = 0;

			while ($fetch = mysqli_fetch_array($view)) {

				extract($fetch);

				?>

				<tr>

					<td> 
						<?php  echo ++$row;  ?>
					</td>

					<td> 
						<?php  echo $fetch['name'];  ?>
					</td>

					<td> 
						<?php  echo $fetch['email'];  ?>
					</td>

					<td> 
						<?php  echo $fetch['pass'];  ?>
					</td>

					<td> 
						<?php  echo $fetch['photo'];  ?>
					</td>

					
					<td>
						<a onclick="return conform('update this record!')" href="Update.php?$update_Id=<?php echo $Sr_No; ?>"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
</svg></a>
					</td>
					<td>
						<a onclick="return conform('update this record!')" href="delete.php?$delete_Id=<?php echo $Sr_No; ?>"> <i class="glyphicon glyphicon-trash"></i></a>
					</td>
				</tr>
			<?php  }  ?>
		</tbody>
	</table>
</body>
</html>