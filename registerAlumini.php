<?php
require "dbcon.php";
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
      $name = test_input($_POST["name"]);
      $address=test_input($_POST["address"]);
      $dob=test_input($_POST["dob"]);
      $email = test_input($_POST["email"]);
      $phone = test_input($_POST["phone"]);
      $username = test_input($_POST["username"]);
      $Marry_status=test_input($_POST["Marry_status"]);
      $sex=test_input($_POST["sex"]);
      $college=test_input($_POST["college"]);
      $rno = test_input($_POST["rno"]);
      $course = test_input($_POST["course"]);
      $description = test_input($_POST["description"]);
      $password = test_input($_POST["password"]);
      $cpassword = test_input($_POST["cpassword"]);
      $year=test_input($_POST["year"]);
      $stat2=test_input($_POST["work"]);

     // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       echo "<script>alert('Only letters and white space allowed')</script>";  
       echo '<script> window.location.replace("register.php")</script>';
      }
      
      if (!preg_match("/^[0-9]*$/",$phone) || strlen($phone)!=10) {
       
        echo "<script>alert('Only 10 digits numbers are required')</script>";
        echo '<script> window.location.replace("register.php")</script>';
      }

      if (!preg_match("/^[0-9A-Z]*$/",$rno)) {
        echo "<script>alert('Only numbers and capital alphabets are required')</script>";
        echo '<script> window.location.replace("register.php")</script>';
      }

      if (!preg_match("/^[a-z@0-9_.]*$/",$username)) {
       
        echo "<script>alert('Only small alphabets,digits,(@,_,.) allowed')</script>";
        echo '<script> window.location.replace("register.php")</script>';
      }


      // if (!preg_match("/^[a-zA-Z0-9@#$]*$/",$password) || strlen($password)<=8) {
      //   echo "<script>alert('Only small and capital alphabets, digits,special characters(@,#,$) allowed')</script>";
      //   echo '<script> window.location.replace("register.php")</script>';
      // }
     
      if ($Marry_status == 'select') {
        echo "<script>alert('Please select marry status')</script>";
        echo '<script> window.location.replace("register.php")</script>';
      }
      if ($college == 'select') {
        echo "<script>alert('Please select college')</script>";
        echo '<script> window.location.replace("register.php")</script>';
      }
      if ($stat2 == 'select') {
        echo "<script>alert('Please select work status')</script>";
        echo '<script> window.location.replace("register.php")</script>';
      }
      if ($year== 'select') {
        echo "<script>alert('Please select pass out year')</script>";
        echo '<script> window.location.replace("register.php")</script>';
      }
      if ($course== 'select') {
        echo "<script>alert('Please select course)</script>";
        echo '<script> window.location.replace("register.php")</script>';
      }
      if ($sex== 'select') {
        echo "<script>alert('Please select gender')</script>";
        echo '<script> window.location.replace("register.php")</script>';
      }

      // check if e-mail address is well-formed
    
      if (empty($description) || strlen($description)<5) {
        echo "<script>alert('description is required')</script>";
        echo '<script> window.location.replace("register.php")</script>';
      } 
  
      $sql1="SELECT * from alumni where rno='$rno' ";
      $rec1=mysqli_query($db,$sql1);
      if(mysqli_num_rows($rec1)){
        echo "<script> alert('This roll no exists..Please login!! Check your email for login credentials if do not  register yourself previously may be you are regisered by your college') </script>";
        echo '<script> window.location.replace("AllEvents.php")</script>';
      } else{
          if($password==$cpassword){
            //  echo "jiii";
              $cry=md5($password);
              $sql2="INSERT into alumni values('$name','$username','$rno','$cry','$phone','$address','$dob','$email','$Marry_status','$sex','$college','$year','$stat2','$description','$course','0','0')";
              $rec2=mysqli_query($db,$sql2);
              if(!$rec2){
                  // echo "hiiii";
                  echo mysqli_error($rec2);
                // echo "<script> alert('successfully registered..Please login!!') </script>";
              } else{
                echo "<script> alert('SuccessFully registered.Please login!!') </script>";
                echo '<script> window.location.replace("login.php")</script>';
              }
          }else{
              echo "password doesnt match";
          }
      }
}
 ?>