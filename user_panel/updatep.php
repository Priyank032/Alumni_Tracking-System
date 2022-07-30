<?php
session_start();
require "../dbcon.php";
  if(!isset($_SESSION['alumini']))
  { 
    echo "<script>alert('Please Login First')</script>";
       echo '<script> window.location.replace("../login.php")</script>';
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multistep form</title>
  <link rel="stylesheet" href="../register/register.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
  <body>
        <div class="container">
            <div class="back">
                <a href="../index.html">Back</a>  /  <a href="profile.html">Profile</a>
            </div>
            <header>Edit Profile</header>

            <div class="form-outer">
                <form action="#">
                  
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="page slide-page">
                        <div class="title">Personal Info:</div>
                        <div class="field">
                            <div class="label">Full Name</div>
                            <input type="text" placeholder="Full Name" required />
                        </div>
                        <div class="field">
                            <div class="label">Permanent Address</div>
                            <input type="text" placeholder="Full address" required />
                        </div>
                        <div class="field">
                            <div class="label">Date of Birth</div>
                            <input type="date" required />
                        </div>
                        <div class="field">
                            <div class="label">Email Address</div>
                            <input type="email" required />
                        </div>
                        <div class="field">
                            <div class="label">Phone Number</div>
                            <input type="Number" placeholder="10 digit Contact Number" required />
                        </div>
                        <div class="field">
                            <div class="label">User Id</div>
                            <input type="Number" placeholder="Unique user id" required />
                        </div>
                        <div class="field">
                            <div class="label">Password</div>
                            <input type="password" placeholder="" required />
                        </div>
                        <div class="field">
                            <div class="label">Civil Status</div>
                            <select required>
                                <option>--SELECT--</option>
                                <option>Married</option>
                                <option>Unmarried</option>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label">Gender</div>
                            <select required>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                 
                  </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="page slide-page">
                        <div class="title">Educational Information:</div>
                        <div class="field">
                            <div class="label">Roll Number:</div>
                            <input type="text" required />
                        </div>
                        
                        <div class="field">
                            <div class="label">College Name:</div>
                            <select required>
                                <option>IPS COLLEGE OF TECHNOLOGY AND MANAGEMENT</option>
                                <option>ITM UNIVERSITY</option>
                                <option>PRESTIGE GROUP OF COLLEGE</option>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label">Passing Year</div>
                            <select required>
                                <option>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label">Present Work Status:</div>
                            <select required>
                                <option>--SELECT--</option>
                                <option>Higher Studies</option>
                                <option>Startup</option>
                                <option>Job</option>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label">Description of Work Status:</div>
                            <textarea rows="80" cols="90"
              placeholder="Describe your present work status in minimum 50 characters like course name,college name or job description,address"></textarea>
                        </div>

                        
                        <div class="field btns">
                            
                            <button class="next-1 next">Update Profile</button>
                        </div>
                    </div>
              
          
                  </div>
                  </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
     
    </body>
</html> 
