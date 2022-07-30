<?php
session_start();
require "../dbcon.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Document</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">Alumini</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->



            <?php
   include("nav.php");
   ?>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex ">

        <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6">
                    <img src="images/about.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="150">

                </div>
                <div class="col-lg-6">
                    <h3> Alumni Tracking System</h3><br>
                    <hr>
                    <h4>About US</h4>
                    <br>

                    <p>
                        The aim of this Alumni Management System project is to build a system that will be able to
                        manage alumni data of a college and provide easy access to the same. Alumni of a college
                        generally stay in touch with their immediate friends but find it hard to stay connected with
                        other college mates. Contact between alumni can be used to forge business connections and to
                        gain references or insight in a new field. New college students will be initially given a
                        student login ID. Access to the system can help them in building connections to help them in
                        their projects or for placements.</p>

                    <a href="#">Learn more......</a>
                </div>
            </div>


        </div>

    </section><!-- End Hero -->




    <!-- ======= Features Section ======= -->
    <!-- <section id="features" class="features" data-aos="fade-up">
    <div class="container">

      <div class="section-title">
        <h2>Features</h2>
        <p>Alumni Management System project is to build a system that will be able to manage alumni data of a college and provide easy access to the same.</p>
      </div>

      <div class="row content">
        <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
          <img src="images/features-1.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
          <h3>Alumni Management System project Aim</h3>
          <p class="fst-italic">
            The aim of this Alumni Management System project is to build a system that will be able to manage alumni data of a college and provide easy access to the same.
             Alumni of a college generally stay in touch with their immediate friends but find it hard to stay connected with other college mates. 
            
              Access to the system can help them in building connections to help them in their projects or for placements.
          </p>
          <ul>
            <li><i class="bi bi-check"></i> Contact between alumni can be used to forge business connections and to gain references or insight in a new field. New college students will be initially given a student login ID.</li>
           
          </ul>
        </div>
      </div>

      <div class="row content">
        <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
          <img src="images/features-2.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
          <h3>System generating Features</h3>
          <p class="fst-italic">
            The system will automatically list all college students as alumni on their graduation and their account status will be transferred from the student module to the alumni module.
             
            
            
              The system can track user location as given by the user. Once the system notices that more than 10 alumni are available in the same city it can notify all of them about the possibility of a meet.
          </p> -->
    <!-- <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p> -->
    <!-- </div>
      </div>

      <div class="row content">
        <div class="col-md-5" data-aos="fade-right">
          <img src="images/features-3.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5" data-aos="fade-left">
          <h3>Users or Alumni Responsibility</h3>
         
          <ul>
            <li><i class="bi bi-check"></i>  Users will also be able to share and promote their business Facebook pages or Twitter handles through the system.This single system will be able to bypass the requirement of any other Alumni organization.</li>
            <li><i class="bi bi-check"></i>   Users can also choose to automatically share new updates in work status from their LinkedIn profile. </li>
            <li><i class="bi bi-check"></i> Users will be prompted to update social network details such as their Facebook, LinkedIn and Twitter handles.</li>
          </ul>
        </div>
      </div>

      <div class="row content">
        <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
          <img src="images/features-4.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
          <h3>opportunities for Alumin</h3>

          <p class="fst-italic">
           
            Alumni will also be able to provide public posts on the system about possible job opportunities or other college related news.
             Since it is unlikely that alumni will check the system frequently the system will be able collate all public posts and create a newsletter that can be emailed to all alumni.
             The system will also privacy features. Users can determine what information they want to share and also whom they want to share it with.
             
          </p>
        </div>
      </div>

    </div>
  </section>End Features Section -->



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
</body>

</html>