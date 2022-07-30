<?php 
session_start();
require "../dbcon.php";

if(!isset($_SESSION['college']))
{
    header("location:../login.php");
}
?>

<?php
                $id = $_GET['a_id'];
                $selectquery = "select * from col_alumni where rno = $id";
                $query = mysqli_query($db,$selectquery);
                $result = mysqli_fetch_assoc($query);
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
    <title>Add Alumni</title>
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
        text-align: center;
    }

    h3 {
        padding: 7px;
        color: rgb(92, 113, 128);
        text-align: center;
    }

    h6 {
        padding: 5px;
        color: rgb(112, 37, 37);
        text-align: center;
    }
    </style>
</head>

<body>
    <?php include "sidebar.php"?>
    <div class="mainadd">
        <div class="row">
            <div class="col-lg-6">
                <div class="top">
                    <div class="container">

                        <h1>WELCOME</h1>
                        <h3>Now You Can Update Alumni details</h3>
                        <h6>Update Alumni</h6>

                    </div>

                </div>
                <img src="img/pricing-free.png" class="img-fluid hero-img w-100 " alt="" data-aos="zoom-in"
                    data-aos-delay="150">
                <br>

            </div>
            <div class="col-md-6 bg-white p-5">
                <h3 class="pb-3 tex-bold text-info text-center">UPDATE ALUMNI</h3>
                <div class="form-style">
                    <form action="updatealumnidetail.php" method="post">
                    <input type="hidden" name="a_id" value="<?php echo $id ?>">
                        <div class="form-group pb-3">
                            <!-- <label for="clg_id">Unique College Id -->
                            <input type="text"disabled  placeholder="Unique Roll Number" class="form-control" id="unique_no"
                                name="a_id"value="<?php echo $result['rno'];?>">
                            <!-- </label> -->
                        </div>
                        <div class="form-group pb-3">
                            <!-- <label for="c_name">College Name -->
                            <input type="text" placeholder="Alumni Name" class="form-control" id="a_name" name="a_name"
                            value="<?php echo $result['name'];?>">
                            <!-- </label> -->
                        </div>

                        <div class="form-group pb-3">
                            <label for="pass_year">Passing Year</label>
                            <select class="form-control  " id="pass_year" name="year"value="<?php echo $result['year'];?>">
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
                            </select>
                        </div>
                        <div class="form-group pb-3">
                            <label for="course">Course</label>
                            <select class="form-control" id="course" name="course" value="<?php echo $result['course'];?>">
                                <option>--SELECT--</option>
                                <option>B.Tech</option>
                                <option>M.Tech</option>
                                <option>BCA</option>
                                <option>MCA</option>
                                <option>BBA</option>
                                <option>MBA</option>
                                <option>B.Sc</option>
                                <option>M.SC</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="form-group pb-3">
                            <label for="branch">Branch</label>
                            <select class="form-control" id="branch" name="branch" value="<?php echo $result['branch'];?>">
                                <option>--SELECT--</option>
                                <option>CSE</option>
                                <option>IT</option>
                                <option>ME</option>
                                <option>CE</option>
                                <option>EE</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="pb-2">
                            <button type="submit" class="btn btn-info w-100 font-weight-bold mt-2"
                                name="sub">UPDATE</button>
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