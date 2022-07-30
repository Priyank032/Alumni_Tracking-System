<?php
session_start();
require "../dbcon.php";
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
if(!isset($_SESSION['college']))
{
    header("location:../login.php");
}
else 
{
  if(isset($_POST['sub'])) 
  {
    $temp=0;
    $id=$_POST['a_id'];
    $name=$_POST['a_name'];
    $email=$_POST['email'];
    $year=$_POST['year'];
    $course=$_POST['course'];
    $password=$_POST['password'];
    $cry=md5($password);
    // $branch=$_POST['branch'];
    $c=$_SESSION['college'];
    if ($year == 'select') {
      $yErr = "Please select it";
      $temp=1;
    }
    $sql="SELECT * from col_alumni where rno='$id' ";
    $rec=mysqli_query($db,$sql);
    $sql4="SELECT * from alumni where rno='$id' ";
    $rec4=mysqli_query($db,$sql4);

    // if(!mysqli_num_rows($rec4)){
    //     echo "<script> alert('user exists you can now verify your alumni or you can check the list of all alumnies') </script>";
    //     return ;  
    // }
    if(!mysqli_num_rows($rec)>0 && $temp==0)
    {
        if(!mysqli_num_rows($rec4) > 0 ){
            $sql1="INSERT INTO col_alumni VALUES ('$id','$name','$email','$year','$c','$course') ";
            $rec1=mysqli_query($db,$sql1);
            $sql5="INSERT INTO alumni (name,rno,password,email,year,college,Course,verified) VALUES ('$name','$id',' $cry','$email','$year','$c','$course','1') ";
            $rec5=mysqli_query($db,$sql5);
              //Create an instance; passing `true` enables exceptions
             $mail = new PHPMailer(true);
        
                try 
                {
                    //Server settings
                    $mail->SMTPDebug = 0;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'priyankagrawal76660@gmail.com';                     //SMTP username
                    $mail->Password   = '@123Priyank';                               //SMTP password
                    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                    
                    // while( $data = mysqli_fetch_array($rec)){
                    
                        //Recipients
                        $mail->setFrom('priyankagrawal76660@gmail.com',"admin" );
                        $mail->addAddress($email, 'user');     //Add a recipient
                        $mail->addAddress($email);               //Name is optional
                    //  $mail->addReplyTo('info@example.com', 'Information');
                    //  $mail->addCC('cc@example.com');
                    //  $mail->addBCC('bcc@example.com');
                    
                        //Attachments
                    //  $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                    //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
                    
                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject =  "Login Credentials";
                        $mail->Body    = "Login id : ".$id." & Password: ".$password."." ;
                        $mail->AltBody = 'Do not share this credentias to anyone';
                        if($mail->send()){
                            $esMessage = true;
                        }else{
                            $esMessage = false;
                        }
                        echo "<script> alert('SUCCESSFULLY ADDED') </script>";  
                    }
                    catch (Exception $e) 
                    {
                        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
        } else{
        echo "<script> alert('user exists you can now verify your alumni or you can check the list of all alumnies') </script>";
        // return ;  
        }
    }
    else{
        // $cErr="Alumni roll number exists";
        echo "<script> alert('Alumni roll number exists') </script>";
    }
        
        // echo "SUCCESSFULLY ADDED";
       
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
                        <h3>Now You Can Add Alumni</h3>
                        <h6>Add Alumni</h6>

                    </div>

                </div>
                <img src="img/pricing-free.png" class="img-fluid hero-img w-100 " alt="" data-aos="zoom-in"
                    data-aos-delay="150">
                <br>

            </div>
            <div class="col-md-6 bg-white p-5">
                <h3 class="pb-3 tex-bold text-info text-center">ALUMNI DETAILS</h3>
                <div class="form-style">
                    <form action="add.php" method="post">
                        <div class="form-group pb-3">
                            <!-- <label for="clg_id">Unique College Id -->
                            <input type="text" placeholder="Unique Roll Number" class="form-control" required
                                id="unique_no" name="a_id">
                            <!-- </label> -->
                        </div>
                        <div class="form-group pb-3">
                            <!-- <label for="c_name">College Name -->
                            <input type="text" placeholder="Alumni Name" class="form-control" id="a_name" required
                                name="a_name">
                            <!-- </label> -->
                        </div>
                        <div class="form-group pb-3">
                            <!-- <label for="c_name">College Name -->
                            <input name="email" placeholder="Alumni Email" class="form-control" type="email" required />
                            <!-- </label> -->
                        </div>

                        <div class="form-group pb-3">
                            <label for="pass_year">Passing Year</label>
                            <select required class="form-control  " id="pass_year" name="year">
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
                            <label for="course">Course</label>
                            <select required class="form-control" id="course" name="course">
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
                            <!-- <label for="c_name">College Name -->
                            <input name="password" placeholder="Alumni Password" class="form-control" type="password"
                                required />
                            <!-- </label> -->
                        </div>
                        <div class="pb-2">
                            <button type="submit" class="btn btn-info w-100 font-weight-bold mt-2"
                                name="sub">SUBMIT</button>
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