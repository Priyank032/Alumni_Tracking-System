<?php

include('../dbcon.php');
session_start();
if(isset($_POST['submit']))
{
$id = $_POST['id'];
$company=$_POST['company'];
$location=$_POST['location'];
$title=$_POST['title'];
$description=$_POST['description'];
$salary=$_POST['salary'];
$link=$_POST['link'];
$c=$_SESSION['user'];
$sql = "update jobs set company='$company',location='$location', title='$title', description ='$description', salary='$salary',link='$link' WHERE id= '$id'";
$result = mysqli_query($db,$sql);
if($result){
    echo "<script> alert('UPDATED SUCCESSFULLY ') </script>"; 
    echo '<script> window.location.replace("Alljobs.php")</script>';  
}
else{
    echo mysqli_error($db);
}
}
?>