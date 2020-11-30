<?php
session_start();
include('security.php');


if(isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password = md5($password);
    $sql = "SELECT * FROM developer WHERE email='".$email."' and user_pass='".$password."' and is_active='1'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $rowCheck = mysqli_num_rows($row);


    if($row > 0 ) {
      
      if($row['user_type'] == 'admin') {
        
        $_SESSION['name'] = $row['full_name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_type'] = $row['user_type'];
        $_SESSION['user_id'] = $row['user_id'];
        header('Location: index.php');
      }
      else if ($row['user_type'] == 'user' ) {
        $_SESSION['name'] = $row['full_name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_type'] = $row['user_type'];
        $_SESSION['user_id'] = $row['user_id'];
        header('Location: editInfo.php');
      }
      else {
          $_SESSION['status'] = 'Please make sure that you enter the correct details and that you have activated your account';
          header('Location: login.php');
      }
    }
    else {
      $_SESSION['status'] = 'Please make sure that you enter the correct details and that you have activated your account';
      header('Location: login.php');
    }
}



?>