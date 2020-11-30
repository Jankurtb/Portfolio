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
      background: url("./Images/thankyou2.jpg") 50% 65%;
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
     
      font-size: 22px;
      font-weight: 800;
      text-align: center;
      border-radius: 2px;
      line-height: 16px;
      height: 41px;
      padding: 10px 0;
      position: relative;
      min-width: 129px;
      max-width: 220px;
      color: #ffffff;
      z-index: 0;
      text-overflow: ellipsis;
      cursor: pointer;
      display: inline-block;
      transition: color 300ms cubic-bezier(0.06, 0.81, 0, 0.98);
      vertical-align: middle;
      text-transform: uppercase;
      border: none;
      
    }

    .btn-default:hover {
      border: 2px solid black;
      text-decoration: none;
      color: #707070;
      border-radius: 25px;
    }
    .overlay-1 h1 {
      color: #ffab91;
    }

    .overlay-2 {
      
    }
    .icon-like {
      
    }
    .icon-like i {
      font-size: 100px;
      border: 1px solid black;
      border-radius: 100px;
      background-color: #fff;
    }

  </style>
</head>

<body>
    <div class="container ">
      <div id="Registration" class=" vh-100 d-flex align-items-center justify-content-center">
          <div class="card">
            <div class="row justify-content-center">
                <div class="overlay d-flex flex-column "> 
                  <div class="overlay-2 mt-3">
                    <div class="icon-like text-center ">
                      <i class="p-5 far fa-thumbs-up"></i>
                    </div>
                    <div class="message text-center mt-4"> 
                      <h1>Thank you!</h1>
                      <h3>Account successfully created </h3>
                      <p>Please wait for the administrator to activate your account</p>
                      <a href="login.php" class="btn-default">Sign in</a>
                    </div>
                     
                  </div>
                </div>
              </div>
            </div>
          </card>
        </div>
    </div>

</body>
</html>