<?php
include('../dbcon.php');
$id = $_GET['a_id'];
$deletequery = "delete from col_alumni where rno = '$id'";
$query = mysqli_query($db,$deletequery);
if(!$query){
    echo "<script>alert('not Deleted Successfully')</script>";
}else{
    echo "<script>alert('Deleted Successfully')</script>";
   echo '<script> window.location.replace("allalumni.php")</script>';
}
?>