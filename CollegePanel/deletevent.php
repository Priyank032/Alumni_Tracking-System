<?php
include('../dbcon.php');
$id = $_GET['id'];
$deletequery = "delete from event where id = $id";
$query = mysqli_query($db,$deletequery);
if($query) {
    ?>
    <script>
    alert("Deleted Successfully!");
    </script>
    <?php
    header('location:Allevent.php');
}
else{
    ?>
     <script>
    alert("NOT Deleted!");
    </script>
<?php
}
?>