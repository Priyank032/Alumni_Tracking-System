<?php
session_start();
require "../dbcon.php";

if(!isset($_SESSION['director']))
{
    header("location:../login.php");
}

if(isset($_POST['Edit']))
{
    $a=$_POST['id']; 

    $res=mysqli_query($db,"select * from event where id='$a' ");
    $row = mysqli_fetch_array($res);
    
}
if(isset($_POST['submit']))
{
    $id=$_POST['id']; 
    $a=$_POST['s_date']; 
    $d=$_POST['subject'];
    $e=$_POST['details'];
    $sql = "update event set event_date = '$a',subject='$d',detail='$e' where id = '$id'";

    $rese=mysqli_query($db,$sql);
    if(!$rese){
        echo "<script>alert('not Updated Successfullt')</script>";
    }else{
        echo "<script>alert('Updated Successfullt')</script>";
       echo '<script> window.location.replace("AllEvents.php")</script>';
    }
    // header("location:AllEvents.php");
    // $row = mysqli_fetch_array($res);
    
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
    <title>Event</title>
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

    label {
        color: grey;
        font-weight: 500;
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
            <div class="container">
                <div class="row">

                    <div class="col-md-8 bg-white p-5">
                        <h3 class="pb-3 tex-bold text-info text-center">ADD NEW EVENT</h3>
                        <div class="form-style">
                            <form method="POST" action="EditEvent.php">
                                <input type="hidden" name="id" , value="<?php echo $row['id'] ?>">
                                <div class="form-group pb-3">
                                    <label for="s_date">Select Date</label>
                                    <input type="date" class="form-control" id="s_date"
                                        value="<?php echo $row['event_date'] ?>" name="s_date" required>
                                </div>

                                <div class="form-group pb-3">
                                    <label for="subject">Enter Subject</label>
                                    <input type="text" class="form-control" id="subject"
                                        value="<?php echo $row['subject'] ?>" placeholder="Title" name="subject"
                                        required>
                                </div>
                                <div class="form-group pb-3">
                                    <label for="details">Enter Details</label>
                                    <input type="text" class="form-control" id="details"
                                        value="<?php echo $row['detail'] ?>" name="details"></input>
                                </div>
                                <!-- <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center"><input name="" type="checkbox" value="" /> <span
                                    class="pl-2 font-weight-bold">Remember Me</span></div>
                            <div><a href="#">Forget Password?</a></div>
                        </div> -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="pb-2">
                                            <button type="submit" name="submit"
                                                class="btn btn-info w-100 font-weight-bold mt-2">Update Event</button>
                                        </div>

                                    </div>

                                </div>


                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="top">
                            <div class="container">

                                <h1>View Events</h1>
                                <!-- <h3>WANT TO ADD A NEW EVENT???..</h3> -->
                                <h6>See All Event</h6>

                            </div>

                        </div>
                        <img src="img/hero-img.png" class="img-fluid hero-img " alt="" data-aos="zoom-in"
                            data-aos-delay="150">
                        <br><br>
                        <div class="col-lg-12">
                            <div class="pb-2">
                                <button type="submit" class="btn btn-info w-100 font-weight-bold mt-2"><a href="t.html"
                                        class="text-white">EVENTS DETAIL</a> </button>
                            </div>
                        </div>

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