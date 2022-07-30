<?php
include '../dbcon.php';
$id = $_GET['id'];
$deletequery = "delete from jobs where id = $id";
$query = mysqli_query($db,$deletequery);
if($query) {
    ?>
    <script>
    alert("Deleted Successfully!");
    </script>
    <?php
    header('location:Alljobs.php');
}
else{
    ?>
     <script>
    alert("NOT Deleted!");
    </script>
<?php
}
?>