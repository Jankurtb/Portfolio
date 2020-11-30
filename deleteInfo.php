<?php
include('security.php');

if($_POST['user_id']) {
  $id = $_POST['user_id'];
  $sql = "DELETE FROM developer WHERE user_id = '$id'";
  $result = mysqli_query($con, $sql);
  header("Location: index.php");
}

?>