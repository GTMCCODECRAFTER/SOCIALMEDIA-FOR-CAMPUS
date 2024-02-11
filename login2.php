
<?php 
	
	include 'connect.php';

	$view = mysqli_query($con,"SELECT `email` FROM `admin`") or die(mysqli_error($con));

			$row = 0;

			while ($fetch = mysqli_fetch_array($view)) {

				extract($fetch);

	if(isset($_POST['login']))
	{
		extract($_POST);


		if($user == $fetch['email'])
		{
			$p = mysqli_query($con,"SELECT `pass` FROM `admin` WHERE `email` ='$user'") or die(mysqli_error($con));

			while ($fetch1 = mysqli_fetch_array($p)) 
			{
				extract($fetch1);
				if($pass == $fetch1['pass'])
				{

					echo "<script>";
					echo "window.alert('Login Successful');";
	  				echo "window.location.href='posts.html'";
       				echo "</script>";

					//code of the logged in form page   !!!!!!!!!!!!!!!

				}
				else
				{
					echo "<script>";
					echo "window.alert('Wrong Password!!!');";
	  				echo "window.location.href='Login.html'";
       				echo "</script>";
				}
			}
			
		}
		
	}


	if(isset($_POST['register']))
	{

	   echo "<script>";
	   echo "window.location.href='Register.html'";
       echo "</script>";

  	}
   
}
?>