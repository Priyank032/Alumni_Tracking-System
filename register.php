<?php
require "dbcon.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multistep form</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");

    * {
        margin: 0;
        padding: 0;
        outline: none;
        font-family: "Poppins", sans-serif;
    }

    :root {
        --primary: rgb(46, 73, 161);
        --secondary: #333;
        --errorColor: red;
        --stepNumber: 6;
        --containerWidth: 600px;
        --bgColor: #333;
        --inputBorderColor: lightgray;
    }

    body {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        overflow-x: hidden;
        background: #bed2f1;
    }

    ::selection {
        color: #fff;
        background: var(--primary);
    }

    .back {
        text-align: center;
        justify-content: center;
        color: rgb(216, 75, 40);
        margin-bottom: 30px;
    }

    .back a {
        color: rgb(228, 68, 28);

        font-size: 18px;
    }

    .container {
        width: var(--containerWidth);
        background: #fff;
        text-align: center;
        border-radius: 25px;
        padding: 50px 35px 10px 35px;
        margin: 90px 0 90px 0;
    }

    .container header {
        font-size: 35px;
        font-weight: 600;
        margin: 0 0 30px 0;
        color: rgb(47, 11, 133);
    }

    .container .form-outer {
        width: 100%;
        overflow: hidden;
    }

    .container .form-outer form {
        display: flex;
        width: calc(100% * var(--stepNumber));
    }

    .form-outer form .page {
        width: calc(100% / var(--stepNumber));
        transition: margin-left 0.3s ease-in-out;
    }

    .form-outer form .page .title {
        text-align: left;
        font-size: 19px;
        font-weight: 500;
        color: #3b98b4;
    }

    .form-outer form .page .field {
        width: var(--containerWidth);
        height: 45px;
        margin: 45px 0;
        display: flex;
        position: relative;
    }

    form .page .field .label {
        position: absolute;
        top: -30px;
        font-weight: 500;
    }

    form .page .field input {
        box-sizing: border-box;
        height: 100%;
        width: 100%;
        border: 1px solid var(--inputBorderColor);
        border-radius: 5px;
        padding-left: 15px;
        margin: 0 1px;
        font-size: 18px;
        transition: border-color 150ms ease;
    }

    .field input:hover {
        border: 2px solid rgb(142, 142, 182);
        background-color: rgb(235, 240, 245);
    }

    form .page .field input.invalid-input {
        border-color: var(--errorColor);
    }

    form .page .field select {
        width: 100%;
        padding-left: 10px;
        font-size: 17px;
        font-weight: 500;
    }

    form .page .field button {
        width: 100%;
        height: calc(100% + 5px);
        border: none;
        background: #4753c0;
        margin-top: -20px;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: 0.5s ease;
    }

    form .page .field button:hover {
        background: rgb(47, 11, 133);
    }

    form .page .btns button {
        margin-top: -20px !important;
    }

    form .page .btns button.prev {
        margin-right: 3px;
        font-size: 17px;
    }

    form .page .btns button.next {
        margin-left: 3px;
    }

    .container .progress-bar {
        display: flex;
        margin: 40px 0;
        user-select: none;
    }

    .container .progress-bar .step {
        text-align: center;
        width: 100%;
        position: relative;
    }

    .container .progress-bar .step p {
        font-weight: 500;
        font-size: 18px;
        color: rgb(66, 55, 165);
        margin-bottom: 8px;
    }

    .progress-bar .step .bullet {
        height: 25px;
        width: 25px;
        border: 2px solid rgb(66, 55, 165);
        display: inline-block;
        border-radius: 50%;
        position: relative;
        transition: 0.2s;
        font-weight: 500;
        font-size: 17px;
        line-height: 25px;
    }

    .progress-bar .step .bullet.active {
        border-color: var(--primary);
        background: var(--primary);
    }

    .progress-bar .step .bullet span {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }

    .progress-bar .step .bullet.active span {
        display: none;
    }

    .progress-bar .step .bullet:before,
    .progress-bar .step .bullet:after {
        position: absolute;
        content: "";
        bottom: 11px;
        right: -51px;
        height: 3px;
        width: 44px;
        background: #262626;
    }

    .progress-bar .step .bullet.active:after {
        background: var(--primary);
        transform: scaleX(0);
        transform-origin: left;
        animation: animate 0.3s linear forwards;
    }

    @keyframes animate {
        100% {
            transform: scaleX(1);
        }
    }

    .progress-bar .step:last-child .bullet:before,
    .progress-bar .step:last-child .bullet:after {
        display: none;
    }

    .progress-bar .step p.active {
        color: var(--primary);
        transition: 0.2s linear;
    }

    .progress-bar .step .check {
        position: absolute;
        left: 50%;
        top: 70%;
        font-size: 15px;
        transform: translate(-50%, -50%);
        display: none;
    }

    .progress-bar .step .check.active {
        display: block;
        color: #fff;
    }

    @media screen and (max-width: 660px) {
        :root {
            --containerWidth: 400px;
        }

        .progress-bar .step p {
            display: none;
        }

        .progress-bar .step .bullet::after,
        .progress-bar .step .bullet::before {
            display: none;
        }

        .progress-bar .step .bullet {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .progress-bar .step .check {
            position: absolute;
            left: 50%;
            top: 50%;
            font-size: 15px;
            transform: translate(-50%, -50%);
            display: none;
        }

        .step {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    }

    @media screen and (max-width: 490px) {
        :root {
            --containerWidth: 100%;
        }

        .container {
            box-sizing: border-box;
            border-radius: 0;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="back">
           <a href="login.php">Login</a>
        </div>
        <header>SIGN UP FORM</header>
        <div class="progress-bar">
            <div class="step">
                <p>Personal Information</p>
                <div class="bullet">
                    <span>1</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Educationa</p>
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Register</p>
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
        </div>
        <div class="form-outer">
            <form action="registerAlumini.php" method="POST">
                <div class="page slide-page">
                    <div class="title">Personal Info:</div>
                    <div class="field">
                        <div class="label">Full Name</div>
                        <input type="text" name="name" placeholder="Full Name" required />
                    </div>
                    <div class="field">
                        <div class="label">Permanent Address</div>
                        <input type="text" name="address" placeholder="Full address" required />
                    </div>
                    <div class="field">
                        <div class="label">Date of Birth</div>
                        <input name="dob" type="date" required />
                    </div>
                    <div class="field">
                        <div class="label">Email Address</div>
                        <input name="email" type="email" required />
                    </div>
                    <div class="field">
                        <div class="label">Phone Number</div>
                        <input type="Number" name="phone" placeholder="10 digit Contact Number" required />
                    </div>
                    <div class="field">
                        <div class="label">UserName</div>
                        <input type="Number" name="username" placeholder="Unique user id" required />
                    </div>
                    <div class="field">
                        <div class="label">Civil Status</div>
                        <select name="Marry_status" required>
                            <option value="select">--SELECT--</option>
                            <option value="Married">Married</option>
                            <option value="Unmarried">Unmarried</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Gender</div>
                        <select name="sex" required>
                            <option value="select">--SELECT--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="field">
                        <button class="firstNext next">Next</button>
                    </div>
                </div>

                <div class="page">
                    <div class="title">Educational Information:</div>
                    <div class="field">
                        <div class="label">Roll Number:</div>
                        <input name="rno" type="text" required />
                    </div>

                    <div class="field">
                        <div class="label">College Name:</div>
                        <select name="college" required>
                            <option value='select'>---SELECT---</option>
                            <?php

                                $query="SELECT coll_name FROM college order by coll_name";
                                $result=mysqli_query($db,$query);
                                while ($row=mysqli_fetch_array($result)){
                                $coll=$row['coll_name'];

                                echo "<option value='".$coll."'>".$coll."</option>";
                                }
                             ?>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Course</div>
                        <select name="course" required>
                            <option value="select">--SELECT--</option>
                            <option value="B.Tech">B.Tech</option>
                            <option value="M.Tech">M.Tech</option>
                            <option value="BCA">BCA</option>
                            <option value="MCA">MCA</option>
                            <option value="BBA">BBA</option>
                            <option value="MBA">MBA</option>
                            <option value="B.Sc">B.Sc</option>
                            <option value="M.SC">M.SC</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>

                    <div class="field">
                        <div class="label">Passing Year</div>
                        <select name="year" required>
                            <option value="select">--SELECT--</option>
                            <script>
                            var myDate = new Date();
                            var year = myDate.getFullYear();
                            for (var i = 2001; i < year + 1; i++) {
                                document.write('<option value="' + i + '">' + i + '</option>');
                            }
                            </script>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Present Work Status:</div>
                        <select name="work" required>
                            <option>--SELECT--</option>
                            <option value="Studies">Higher Studies</option>
                            <option value="Startup">Startup</option>
                            <option value="Job">Job</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Description of Work Status:</div>
                        <textarea rows="80" cols="90" name="description"
                            placeholder="Describe your present work status in minimum 50 characters like course name,college name or job description,address"></textarea>
                    </div>
                    <div class="field btns">
                        <button class="prev-1 prev">Previous</button>
                        <button class="next-1 next">Next</button>
                    </div>
                </div>
                <div class="page">
                    <div class="title">Credential:</div>
                    <img src="../images/values-2.png" class="img-fluid hero-img" alt="" data-aos="zoom-in"
                        data-aos-delay="150">
                    <br>
                    <div class="field">
                        <span class="details">Password</span>
                        <input required name="password" type="password" class="form-control inputpass" minlength="3"
                            maxlength="16" id="pass1" />
                    </div>
                    <div class="field">
                        <span class="details">Confirm Password</span>
                        <input required name="cpassword" type="password" class="form-control inputpass" minlength="3"
                            maxlength="16" placeholder="Enter again to validate" id="pass2"
                            onkeyup="checkPass(); return false;" />
                        <span id="confirmMessage" class="confirmMessage"></span>
                    </div>
                    <div class="field btns">
                        <button class="prev-5 prev">Previous</button>
                        <button class="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
    function checkPass() {
        //Store the password field objects into variables ...
        var pass1 = document.getElementById('pass1');
        var pass2 = document.getElementById('pass2');
        //Store the Confimation Message Object ...
        var message = document.getElementById('confirmMessage');
        //Set the colors we will be using ...
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        //Compare the values in the password field 
        //and the confirmation field
        if (pass1.value == pass2.value) {
            //The passwords match. 
            //Set the color to the good color and inform
            //the user that they have entered the correct password 

            message.style.color = goodColor;
            message.innerHTML = "Passwords Match"
        } else {
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.

            message.style.color = badColor;
            message.innerHTML = "Passwords Do Not Match!"
        }
    }
    </script>
    <script src="register.js"></script>
</body>

</html>