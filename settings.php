<?php
include('security.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"> 
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="button.css">
    <style>
      @media screen and (max-width: 575.98px) {
        #wrapper {
          overflow-x: hidden;
          }

          #sidebar-wrapper {
          min-height: 100vh;
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
            position: relative;
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
      }
    </style>
</head>
<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>
    
    <!-- Content -->
      <div class="container">
      <div class="card mt-5 p-5">
          <div class="card-body">
            <form action="updSettings.php" method="POST">
              <div class="d-flex flex-column">
                <?php
                    if(isset($_SESSION['status']) && $_SESSION['status'] != '')
                    {
                      echo "<div class='alert alert-danger' role='alert'>
                              <i class='fas fa-close mr-2'> </i>".$_SESSION['status']."!
                              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                              </button>
                            </div>";
                      unset($_SESSION['status']);
                    }
                    else if (isset($_SESSION['success']) && $_SESSION['success'] != '')
                    {
                      echo "<div class='alert alert-danger' role='success'>
                              <i class='fas fa-close mr-2'> </i>".$_SESSION['success']."!
                              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                              </button>
                            </div>";
                      unset($_SESSION['success']);
                    }
                ?>
                <h3>Change password</h3>
                <input type="hidden" value="<?php echo $_SESSION['user_id']; ?>" name="user_id">
                <label for="password" class="mt-3">Password</label>
                <input type="password" class="form-control col-md-6" name="password"  placeholder="Enter password" required>
                <label for="password" class="mt-3">Confirm Password</label>
                <input type="password" class="form-control col-md-6" name="confirm_password" placeholder="Confirm password" required>
              </div>
              <div>
                <button type="update" name="update" class="btn btn-default mt-3">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
    </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->


<!-- Scripts -->
<?php include('Script.html'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

    $(document).on('click', '.edit-modal', function() {
      $('#name').val($(this).data('name'));
      $('#email').val($(this).data('email'));
      $('#status').val($(this).data('status'));
      $('#id').val($(this).data('id'));
      id = $('#id').val();
      $('#myModal').show();
      $('.hidden').hide();
      $('.form-info').show()
      $('.actionBtn').show();
      $('.deletes').hide();
      $('.modal-title').text('Edit information');
    });

    $(document).on('click', '.actionBtn', function() {
      $.ajax({
        type: 'POST',
        url:  'updateInfo.php',
        data: {
          'user_id': id,
          'name': $('#name').val(),
          'email': $('#email').val(),
          'status': $('#status').val(),
        },
        success: function(data) {
          $(document).ajaxStop(function(){
                  setTimeout("window.location = '/includes/includes/index.php'",100);
          });
          }
        });
    });


    
  </script>
</body>
</html>