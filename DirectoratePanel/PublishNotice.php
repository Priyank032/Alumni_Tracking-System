<?php
session_start();
require "../dbcon.php";

if(!isset($_SESSION['director']))
{
    header("location:../login.php");
}

if(isset($_POST['submit']))
{
    $c=$_POST['notice_id'];
    $d=$_POST['subject'];
    $e=$_POST['details'];

    $res=mysqli_query($db,"select * from notice where id='$c' ");
   
    if(mysqli_num_rows($res)){
        echo "<script>alert('Notice Id Already Exists')</script>";
    }
   else{
        mysqli_query($db,"insert into notice values ('$c','$d','$e',now())");
        echo "<script>alert('Successfully Published ')</script>";
    }
    
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

    label,
    p {
        color: grey;
    }
    </style>
</head>

<body>
    <?php
    require("sidebar.php")
    ?>
    <section class="home-section">
    <?php
    require("nav.php")
    ?>
        <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->


        <div class="mainadd">

            <div class="row">
                <div class="col-lg-4">
                    <div class="top">
                        <div class="container text-center">
                            <br>
                            <h1>Add New Notice</h1>
                            <br>
                            <h3>WANT TO ADD A NEW NOTICE ???..</h3>
                            <br><br>
                            <h6>Add Notice</h6>

                        </div>

                    </div>
                    <img src="img/features-2.png" class="img-fluid hero-img " width="500px" alt="" data-aos="zoom-in"
                        data-aos-delay="150">
                    <br>

                </div>
                <div class="col-md-8 bg-white p-5">
                    <h3 class="pb-3 tex-bold text-info text-center">ADD NEW NOTICE</h3>
                    <div class="form-style">
                        <form method="POST" action="PublishNotice.php">
                            <div class="form-group pb-3">
                                <label for="notice_id">Enter Notice Id</label>
                                <input type="text" class="form-control" id="notice_id" placeholder="Enter notice id"
                                    name="notice_id" required>
                            </div>
                            <div class="form-group pb-3">
                                <label for="subject">Enter Subject</label>
                                <input type="text" class="form-control" id="subject" placeholder="Title" name="subject"
                                    required>
                            </div>
                            <div class="form-group pb-3">
                                <label for="details">Enter Details</label>
                                <textarea type="text" class="form-control" id="details"
                                    placeholder="Detailed Information of notice" name="details" required></textarea>
                            </div>
                            <!-- <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center"><input name="" type="checkbox" value="" /> <span
                                    class="pl-2 font-weight-bold">Remember Me</span></div>
                            <div><a href="#">Forget Password?</a></div>
                        </div> -->
                            <div class="pb-2">
                                <button type="submit" name="submit"
                                    class="btn btn-info w-100 font-weight-bold mt-2">SUBMIT</button>
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