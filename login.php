<?php
session_start();
require "dbcon.php";
if(isset($_POST['submit_director'])){
  $a=$_POST['director'];
  $b=$_POST['Password'];
  // $c=md5($b);

  $sql="SELECT * FROM dir where id = '$a' and password = '$b' ";

  $r=mysqli_query($db,$sql);
 
  if(mysqli_num_rows($r)){
       $_SESSION['director']=$a;
       echo "<script>alert('Login Successfully')</script>";
       echo '<script> window.location.replace("./DirectoratePanel/Directorate.php")</script>';
  }
  else{
      echo"<script> alert('INCORRECT CREDENTIALS') </script>";
  }
    
}

if(isset($_POST['submit_college'])){

    $a=$_POST['college_id'];
    $b=$_POST['pass'];
     $c=md5($b);

    $sql=" SELECT * FROM college where coll_id = '$a' and pass = '$c' ";
    $r=mysqli_query($db,$sql);
   
    if(mysqli_num_rows($r)){
        $res=mysqli_fetch_array($r);

        $_SESSION['college']=$res['coll_name'];
        $_SESSION['coll_id']=$a;
        echo "<script>alert('Login Successfully')</script>";
        echo '<script> window.location.replace("./CollegePanel/college.php")</script>';
    }
    else{
        echo"<script> alert('INCORRECT CREDENTIALS') </script>";
    }
}

