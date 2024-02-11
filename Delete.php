<?php 
  
  include 'connect.php';
if (isset($_GET['$delete_Id']))
{

  $del = $_GET['$row'];
  $del = $del - 1;

  $query = "delete from student where `id` ='".$del."'";
  
  $delete = mysqli_query($con,$query) or die(mysqli_error($con));


  if($delete)
  {
    echo "<script>";
    echo "window.alert('record deleted!!');";
    echo "window.location.href='dashboard.php';";
    echo "</script>";
  }
  else
  {
    echo "<script>";
    echo "window.alert('record deletion error!!');";
    echo "</script>";
  }


}

?>