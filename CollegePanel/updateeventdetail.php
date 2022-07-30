<?php

include('../dbcon.php');
session_start();
if(isset($_POST['sub']))
{
$id = $_POST['id'];
$event_date=$_POST['s_date'];
$subject=$_POST['subject'];
$detail=$_POST['details'];
$c=$_SESSION['user'];
$sql = "update event set event_date='$event_date',id='$id', subject='$subject', detail='$detail' WHERE id= '$id'";
$result = mysqli_query($db,$sql);
if($result){
   
  echo "<script> alert('UPDATED SUCCESSFULLY') </script>"; 
  echo '<script> window.location.replace("Allevent.php")</script>'; 
}
else{
    echo mysqli_error($db);
}
}
?>