<?php
session_start();
require "../dbcon.php";

if(!isset($_SESSION['director']))
{
    header("location:../login.php");
}

if(isset($_POST['Delete']))
    {
          $id = $_POST['coll_id'];

          $sql = "delete from college where cid = '$id'";

    $rese=mysqli_query($db,$sql);
    if(!$rese){
        echo "<script>alert('not Deleted Successfully')</script>";
    }else{
        echo "<script>alert('Deleted Successfully')</script>";
       echo '<script> window.location.replace("AllColleges.php")</script>';
    }
    }
?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="s.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Document</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="register.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.min.css">
    <link rel="stylesheet"
        href="https://rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/editable/bootstrap-table-editable.js">
    </script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/export/bootstrap-table-export.js">
    </script>
    <script src="https://rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/filter-control/bootstrap-table-filter-control.js">
    </script>
    <style>
    .mainadd {
        /* overflow-x: hidden; */
        overflow-y: hidden;
        padding-top: 30px;

    }

    h1 {
        color: rgb(57, 57, 97);
        padding: 12px;
    }

    h3 {
        padding: 7px;
        color: rgb(92, 113, 128);
    }

    h6 {
        padding: 5px;
        color: rgb(112, 37, 37);
    }

    .container {
        width: 1024px;
        padding: 2em;
    }

    .bold-blue {
        font-weight: bold;
        color: #0277BD;
    }
    </style>
</head>

<body>
    <?php
    require("sidebar.php")
    ?>
    <section class="home-section">
    <?php
    require("nav.php")
    ?>
        <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->


        <div class="mainadd">
            <div class="container ">


                <h2 class="text-center pt-5">All Colleges</h2>
                <div id="toolbar">
                    <a href="AddCollege.php" class="btn btn-primary">Add College</a>
                    <!-- <button class="btn btn-primary">Add New Notice</button> -->
                </div>
                <!-- <div id="toolbar">
            <select class="form-control">
              <option value="">Export Basic</option>
              <option value="all">Export All</option>
              <option value="selected">Export Selected</option>
            </select>
          </div> -->

                <table id="table" data-toggle="table" data-search="true" data-filter-control="true"
                    data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar"
                    data-show-pagination-switch="true" data-pagination="true" data-show-columns="true"
                    data-show-columns-toggle-all="true" data-detail-view="true" data-escape="false">
                    <thead>
                        <tr>
                            <!-- <th data-field="state" data-checkbox="true"></th> -->
                            <th data-field="S.no" data-filter-control="input" data-sortable="true">S.No</th>
                            <th data-field="Name" data-filter-control="input" data-sortable="true">Name</th>
                            <th data-field="Email" data-filter-control="input" data-sortable="true">Email</th>
                            <th data-field="City" data-filter-control="input" data-sortable="true">City</th>
                            <th data-field="Action" data-filter-control="false" data-sortable="false">Action</th>

                            <!-- <th data-field="date" data-filter-control="select" data-sortable="true">Date</th>
                <th data-field="examen" data-filter-control="select" data-sortable="true">Examen</th>
                <th data-field="note" data-sortable="true">Note</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=1;
                        $query="SELECT * FROM college";
                        $result=mysqli_query($db,$query);
                        while ($row=mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['coll_name']; ?></td>
                            <td><?php echo $row['coll_Email']; ?></td>
                            <td><?php echo $row['City']; ?></td>
                            <td>
                                <form action="Edit_College.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $row['coll_id'] ?>">
                                    <button type="submit" name="Edit" class="btn btn-primary">Edit</button>
                                </form>

                                <button type="button" class="btn btn-danger mt-2" data-toggle="modal"
                                    data-target="#example<?php echo $row["cid"]?>">
                                    Delete
                                </button>
                            </td>

                        </tr>
                        <div class="modal fade" id="example<?php echo $row["cid"]?>" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure to want to delete this event.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <form action="AllColleges.php" method="POST">
                                            <input type="hidden" name="coll_id" value="<?php echo $row['cid'] ?>">
                                            <button type="submit" name="Delete" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <script>
    //exporte les données sélectionnées
    var $table = $('#table');
    $(function() {
        $('#toolbar').find('select').change(function() {
            $table.bootstrapTable('refreshOptions', {
                exportDataType: $(this).val()
            });
        });
    })

    var trBoldBlue = $("table");

    $(trBoldBlue).on("click", "tr", function() {
        $(this).toggleClass("bold-blue");
    });
    </script>

    <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
    </script>

</body>

</html>