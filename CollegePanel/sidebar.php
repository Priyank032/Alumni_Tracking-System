
<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Panel</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="college.php" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
            <a href="allalumni.php">
              <i class='bx bx-box' ></i>
              <span class="links_name">All Alumni</span>
            </a>
          </li>
        <!-- <li>
          <a href="SearchAlumni.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Search Alumni</span>
          </a>
        </li> -->
        <li>
          <a href="VerifyA.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Verify Alumni</span>
          </a>
        </li>
        <li>
            <a href="Allevent.php">
              <i class='bx bx-list-ul' ></i>
              <span class="links_name">All Events</span>
            </a>
          </li>
          <li>
            <a href="Alljobs.php">
              <i class='bx bx-message' ></i>
              <span class="links_name">All Jobs</span>
            </a>
          </li>
          <li>
            <a href="MailSend.php">
              <i class='bx bx-message' ></i>
              <span class="links_name">Mail</span>
            </a>
          </li>
        <!-- <li>
          <a href="delete_alumni.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Delete  Alumni</span>
          </a>
        </li> -->
        <li class="log_out">
          <a  href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name" onclick="return confirm('Are you sure you want to Log out?');">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Alumni</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name"><?php echo $_SESSION['college'] ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
 <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->