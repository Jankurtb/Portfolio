<?php
include('security.php');

if($_POST['user_id']) {
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $status = mysqli_real_escape_string($con, $_POST['status']);
  $user_id = mysqli_real_escape_string($con, $_POST['user_id']); 

  $sql = "UPDATE developer SET full_name='$name', email='$email', is_active='$status' WHERE user_id='$user_id' ";
  $result = mysqli_query($con, $sql);
  $_SESSION['message'] = "Successfully updated";
}

?>  