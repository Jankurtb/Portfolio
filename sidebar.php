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
              echo $_SESSION['user_type'] == 'admin' ? "<a href='index.php' class='p-3 d-block active'>Users</a>" : "<a href='editInfo.php' class='p-3 d-block active'>Edit Information</a>";
            ?>
          </li>
          <li>
            <a href="settings.php" class="p-3  d-block">Account Settings</a>
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