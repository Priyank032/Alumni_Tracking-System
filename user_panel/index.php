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
  <section id="hero" class="d-flex align-items-center">

    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
     
      <img src="images/hero-img.png" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
      <br>
      <h1>Alumni Tracking System</h1>
      <h2>Alumni Management System project is to build a system that will be able to manage alumni data of a college and provide easy access to the same.</h2>
      
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>

  </section><!-- End Hero -->
  
   <!-- ======= About Section ======= -->
   <section id="about" class="about">
    <div class="container">

      <div class="row no-gutters">
        <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
          <div class="content">
            <img src="images/ab.png" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
      <br>

           
           
          </div>
        </div>
        <div class="col-xl-7 align-items-stretch" data-aos="fade-left">
          <h1>About System</h1>
   <br>
          <p>
            The aim of this Alumni Management System project is to build a system that will be able to manage alumni data of a college and provide easy access to the same. Alumni of a college generally stay in touch with their immediate friends but find it hard to stay connected with other college mates. Contact between alumni can be used to forge business connections and to gain references or insight in a new field. New college students will be initially given a student login ID. Access to the system can help them in building connections to help them in their projects or for placements.</p>
         <p> Alumni of a college generally stay in touch with their immediate friends but find it hard to stay connected with other college mates. Contact between alumni can be used to forge business connections and to gain references or insight in a new field. New college students will be initially given a student login ID. </p>
         <br>
         <a href="#about" class="btn text-light scrollto ">Learn more....</a>
        </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End About Section -->


   <!-- ======= Features Section ======= -->
   <section id="features" class="features" data-aos="fade-up">
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
          </p>
          <!-- <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p> -->
        </div>
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
  </section><!-- End Features Section -->


 


   <!-- ======= Portfolio Section ======= -->
   <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Gallery</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>

      <!-- <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div> -->

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item ">
          <div class="portfolio-wrap">
            <img src="images/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item ">
          <div class="portfolio-wrap">
            <img src="images/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="images/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item ">
          <div class="portfolio-wrap">
            <img src="images/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="images/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
 <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="images/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="images/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="images/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="images/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

    
           <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="images/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      <!--   <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div> -->

      </div> 

    </div>
  </section><!-- End Portfolio Section -->


   <!-- ======= Services Section ======= -->
   <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Get In Touch</h2>
       
      </div>
     
      <div class="row">

        <div class="col-lg-6">
          
          <div>
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
          </div>
          

        </div>

        <div class="col-lg-6 mt-4 mt-md-0">
          
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <!-- <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div> -->
            <a href="#" class="btn scrollto" style="background-color: #2d405f; color: aliceblue;">Send Message</a>
          </form>
        </div>
       
           

          </div>
<br>
<br>
      <div class="row text-center" >

        <div class="col-lg-4">
        
            <div class="address">
              <i class="bi bi-geo-alt " ></i>
              <h4>Location:</h4>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="email" >
              <i class="bi bi-envelope"  > </i>
              <h4>Email:</h4>
              <p>info@example.com</p>
            </div></div>
            <div class="col-lg-4">
            <div class="phone">
              <i class="bi bi-phone"  ></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 55s</p>
            </div></div>
          </div>

    </div>
  </section><!-- End Services Section -->

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
              <li class="p-3"> <a href="index.html">Home</a></li>
              <li class="p-3"> <a href="about.html">About us</a></li>
              <li class="p-3"> <a href="gallery.html">Gallery</a></li>
              <li class="p-3"> <a href="notice.html">Notice</a></li>
              <li class="p-3"> <a href="contact.html">Contact</a></li>
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