<?php
include('security.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" /> 
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"> 
    <link rel="stylesheet" href="sidebar.css">
</head>
<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark border-right" id="sidebar-wrapper">
      <div class="sidebar-heading  mt-4 p-5">
        <h1>   <?php echo $_SESSION['name']; ?> </h1>
        <p>
          <?php echo $_SESSION['email']; ?> 
        </p>
      
      </div>
      <div id="menu">
        <p class="ml-2">MAIN MENU</p>
      </div>
      <div class="list-group list-group-flush">
        <ul class="list-unstyled components"> 
          <li>
            
            <?php
              echo $_SESSION['user_type'] == 'admin' ? "<a href='index.php' class='p-3 d-block active'>Home</a>" : "<a href='editInfo.php' class='p-3 d-block active'>Edit Information</a>";
            ?>
          </li>
          <li>
            <a href="logout.php" class="p-3  d-block">Logout</a>
          </li>
        </ul>
          
        
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar  navbar-default navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">
            <i class="fas fa-bars"></i>
        </button>
      </nav>
    
    <!-- Content -->
      <div class="container">
      <?php
        if(isset($_SESSION['message']) && $_SESSION['message'] != '')
        {
          echo "<div class='alert alert-success mt-5' role='alert'>
                  ".$_SESSION['message']."!
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                  </button>
                </div>";
          unset($_SESSION['message']);
        }
      ?>
        <div class="table-responsive mt-5">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
							$sql = "SELECT * from developer";
							$result = mysqli_query($con, $sql);

							if(mysqli_num_rows($result) > 0){
							?>
              <?php while($row = mysqli_fetch_array($result)) : ?>
              <tr>
                <td><?php echo $row[1]; ?> </td>
                <td><?php echo $row[2]; ?> </td>
                <td>
                  <?php 
                    echo $row[4] == '1' ? 'Active' : 'Temporary';
                    $name = $row[1];
                    $email = $row[2];
                    $status = $row[4];
                  ?> 
                </td>
                <td>
                  <a href="#" class="btn btn-warning edit-modal" data-target="#myModal" data-toggle="modal" data-id="<?php echo $row[0];?>" data-name="<?php echo $name; ?>" data-email="<?php echo $email; ?>" data-status="<?php echo $status; ?>">Edit</a>
                  <a href="#" class="btn btn-danger delete-modal"  data-target="#myModal" data-toggle="modal" data-id="<?php echo $row[0]; ?>">Delete</a>
                </td>
              </tr>
						<?php endwhile; ?>

						<?php
							}
						?>
            </tbody>
          </table>

          <!-- Modal -->
       <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="POST">
                    <div class="form-info">
                      <input type="text" class="form-control" id="id" name="id" required>
                    <div class="form-group">
                      <label class="col-form-label">Full Name</label>
                      <input type="text" class="form-control" id="name" name="full_name" required>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Email </label>
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Status </label>
                      <!-- <input type="text" class="form-control" id="status" name="status" required> -->
                      <select name="status" id="status" class="form-control">
                        <option value="1">Activate</option>
                        <option value="0">Temporary</option>
                      </select>
                    </div>
                    </div>
                    <div class="hidden">
                      <p>Are you sure you want to delete this?</p>
                    </div>
                 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary actionBtn">Save changes</button>
                    <button type="button" class="btn btn-danger deletes" data-dismiss="modal"> Delete </button>
                  </form>
                </div>
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
                  setTimeout("window.location = '/Jankurt/index.php'",100);
          });
          }
        });
    });

    $(document).on('click', '.delete-modal', function() {
      $('#id').val($(this).data('id'));
      $('#myModal').show();
      $('.form-info').hide();
      $('.actionBtn').hide();
      $('.deletes').show();
      $('.hidden').show();
      $('.modal-title').text('Delete');
      $('.deletes').removeClass('actionBtn');
      id = $('#id').val();
    });

    $(document).on('click', '.deletes', function() {
      $.ajax({
        type: 'POST',
        url:  'deleteInfo.php',
        data: {
          'user_id': id,
        },
        success: function(data) {
          $(document).ajaxStop(function(){
                  setTimeout("window.location = '/Jankurt/index.php'",100);
          });
          }
        });
    });

    
  </script>
</body>
</html>