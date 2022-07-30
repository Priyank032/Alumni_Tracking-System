<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto " href="index.php">Home</a></li>
        <li><a class="nav-link scrollto" href="about.php">About</a></li>
        <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
        <li><a class="nav-link scrollto " href="gallery.php">Gallery</a></li>
        <li><a class="nav-link scrollto " href="./user_pages_after_login/event.php">Events</a></li>
        <li><a class="nav-link scrollto " href="./user_pages_after_login/All_jobs.php">Jobs</a></li>
        <li><a class="nav-link scrollto " href="./user_pages_after_login/notice.php">Notices</a></li>
        <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
        <!-- <li><a class="nav-link scrollto" href="notice.php">Notice</a></li>
          
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li> -->
        <?php
          if(!isset($_SESSION['alumini']))
          { ?>

        <li><a class="getstarted scrollto" href="../register.php">Sign Up</a></li>
        <li><a class="getstarted scrollto" href="../login.php">Login</a></li><?php
          } else{ ?>
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle ml-4" type="button" data-toggle="dropdown">Profile
            </button>
            <ul class="dropdown-menu">
                <li><a href="./user_pages_after_login/profile.php">View Profile</a></li>
                <li><a href="updateProfile.php">Update Profile</a></li>
                <li><a href="logout.php">Logout</a></li>

            </ul>
        </div><?php
          }
          ?>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->