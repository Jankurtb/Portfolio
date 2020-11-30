<?php
include('security.php');



$err = array();

function multiplicationTable table() {
  
}







Language
PHP           echo "Hello World!";
Python        print("");



void MyFunction();

void MyFunctoin(int number, int number2) {
 
  return this.number + this.number2

}

if () {

MyFunction() 

}

if(isset($_POST['update'])) {
  $user_id = $_POST['user_id'];
  $password = $_POST['password'];
  $password2 = $_POST['confirm_password'];

  if($password != $password2) {
    $_SESSION['status'] = 'Password do not match';
    header("Location: settings.php");
    return false;
  }
  else {
    $password = md5($password);
    $sql = "UPDATE developer SET user_pass='$password' WHERE user_id='$user_id' ";
    $result = mysqli_query($con, $sql);
    $_SESSION['password'] = $password;
    $_SESSION['success'] = 'Successfully Updated!';
    header("Location: settings.php");
  }
}

