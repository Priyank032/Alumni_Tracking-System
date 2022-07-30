<?php
session_start();
require "../../dbcon.php";
  if(!isset($_SESSION['alumini']))
  { 
    echo "<script>alert('Please Login First')</script>";
       echo '<script> window.location.replace("../../login.php")</script>';
  } 
?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Document</title>
<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="" rel="stylesheet">
    <style>
    .mainadd {
        overflow-x: hidden;
        overflow-y: hidden;
        padding-top: 130px;
        /* background-color: #e9eef1; */

    }

    h1 {
        color: rgb(75, 133, 167);
        padding: 12px;
        font-weight: bold;
        font-size: 48px;
    }


    .bold-blue {
        font-weight: bold;
        color: #0277BD;
    }

    .last-noyte {
        color: red;
    }

    .card {
        margin: 20px;
        border-radius: 20px;
        box-shadow: 2px 2px 4px 2px rgb(228, 226, 226);
        padding: 10px;
    }

    .card-title {
        color: #0277BD;
        font-size: 25px;
    }
    </style>
</head>

<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">Alumini</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <?php
   include("nav2.php");
   ?>

        </div>
    </header><!-- End Header -->
    </header><!-- End Header -->

    <div class="mainadd">

        <div class="container">
            <h1>Important Notice</h1>
            <div class="row">
            <?php
                            $i=1;
                            $query="SELECT * FROM notice";
                            $result=mysqli_query($db,$query);
                            while ($row=mysqli_fetch_array($result)){
                        ?>
                <div class="col-lg-6">
                    <div class="card border-gray mb-3" style="width: 100%; height: 200px;">
                        <h3 class=" text-danger ml-4">Notice Update at : <?php echo $row['time']; ?></h3>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['subject']; ?></h5>
                            <p class="card-text"><?php echo $row['detail']; ?></p>
                        </div>
                    </div>
                </div>
                <?php
              }
              ?>
            </div>
        </div>
    </div>
    <hr>
    </section>
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 footer-contact">
                        <h3>Alumni Tracking System</h3>
                        <!-- <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
             
            </p> -->
                    </div>

                    <div class="col-lg-6 col-md-6 footer-links">

                        <ul class="d-flex">
                            <li class="p-3"> <a href="#">Home</a></li>
                            <li class="p-3"> <a href="#">About us</a></li>
                            <li class="p-3"> <a href="#">Gallery</a></li>
                            <li class="p-3"> <a href="#">Notice</a></li>
                            <li class="p-3"> <a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <hr class="text-white">
                    <div class="col col-lg-12 justify-content-center">


                        <div class="social-links text-center text-md-right">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>

                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
    </footer><!-- End Footer -->
    <script>
    //exporte les données sélectionnées
    var $table = $('#table');
    $(function() {
        $('#toolbar').find('select').change(function() {
            $table.bootstrapTable('refreshOptions', {
                exportDataType: $(this).val()
            });
        });
    })

    var trBoldBlue = $("table");

    $(trBoldBlue).on("click", "tr", function() {
        $(this).toggleClass("bold-blue");
    });
    </script>


    <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
    </script>

</body>

</html>