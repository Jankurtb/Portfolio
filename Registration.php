<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
      color: #ffab91;
      text-decoration:none;
    }

    @media screen and (max-width: 575.98px) {
    .card {
        position: absolute;
        width:80%;
        height: 80vh;
        background: url('./Images/login1.jpg') 53% 100%; 
    }
    .left-side {
      display: none;
    }

    .overlay {
      position: absolute;
      top: 150px;
      left: 15%;
    }
    .overlay-1{
      position: relative;
      bottom: 20%;
      right: 8%;
    }

    .overlay-3 {
      position: relative;
      right: 95px;
    }

    .overlay-1 h1 {
      color: #fff;
    }

    .overlay-4 a {
      color: teal;
    }

    .overlay-4 a:hover {
      color: #fff;
      text-decoration: none;
    }
    
  }

  </style>
</head>

<body>
    <div class="container ">
      <div id="Registration" class=" vh-100 d-flex align-items-center justify-content-center">
          <div class="card">
            <div class="row justify-content-center">
              <!-- Left Side -->
              <div class="col-md-5">
                  <div class="left-side">
                    <div class="left-side-text ml-5">
                      <h1>Welcome back!</h1>
                      <p class="p2">To keep connected with us please <br> login with your personal information </p>
                      <a href="login.php" class="btn btn-default btn-sign-in">Sign in</a>
                    </div>
                  </div>
              </div>

              <!-- Right side -->
              <div class="col md-7">
                <div class="overlay d-flex flex-column "> 
                  <div class="overlay-1">
                    <h1 class="text-center">Create Account</h1>
                  </div>
                  
                  <div class="overlay-2 mt-5">
                      <form action="addUser.php" method="POST" id="Form">
                      <?php
                        if(isset($_SESSION['msg']) && $_SESSION['msg'] != '')
                        {
                          echo "<div class='alert alert-danger ml-5 mt-2' role='alert'>
                                  ".$_SESSION['msg']."!
                                </div>";
                          unset($_SESSION['msg']);
                        }
                      ?>
                        <!-- Name -->
                        <div class="input-group mb-3 mr-2">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                              <i class="fas fa-user"></i>
                            </span>
                          </div>
                          <input type="text" id="name" class="form-control p-4 mr-5" placeholder="Name" name="full_name" required autofocus>
                        </div>
                        <!-- Email -->
                        <div class="input-group mb-3 mr-2">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                              <i class="fas fa-envelope"></i>
                            </span>
                          </div>
                          <input type="email" id="email" class="form-control check_email p-4 mr-5" placeholder="Email" name="email"  required autofocus>
                        </div>
                        <small class="error_email" style="color:red;"> </small>
                          
                        <!-- Password -->
                        <div class="input-group mb-3 mr-2">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                              <i class="fas fa-lock"></i>
                            </span>
                          </div>
                          <input type="password" id="password" class="form-control p-4 mr-5" placeholder="Password" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required >
                    </div>
                  <div class="overlay-4">
                    <a href="login.php">Already have an account? Sign in here</a>
                  </div>
                  <div class="overlay-3 text-center">
                    <button name="submit" type="submit" id="reg_btn" class="btn btn-default">Submit </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </card>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        password1 = $('#password').val();
        password2 = $('#c_password').val();
        email = $('.check_email').val();

        if(password == '') {
          $('.error_pass').text('Please enter a password'); 
          return false;
        }
      

        $('.check_email').blur(function(e) {
          email = $('.check_email').val();
          $.ajax({
            type: "POST",
            url: "addUser.php",
            data: {
              "check_submit_btn": 1,
              "email_id": email
            },
            success: function(response) {
              $('.error_email').text(response); 
            }
          });
        });

        $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
          input.attr("type", "text");
        } else {
          input.attr("type", "password");
        }
        });

      });

      
    </script>
    

</body>
</html>