if(isset($_POST['submit_alumini'])){
    $a=$_POST['alumini'];
    $b=$_POST['alumnini_pass'];
    $c=md5($b);
    $sql="SELECT * FROM alumni where rno='$a'";
    $rec=mysqli_query($db,$sql);
    if(mysqli_num_rows($rec)){
        $sql1="SELECT * FROM alumni where rno='$a'and password='$c'";
        $rec1=mysqli_query($db,$sql1);
        $row = mysqli_fetch_array($rec1);
        if(mysqli_num_rows($rec1)){
            if($row["verified"] == 0){
                echo "<script>alert('You are not verified by you you college till yet Either You can try later or contact to college')</script>";
                echo '<script> window.location.replace("./user_Panel/index.php")</script>';
            } else{
                
                $_SESSION['alumini']=$row['name'];
                $_SESSION['rno']=$row['rno'];
                echo "<script>alert('Login Successfully')</script>";
                echo '<script> window.location.replace("./user_Panel/index.php")</script>';
            }  
         }else{
            echo"<script> alert('INCORRECT PASSWORD..') </script>";
            } 
    }
    else{
        echo"<script> alert('User id not exists') </script>"; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V4</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="register2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body,
    .limiter {
        height: 0vh;
        width: 100%;
        font-family: Poppins-Regular, sans-serif;
        background-color: #cfe7f3;
        overflow-X: hidden;
        /* overflow-Y:hidden; */
    }


    h1 {
        color: rgb(29, 29, 100);
        /* margin: 20px;
     padding: 30PX; */
    }

    .validate-input {
        padding: 10px;
    }

    .input100 {
        padding: 10px;
        border-radius: 6px;
        border: 2px solid rgb(112, 129, 165);
        width: 100%;
    }

    .login100-form-btn {
        background-color: rgb(41, 41, 161);
        width: 100%;
        border-radius: 10px;
        padding: 10px;
        border: 2px solid white;
        color: #f6f7f8;
        margin-bottom: 10px;

    }

    .nav-link {

        color: black;
        font-weight: 600;
    }

    .nav-link,
    .active {

        color: rgb(65, 30, 190);
        font-weight: 600;
    }

    .container-login100-form-btn {
        margin-top: 20px;
        margin-bottom: 30px;
    }

    h2 {
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
    <!-- <div class="container limiter"> -->
    <div class="row">
        <div class="col-lg-7 col-sm-12">
            <img src="./user_panel/images/hero-img.png" class="w-100 h-80 mt-5" alt="" srcset="">
            <div class="top text-center">


                <h2>register</h2>
                <h3>WANT TO CREATE YOUR ACCOUNT??......</h3>
                <a href="register.php">
                    <h6>Sign-Up</h6>
                </a>


            </div>
        </div>

        <div class="col-lg-5 col-sm-12">


            <section>



                <!-- <div class="back ">
                        <a href="../index.html">Back</a> / <a href="../register/register.html">SignUp</a>
                    </div>   -->
            </section>
            <div class="container  ">

                <!-- <br><br> -->
                <div class="container-login100">
                    <div class="wrap-login100 ">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="user-tab" data-toggle="tab" href="#user" role="tab"
                                    aria-controls="user" aria-selected="true">Directorate</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="reviewer-tab" data-toggle="tab" href="#reviewer" role="tab"
                                    aria-controls="reviewer" aria-selected="true">College</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="admin-tab" data-toggle="tab" href="#admin" role="tab"
                                    aria-controls="admin" aria-selected="true">Alumni</a>
                            </li>
                        </ul>
                        <!-- <img src="../images/hero-img.png " class="w-100 h-auto" alt="" srcset=""> -->

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="user-tab">
                                <form class="login100-form " action="login.php" method="post">
                                    <h1 class="text-center mt-5"> Login</h1>
                                    <span class="login100-form-title text-primary m-b-23 ">
                                        DIRECTORATE LOGIN
                                    </span>
                                    <br> <br>
                                    <div class="wrap-input100 validate-input m-b-23"
                                        data-validate="Username is required">
                                        <!-- <span class="label-input100">User-email</span><br> -->
                                        <input class="input100" type="text" name="director"
                                            placeholder="Enter your username">
                                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                                        <!-- <span class="label-input100">Password</span><br> -->
                                        <input class="input100" type="password" name="Password"
                                            placeholder="Enter your password" id="txt" onkeyup="Validate(this)">
                                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                                    </div>



                                    <div class="container-login100-form-btn">
                                        <div class="wrap-login100-form-btn">
                                            <div class="login100-form-bgbtn"></div>
                                            <button class="login100-form-btn" type="submit" name="submit_director">
                                                Login
                                            </button>
                                            <div class="text-center p-t-8 p-b-31">
                                                <a href="index.php">
                                                    Back to Home
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- reviewer login -->
                            <div class="tab-pane fade show  " id="reviewer" role="tabpanel"
                                aria-labelledby="reviewer-tab">
                                <form class="login100-form " action="login.php" method="post">
                                    <h1 class="text-center mt-5"> Login</h1>
                                    <span class="login100-form-title text-primary m-b-23 ">
                                        COLLEGE LOGIN
                                    </span><br> <br>
                                    <div class="wrap-input100 validate-input m-b-23"
                                        data-validate="Username is required">
                                        <!-- <span class="label-input100">Reviewer-email</span><br> -->
                                        <input class="input100" type="text" name="college_id"
                                            placeholder="Enter your username">
                                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                                        <!-- <span class="label-input100">Password</span><br> -->
                                        <input class="input100" type="password" name="pass"
                                            placeholder="Enter your password">
                                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                                    </div>



                                    <div class="container-login100-form-btn">
                                        <div class="wrap-login100-form-btn">
                                            <div class="login100-form-bgbtn"></div>
                                            <button class="login100-form-btn" name="submit_college">
                                                Login
                                            </button>
                                            <div class="text-center p-t-8 p-b-31">
                                                <a href="index.php">
                                                    Back to Home
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Admin login -->
                            <div class="tab-pane fade show " id="admin" role="tabpanel" aria-labelledby="admin-tab">
                                <form class="login100-form" action="login.php" method="post">
                                    <h1 class="text-center mt-5"> Login</h1>
                                    <span class="login100-form-title text-primary m-b-23 ">
                                        ALUMNI LOGIN
                                    </span><br> <br>
                                    <div class="wrap-input100 validate-input m-b-23"
                                        data-validate="Username is reauired">
                                        <!-- <span class="label-input100">Email</span><br> -->
                                        <input class="input100" type="text" name="alumini"
                                            placeholder="Enter your Roll no">
                                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                                        <!-- <span class="label-input100">Password</span><br> -->
                                        <input class="input100" type="password" name="alumnini_pass"
                                            placeholder="Enter your password">
                                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                                    </div>



                                    <div class="container-login100-form-btn">
                                        <div class="wrap-login100-form-btn">
                                            <div class="login100-form-bgbtn"></div>
                                            <button class="login100-form-btn" name="submit_alumini">
                                                Login
                                            </button>
                                            <div class="text-center p-t-8 p-b-31">
                                                <a href="forgot.php">
                                                    Forgot password?
                                                </a> <br/>
                                                <a href="index.php">
                                                    Back to Home
                                                </a>
                                            </div>

                                        </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- </div> -->
    </div>
    <script>
    function Validate(txt) {
        txt.value = txt.value.replace(/([\'\" "])/g, "")
    }
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>