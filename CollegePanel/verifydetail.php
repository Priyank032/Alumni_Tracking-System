<?php
session_start();
require "../dbcon.php";

if(!isset($_SESSION['college']))
{
    header("location:../login.php");
}
else{
    $a=$_SESSION['college'];
    if(isset($_POST['check']))
    {
        $rno=$_POST['rno'];
        $_SESSION['alumni']=$rno;
        $sql1="SELECT * FROM alumni where rno='$rno' and college='$a'";
        $rec1=mysqli_query($db,$sql1);
        $row=mysqli_fetch_array($rec1);
        $name=$row['name'];
        $year=$row['year'];
        $college=$row['college'];
        $email=$row['email'];
        $course=$row['Course'];
        // $branch=$row['branch'];
        if(mysqli_num_rows($rec1))
        {
            $sql2="UPDATE alumni set verified=1  where rno='$rno'";
            $rec2=mysqli_query($db,$sql2);
            if($rec2)
            {
                $sql3="Insert into col_alumni Values('$rno','$name','$email','$year','$college','$course')";
                $rec3=mysqli_query($db,$sql3);
                if($rec3)
                {
                    echo "<script> alert('Alert Successfully') </script>";  
                    echo '<script> window.location.replace("allalumni.php")</script>'; 
                }
            }
            else 
            {
               echo "not verified";
            }
        //  header("Refresh:0.05; url= 'verify2.php' ");
        }
        else{
            echo "<script> alert('NOT VERIFIED!! Please check it out..') </script>";
        }
    }
}
    ?>