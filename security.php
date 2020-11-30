<?php
session_start();
include('database.php');

if(!$_SESSION['email']){
    header('Location: login.php');
}

?>