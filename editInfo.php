<?php
include('security.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"> 
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="button.css">
    
</head>
<body>
    


<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>
    
    <!-- Content -->
      <div class="container">
        <div class="card mt-5 p-5">
          <div class="card-body">
            <form action="updPersonal.php" method="POST">
              <div class="d-flex flex-column">
                <?php
                    if(isset($_SESSION['status']) && $_SESSION['status'] != '')
                    {
                      echo "<div class='alert alert-success' role='alert'>
                              <i class='fas fa-check mr-2'> </i>".$_SESSION['status']."!
                              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                              </button>
                            </div>";
                      unset($_SESSION['status']);
                    }
                ?>
                <h3>Personal Information</h3>
                <input type="hidden" value="<?php echo $_SESSION['user_id']; ?>" name="user_id" class="form-control col-md-6" placeholder="Enter full name">
                <label for="full name">Name</label>
                <input type="text" value="<?php echo $_SESSION['name']; ?>" name="name" class="form-control col-md-6" placeholder="Enter full name">
                <label for="email" class="mt-3">Email</label>
                <input type="email"  value="<?php echo $_SESSION['email']; ?>" name="email" class="form-control col-md-6" placeholder="Enter email">
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


<?php include('Script.html'); ?>
<script>
     $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
</script>
</body>
</html>