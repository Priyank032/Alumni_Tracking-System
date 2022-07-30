<?php

include('../dbcon.php');
session_start();
if(isset($_POST['sub']))
{
    $id=$_POST['a_id'];
    $name=$_POST['a_name'];
    $year=$_POST['year'];
    $course=$_POST['course'];
    $branch=$_POST['branch'];
    $c=$_SESSION['user'];
$sql = "update col_alumni set   rno='$id',name='$name', year='$year',course ='$course', branch='$branch' WHERE rno= '$id'";
$result = mysqli_query($db,$sql);
if($result){
   
  echo "<script> alert('UPDATED SUCCESSFULLY ') </script>"; 
  echo '<script> window.location.replace("allalumni.php")</script>';  
}
else{
    echo mysqli_error($db);
}
}
?>