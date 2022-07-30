<?php
session_start();
require "../dbcon.php";

if(!isset($_SESSION['director']))
{
    header("location:../login.php");
}
else
{
    if(isset($_POST['submit']))
    {
        $id=$_POST['c_id'];
        $name=$_POST['c_name'];
        $city=$_POST['city'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $hash=md5($pass);
        $sql="SELECT * from college where coll_id='$id' ";
        $rec=mysqli_query($db,$sql);
        if(!mysqli_num_rows($rec))
        {
            $sql1="INSERT INTO college VALUES ('','$name','$id','$email','$city','$hash') ";
            $rec1=mysqli_query($db,$sql1);
           if($rec1){
            echo "<script>alert('successfully registered')</script>";
           }
        }
        else{
            $cErr="College id exists";
        }
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
                <div class="col-lg-6">
                    <div class="top">
                        <div class="container">

                            <h1>Add College</h1>
                            <h3>WANT TO ADD A COLLEGE ???..</h3>
                            <h6>Add Details</h6>

                        </div>

                    </div>
                    <img src="img/features-3.png" class="img-fluid hero-img " alt="" data-aos="zoom-in"
                        data-aos-delay="150">
                    <br>

                </div>
                <div class="col-md-6 bg-white p-5">
                    <h3 class="pb-3 tex-bold text-info text-center">COLLEGE DETAILS</h3>
                    <div class="form-style">
                        <form action="AddCollege.php" method="POST">
                            <div class="form-group pb-3">
                                <!-- <label for="c_name">College Name -->
                                <input type="text" required name="c_name" placeholder="College Name"
                                    class="form-control" id="c_name">
                                <!-- </label> -->
                            </div>
                            <div class="form-group pb-3">
                                <!-- <label for="clg_id">Unique College Id -->
                                <input type="text" required name="c_id" placeholder="Unique College Id"
                                    class="form-control" id="clg_id">
                                <!-- </label> -->
                            </div>
                            <div class="form-group pb-3">
                                <!-- <label for="clg_id">Unique College Id -->
                                <input type="email" required name="email" placeholder="Email"
                                    class="form-control" id="Email">
                                <!-- </label> -->
                            </div>
                            <div class="form-group pb-3">
                                <!-- <label for="clg_id">Unique College Id -->
                                <input type="text" required name="city" placeholder="City"
                                    class="form-control" id="city">
                                <!-- </label> -->
                            </div>

                            <div class="form-group pb-3">
                                <!-- <label for="password">Password -->
                                <input type="password" required name="pass" placeholder="Password" class="form-control"
                                    id="password">
                                <!-- </label> -->
                            </div>
                            <!-- <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center"><input name="" type="checkbox" value="" /> <span
                                    class="pl-2 font-weight-bold">Remember Me</span></div>
                            <div><a href="#">Forget Password?</a></div>
                        </div> -->
                            <div class="pb-2">
                                <button type="submit" name="submit"
                                    class="btn btn-info w-100 font-weight-bold mt-2">Submit</button>
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