<?php
  include('database.php');
  $err = array();
  if(isset($_POST['check_submit_btn'])){
    $email =  mysqli_real_escape_string($con, $_POST['email_id']);
    $email_query = "SELECT * FROM developer WHERE email='".$email."'";
    $result = mysqli_query($con, $email_query);
    $fetch1 = mysqli_num_rows($result);

    if($email != '') {
      if($fetch1 > 0) {
        $_SESSION['msg'] = "Email already taken";
        echo 'Email Already Taken.';
        return false;
      }
    }
    else {
      echo "Please enter a valid email address";
      return false;
    }
  }


  if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['full_name']);  
    $email = mysqli_real_escape_string($con,$_POST['email']);  
    $password = mysqli_real_escape_string($con, $_POST['password']);  
    $password = md5($password);

    $sql = "SELECT * FROM developer WHERE email='".$email."'";
    $res = mysqli_query($con, $sql);
    $fetch = mysqli_num_rows($res);
    if($fetch > 0) { 
      $_SESSION['msg'] = "Email already taken";
      header('Location: Registration.php');
    }
    else {
      $insert = "INSERT INTO developer(full_name, email, user_pass, is_active, user_type) VALUES ('$name', '$email', '$password', '0', 'user')";
      $result= mysqli_query($con, $insert);
      header('Location: thankyou.php');
    }

  }      
?>