<?php
  
include 'connect.php';

if(isset($_POST['submit'])){
  
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $pass = $_POST['pass'];

  $image = $_FILES['img']['name'];
  $image_extension = explode(".", $image);

  $ocp = $_POST['ch'];

  if($ocp == "Student"){

    $insert = "INSERT INTO `student`(`name`, `email`, `pass`, `photo`) VALUES ('$name','$mail','$pass','$image');";

    $add = mysqli_query($con,$insert) or die (mysqli_error($con));

}
else{

  $insert = "INSERT INTO `admin`(`name`, `email`, `pass`, `photo`) VALUES ('$name','$mail','$pass','$image');";

}

  if($add)
  {

   move_uploaded_file($_FILES['img']['tmp_name'], "ids/".$_FILES['img']['name']) ;
   echo "<script>";
   echo "window.alert('record insert successfully!!');";
   echo "window.location.href='login.html'";
   echo "</script>";

  }
  else
  {
    echo "<script>";
    echo "window.alert('Record not inserted ...!);";
    echo "</script>";
  }

}


?>
  


