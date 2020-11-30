<?php
include('security.php');

$success = array();
$err = array();

if(isset($_POST['update'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $user_id = $_POST['user_id'];
  $password = $_POST['password'];
  $password2 = $_POST['confirm_password'];

  if($password != $password2) {
    array_push($err,"Password do not match");
  }

  $sql = "UPDATE developer SET full_name='$name', email='$email', user_pass='$password' WHERE user_id='$user_id' ";
  $result = mysqli_query($con, $sql);
  $_SESSION['name'] = $name;
  $_SESSION['email'] = $email;
  $_SESSION['password'] = $password;
  $_SESSION['status'] = 'Successfully Updated!';
  array_push($success,"Successfully Updated!");
  header("Location: editInfo.php");
  
}


?>  