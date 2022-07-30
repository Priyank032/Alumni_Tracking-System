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
    <title>Document</title>
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
        overflow-x: hidden;
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
    </style>
</head>

<body>
    <?php include "sidebar.php"?>
    <div class="mainadd">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-10 bg-white p-5 m-5">
                    <h1>Send Mail</h1>
                    <img src="img/pricing-ultimate.png" class="img-fluid hero-img " alt="" data-aos="zoom-in"
                        data-aos-delay="150">
                    <br>
                    <h3>WE WANT TO SEND ANY MAIL</h3>
                    <h6>Add Details</h6>

                    <!-- <h3 class="pb-3 tex-bold text-info text-center">MAIL DETAILS</h3> -->
                    <div class="form-style">
                        <form action="mail.php" method="POST">
                            <div class="form-group pb-3">
                                <label for="pass_year">Choose Passing Year Students</label>
                                <select class="form-control  " id="pass_year" name="year">
                                    <option>--SELECT--</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                    <option>2024</option>
                                    <option>2025</option>
                                </select>
                            </div>
                            <div class="form-group pb-3">
                                <!-- <label for="clg_id">Unique College Id -->
                                <input type="text" name="message" placeholder="Type Message" class="form-control" id="clg_id">
                                <!-- </label> -->
                            </div>


                            <div class="pb-2">
                                <button type="submit" name="send" class="btn btn-info w-100 font-weight-bold mt-2">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </section>




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