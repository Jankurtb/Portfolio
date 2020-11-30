<?php
session_start();

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
    .card {
      position: absolute;
      width: 65%;
      box-shadow: 0 0 100px rgba(0, 0, 0, 0.2);
      border-radius: 15px;
      height: 70%;
    }
    .left-side {
      background: url('./Images/login1.jpg') 70% 80%;
      background-size: cover;
      height: 70vh;
    }
    .left-side-text {
      position: absolute;
      top: 30%;
      color: #ffffff;
    }
    .left-side .btn-sign-in {
      border-radius:  15px;
      width: 30px;
      background-color: transparent;
      border: 2px solid #ffab91;
    }

    .overlay {
      position: relative;
      top: 20%;
    }
    .form-control {
      /* padding: 25px; */
    }
    .btn-default {
      background-color: #ffab91;
      font-size: 12px;
      font-weight: 800;
      text-align: center;
      border-radius: 2px;
      line-height: 16px;
      height: 41px;
      padding: 12px 0;
      position: relative;
      min-width: 129px;
      max-width: 220px;
      color: #ffffff;
      z-index: 0;
      text-overflow: ellipsis;
      cursor: pointer;
      display: inline-block;
      margin: 20px 15px;
      transition: color 300ms cubic-bezier(0.06, 0.81, 0, 0.98);
      vertical-align: middle;
      font-size: 12px;
      text-transform: uppercase;
    }
    .overlay-1 h1 {
      color: #ffab91;
    }
    .overlay-4 a {
      color: teal;
    }
    .overlay-4 a:hover {
      text-decoration: none;
      color: #ffab91;
    }
    @media screen and (max-width: 575.98px) {
    .card {
        position: absolute;
        width:80%;
        height: 80vh;
        background: url('./Images/login1.jpg') 60% 100%; 
    }
    .left-side {
      display: none;
    }

    .overlay {
      position: relative;
      top: 150px;
      padding-right: 40px;
    }
    .overlay-1 {
      position: relative;
      right: 20%;
    }
    .overlay-3 {
      position: relative;
      margin-right: 140px;
    }
    .overlay-4 {
      position: relative;
      margin-right: 15px;
    }
    .overlay-4 a {
      color: teal;
    }
    .overlay-4 a:hover {
      text-decoration: none;
      color: #fff;
    }
  }


  </style>
</head>

<body>
    <div class="container ">
      <div id="Registration" class=" vh-100 d-flex align-items-center justify-content-center">
          <div class="card">
            <div class="row justify-content-center">
              
              
             
              <!-- Right side -->
              <div class="col md-7">
                <div class="overlay d-flex flex-column "> 
                  <div class="overlay-1">
                    <h1 class="text-center">Sign in</h1>
                  </div>    
                  <?php
                    if(isset($_SESSION['status']) && $_SESSION['status'] != '')
                    {
                      echo "<div class='alert alert-danger ml-5 mt-2' role='alert'>
                              ".$_SESSION['status']."!
                            </div>";
                      unset($_SESSION['status']);
                    }
                  ?>
                  <div class="overlay-2 mt-5">

                      <form action="code.php" method="POST" id="Form">
                        <!-- Email -->
                        <div class="input-group mb-3 ml-5">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                              <i class="fas fa-envelope"></i>
                            </span>
                          </div>
                          <input type="email" id="email" class="form-control check_email p-4 mr-5" placeholder="Email" name="email" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <!-- Password -->
                        <div class="input-group mb-3 ml-5">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                              <i class="fas fa-lock"></i>
                            </span>
                          </div>
                          <input type="password" id="password" class="form-control p-4 mr-5" placeholder="Password" name="password" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                  <div class="overlay-4 text-center">
                    <a href="Registration.php">Don't have an account? Sign up now</a>
                  </div>
                  <div class="overlay-3 text-center">
                    <button name="submit" type="submit" id="reg_btn" class="btn btn-default">Submit </button>
                    </form>
                  </div>
                </div>
              </div>
                <!-- Left Side -->
              <div class="col-md-5">
                <div class="left-side">
                  <div class="left-side-text ml-5">
                    <h1>Hello, Friend!</h1>
                    <p class="p2">Start your journey with us </p>
                    <a href="Registration.php" class="btn btn-default btn-sign-in">Sign up</a>
                  </div>
                </div>
              </div>
              
            </div>
          </card>
        </div>
      </div>


</body>
</html>