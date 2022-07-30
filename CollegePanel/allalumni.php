<?php
session_start();
require "../dbcon.php";

if(!isset($_SESSION['college']))
{
    header("location:../login.php");
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
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>All Alumni</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="register.css">
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
        text-align: center;
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
    <?php include "sidebar.php"?>

    <div class="mainadd">

        <div class="container">
            <h1>All Alumni</h1>
            <div id="toolbar">
                <!-- <select class="form-control">
                    <option value="">Export Basic</option>
                    <option value="all">Export All</option>
                    <option value="selected">Export Selected</option>
            </select> -->
                <a href="add.php"><button type="button" class="btn btn-primary">Add Alumni</button></a>
                <br>
            </div>

            <table id="table" data-toggle="table" data-search="true" data-filter-control="true" data-show-export="true"
                data-click-to-select="true" data-toolbar="#toolbar" data-show-pagination-switch="true"
                data-pagination="true" data-show-columns="true" data-show-columns-toggle-all="true"
                data-detail-view="true" data-escape="false">
                <thead>
                    <tr>
                    <th data-field="state" data-checkbox="true"></th>
                        <th data-field="S.no" data-filter-control="input" data-sortable="true">S.no</th>
                        <th data-field="Roll Number" data-filter-control="input" data-sortable="true">Roll Number</th>
                        <th data-field="Name" data-filter-control="input" data-sortable="true">Name</th>
                        <th data-field="Year" data-filter-control="input" data-sortable="true">Year</th>
                        <th data-field="College Name" data-filter-control="input" data-sortable="true">College Name</th>
                        <th data-field="Course" data-filter-control="input" data-sortable="true">Course</th>
                        <!-- <th data-field="Branch" data-filter-control="input" data-sortable="true">Branch</th> -->
                        <th data-field="Action" data-filter-control="false" data-sortable="false">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
              $i=1;
              $name= $_SESSION['college'];
              $query = "select * from col_alumni where col_name ='$name' ";
              $result = mysqli_query($db,$query);
              while( $row = mysqli_fetch_array($result))
              {
                ?>
                    <tr>
                        <td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox"></td>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['rno']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['year']; ?></td>
                        <td><?php echo $row['col_name']; ?></td>
                        <td><?php echo $row['course']; ?></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Modify
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item"
                                        href="updatealumni.php?a_id=<?php echo $row['rno'];?>"><button type="button"
                                            class="btn btn-success">UPDATE</button></a>
                                    <a class="dropdown-item"
                                        href="deletealumni.php?a_id=<?php echo $row['rno'];?>"><button
                                            class=" btn btn-danger"
                                            onclick="return confirm('Are you sure you want to Delete?');"
                                            id="btnDelete">Delete</button>

                                    </a>

                                </div>
                            </div>
                        </td>
                     
                       
                    </tr>
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