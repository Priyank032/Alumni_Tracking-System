
<?php
session_start();
require "../dbcon.php";

if(!isset($_SESSION['college']))
{
    header("location:../login.php");
}
?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
  <link rel="stylesheet" href="s.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <title>College Panel</title>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="register.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .mainadd {
      /* overflow-x: hidden; */
      overflow-y: hidden;
      padding-top: 130px;

    }

    h1 {
      color: rgb(57, 57, 97);
      padding: 12px;
    }

    h3 {
      padding: 7px;
      color: rgb(92, 113, 128);
    }

    h6 {
      padding: 5px;
      color: rgb(112, 37, 37);
    }
    .card{
      padding: 20px;
    }
    .card-body a{
      color: aliceblue;
      text-decoration: none;
      font-size: 21px;
      
    }
  </style>
</head>

<body>
<?php include "sidebar.php"?>

<div class="mainadd">
    <div class="container">
      <div class="row">
                                
        <div class="col-lg-4 mb-4">
            <div class="card bg-danger text-white shadow">
                <div class="card-body">
                   <a href="add.php">Add Alumni</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card bg-info text-white shadow">
                <div class="card-body">
                    <a href="VerifyA.php">Verify Alumni</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card bg-dark text-white shadow">
                <div class="card-body">
                  <a href="jobs.php">Add Job</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card bg-dark text-white shadow">
                <div class="card-body">
                   <a href="Event.php">Add Event</a>
                </div>
            </div>
        </div>
         <div class="col-lg-4 mb-4">
            <div class="card bg-info text-white shadow">
                <div class="card-body">
                  <a href="allalumni.php">All Alumni</a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 mb-4">
            <div class="card bg-danger text-white shadow">
                <div class="card-body">
                  <a href="Alljobs.php">All Jobs</a>
                </div>
            </div>
        </div> 
    </div>
  </div>
    </div>
    <br><br>
    <img src="img/pricing-ultimate.png"  alt="">
  </section>




  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  </script>

</body>

</html>