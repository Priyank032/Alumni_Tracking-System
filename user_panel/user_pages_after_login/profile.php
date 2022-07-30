<?php
session_start();
require "../../dbcon.php";
  if(!isset($_SESSION['alumini']))
  { 
    echo "<script>alert('Please Login First')</script>";
       echo '<script> window.location.replace("../login.php")</script>';
  } 

  $i=1;
  $rno = $_SESSION['rno'];
  $query="SELECT * FROM alumni where rno = '$rno'";
  $result=mysqli_query($db,$query);
  $row=mysqli_fetch_array($result);
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
    body {
        color: #6F8BA4;
        margin-top: 20px;

    }

    .section {
        padding: 100px 0;
        position: relative;
    }

    .gray-bg {
        background-color: #f5f5f5;

    }

    img {
        max-width: 100%;
    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    /* About Me 
---------------------*/
    .about-text h3 {
        font-size: 45px;
        font-weight: 700;
        margin: 0 0 6px;
    }

    @media (max-width: 767px) {
        .about-text h3 {
            font-size: 35px;
        }
    }

    .about-text h6 {
        font-weight: 600;
        margin-bottom: 15px;
    }

    @media (max-width: 767px) {
        .about-text h6 {
            font-size: 18px;
        }
    }

    .about-text p {
        font-size: 18px;
        max-width: 450px;
    }

    .about-text p mark {
        font-weight: 600;
        color: #20247b;
    }

    .about-list {
        padding-top: 10px;
    }

    .about-list .media {
        padding: 5px 0;
    }

    .about-list label {
        color: #20247b;
        font-weight: 600;
        width: 88px;
        margin: 0;
        position: relative;
    }

    .about-list label:after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        right: 11px;
        width: 1px;
        height: 12px;
        background: #20247b;
        -moz-transform: rotate(15deg);
        -o-transform: rotate(15deg);
        -ms-transform: rotate(15deg);
        -webkit-transform: rotate(15deg);
        transform: rotate(15deg);
        margin: auto;
        opacity: 0.5;
    }

    .about-list p {
        margin: 0;
        font-size: 15px;
    }

    @media (max-width: 991px) {
        .about-avatar {
            margin-top: 30px;
        }
    }

    .about-section .counter {
        padding: 22px 20px;
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
    }

    .about-section .counter .count-data {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .about-section .counter .count {
        font-weight: 700;
        color: #20247b;
        margin: 0 0 5px;
    }

    .about-section .counter p {
        font-weight: 600;
        margin: 0;
    }

    mark {
        background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
        background-size: 100% 3px;
        background-repeat: no-repeat;
        background-position: 0 bottom;
        background-color: transparent;
        padding: 0;
        color: currentColor;
    }

    .theme-color {
        color: #fc5356;
    }

    .dark-color {
        color: #20247b;
    }

    .back {
        justify-content: center;
        text-align: center;
        color: rgb(216, 75, 40);
        /* margin-top: 10px; */
    }

    .back a {
        color: rgb(228, 68, 28);

        font-size: 18px;
    }
    </style>
</head>

<body>

<header id="header" class="fixed-top ">
    <div class="container d-flex  align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">Alumini</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <?php
   include("nav2.php");
   ?>


        </div>
    </header><!-- End Header -->
    <section class="section about-section gray-bg" id="about">

        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about-text go-to">
                        <h3 class="dark-color">About Me</h3>
                        <h6 class="theme-color lead"><?php echo $row['name']; ?></h6>
                        <p class="theme-color lead"><?php echo $row['college']; ?></p>
                        <p>I <?php echo $row['des']; ?></p>
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Birthday</label>
                                    <p><?php echo $row['dob']; ?></p>
                                </div>
                                <div class="media">
                                    <label>Email</label>
                                    <p><?php echo $row['email']; ?></p>
                                </div>
                                <div class="media">
                                    <label>Mobile</label>
                                    <p><?php echo $row['mobile']; ?></p>
                                </div>
                                <div class="media">
                                    <label>Address</label>
                                    <p><?php echo $row['address']; ?></p>
                                </div>
                                <div class="media">
                                    <label>Marital Status</label>
                                    <p><?php echo $row['stat1']; ?></p>
                                </div>
                                <div class="media">
                                    <label>Gender</label>
                                    <p><?php echo $row['sex']; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Pass out Year</label>
                                    <p><?php echo $row['year']; ?></p>
                                </div>
                                <div class="media">
                                    <label>Work Status</label>
                                    <p><?php echo $row['stat2']; ?></p>
                                </div>
                                <div class="media">
                                    <label>Course</label>
                                    <p><?php echo $row['Course']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                    </div>
                </div>
            </div>


        </div>
    </section>

    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 footer-contact">
                        <h3>Your Social media</h3>
                    </div>
                    <div class="col col-lg-6 justify-content-center">


                        <div class="social-links text-center text-md-right">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>

                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
    </footer><!-- End Footer -->
    </footer><!-- End Footer -->
</body>

</html>