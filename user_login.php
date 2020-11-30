<?php
include('security.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"> 
    <style>
      #wrapper {
      overflow-x: hidden;
      }

      #sidebar-wrapper {
      min-height: 100vh;
      margin-left: -15rem;
      -webkit-transition: margin .25s ease-out;
      -moz-transition: margin .25s ease-out;
      -o-transition: margin .25s ease-out;
      transition: margin .25s ease-out;
      background-color:#212121;
      }

      #sidebar-wrapper #menu p {
        color: #bdbdbd;
      }
      #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        color: #fff;
        font-family: 'Poppins', sans-serif;
      }

      #sidebar-wrapper .list-group {
        width: 15rem;
        color: #fff;       
        font-size: 20px; 
        font-family: 'Poppins', sans-serif;
      }
      #sidebar-wrapper ul {
        padding: 12px 0
      }

      #sidebar-wrapper ul li{
        border-top: 1px solid #484848;
        border-bottom: 1px solid #484848;
        width: 100%;
      }

      #sidebar-wrapper ul li a{
        color:#fff;
      }
      
      #sidebar-wrapper ul li a:hover {
        text-decoration: none;
        background-color: #8d8d8d;
        color: #efefef;
      }

      #sidebar-wrapper ul li .disable:hover {
        text-decoration: none;
      }

      #page-content-wrapper {
        min-width: 100vw;
      }

      #wrapper.toggled #sidebar-wrapper {
        margin-left: 0;
      }

      @media (min-width: 768px) {
      #sidebar-wrapper {
        margin-left: 0;
      }

      #page-content-wrapper {
        min-width: 0;
        width: 100%;
      }

      #wrapper.toggled #sidebar-wrapper {
        margin-left: -15rem;
      }
    }
    </style>
</head>
<body>
    


<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>
    
    <!-- Content -->
      <h1>Hello world</h1>






        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->


<?php include('Script.html'); ?>
</body>
</html>