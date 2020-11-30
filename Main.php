<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"> 

    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .container-fluid {
          margin: 0;
          padding: 0;
        }
        @media (min-width: 1200px) {
            .navbar {
              width:100%;
            }
         }
         .btn-register {
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
         .jumbotron {
          background: url("./Images/contact.jpg") 70% 60%;
          background-size: cover;
          }
          #Team i{
            font-size: 26px;
            color: #555;
          }
          #team p {
            font-weight: 500;
          }
    </style>
</head>
<body>  
    <div class="container-fluid">
      <!-- Header -->
      <?php include('Navbar.html'); ?>
      <!-- Carousel -->
      <div class ="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./Images/nature3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Mountains</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./Images/nature4.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Mountains</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./Images/nature8.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Mountains</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <!-- Cards -->
      <section id="Team">
        <div class="containter my-3 py-5 text-center">
          <!-- Heading -->
          <div class="row mb-5">
            <div class="col">
              <h1>My Projects</h1>
              <p class="mt">It is a long established fact that reader will be distracted by the readable content of a page when looking at its layout
              </p>
            </div>
          </div>
          <!-- Cards -->
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12 mb-1">
                <div class="card">
                  <div class="card-body">
                    <img src="./Images/prog.jpg" class="img-fluid rounded-circle w-50 mb-3">
                    <h3>Jan Kurt</h3>
                    <h5>Lead programmer</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, ut mollitia earum </p>
                    <div class="d-flex flex-row justify-content-center">
                      <div class="p-4">
                        <a href="#">
                          <i class="fab fa-facebook"></i>
                        </a>
                      </div>
                      <div class="p-4">
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </div>
                      <div class="p-4">
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 col-sm-12 mb-1">
                <div class="card">
                  <div class="card-body">
                    <img src="./Images/prog.jpg" class="img-fluid rounded-circle w-50 mb-3">
                    <h3>Jan Kurt</h3>
                    <h5>Lead programmer</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, ut mollitia earum </p>
                    <div class="d-flex flex-row justify-content-center">
                      <div class="p-4">
                        <a href="#">
                          <i class="fab fa-facebook"></i>
                        </a>
                      </div>
                      <div class="p-4">
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </div>
                      <div class="p-4">
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 col-sm-12 mb-1">
                <div class="card">
                  <div class="card-body">
                    <img src="./Images/prog.jpg" class="img-fluid rounded-circle w-50 mb-3">
                    <h3>Jan Kurt</h3>
                    <h5>Lead programmer</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, ut mollitia earum </p>
                    <div class="d-flex flex-row justify-content-center">
                      <div class="p-4">
                        <a href="#">
                          <i class="fab fa-facebook"></i>
                        </a>
                      </div>
                      <div class="p-4">
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </div>
                      <div class="p-4">
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 col-sm-12 mb-1">
                <div class="card">
                  <div class="card-body">
                    <img src="./Images/prog.jpg" class="img-fluid rounded-circle w-50 mb-3">
                    <h3>Jan Kurt</h3>
                    <h5>Lead programmer</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, ut mollitia earum </p>
                    <div class="d-flex flex-row justify-content-center">
                      <div class="p-4">
                        <a href="#">
                          <i class="fab fa-facebook"></i>
                        </a>
                      </div>
                      <div class="p-4">
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </div>
                      <div class="p-4">
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Us -->
    </div>

<?php include('Script.html'); ?>
</body>
</html>