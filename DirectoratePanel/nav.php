<?php
// session_start();
require "../dbcon.php";

if(!isset($_SESSION['director']))
{
    header("location:../login.php");
}

?>
<nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">College</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
            <div class="profile-details">
                <!--<img src="images/profile.jpg" alt="">-->
                <span class="admin_name"><?php
                $sql = "select * from dir";
                $result=mysqli_query($db,$sql);
                $rows=mysqli_fetch_array($result);
                echo $rows["id"];
                ?></span>
                <i class='bx bx-chevron-down'></i>
            </div>
        </nav>