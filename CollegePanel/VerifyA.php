<?php
session_start();
require "../dbcon.php";

if(!isset($_SESSION['college']))
{
    header("location:../login.php");
}
else{
    
    $a=$_SESSION['college'];
    $sql="SELECT * FROM alumni where college='$a' and verified='0' ";
    $rec=mysqli_query($db,$sql);
    

    if(mysqli_num_rows($rec)){
        while($res=mysqli_fetch_array($rec)){
            $r=$res['rno'];
        }
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
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Verify Alumni</title>
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
            <h1>Verify Alumni</h1>
            <br>

            <div id="toolbar">

            </div>

            <table id="table" data-toggle="table" data-search="true" data-filter-control="true" data-show-export="true"
                data-click-to-select="true" data-toolbar="#toolbar" data-show-pagination-switch="true"
                data-pagination="true" data-show-columns="true" data-show-columns-toggle-all="true"
                data-detail-view="true" data-escape="false">
                <thead>
                    <tr>
                        <th data-field="state" data-checkbox="true"></th>
                        <th data-field="S.No" data-filter-control="input" data-sortable="true">S.No</th>
                        <th data-field="Name" data-filter-control="input" data-sortable="true">Name</th>

                        <th data-field="Roll No" data-filter-control="input" data-sortable="true">Roll No</th>

                        <th data-field="Mobile" data-filter-control="input" data-sortable="true">Mobile</th>
                        <th data-field="Address" data-filter-control="input" data-sortable="true">Address</th>
                        <th data-field="DOB" data-filter-control="input" data-sortable="true">DOB</th>
                        <th data-field="Email" data-filter-control="input" data-sortable="true">Email</th>

                        <th data-field="College" data-filter-control="input" data-sortable="true">College</th>
                        <th data-field="Year" data-filter-control="input" data-sortable="true">Year</th>
                        <th data-field="Verify" data-filter-control="input" data-sortable="true">Verify</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
              $i=1;
              $query ="SELECT * FROM alumni where college='$a' and verified='0' ";
              $result = mysqli_query($db,$query);
              while( $row = mysqli_fetch_array($result))
              {
                ?>
                    <tr>
                        <td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox"></td>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['rno']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['dob']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['college']; ?></td>
                        <td><?php echo $row['year']; ?></td>
                        <td>
                        <form action="verifydetail.php" method="POST">
                                    <input type="hidden" name="rno" value="<?php echo $row['rno'] ?>">
                                    <button type="submit" name="check" class="btn btn-primary">Verify</button>
                                </form>
                                <!-- <form action="verify1.php" method="POST">
                                        <input type="hidden" value='1'>
                                        <input type="submit" name="check" value="<?php echo $r ?>">
                                    </form> -->
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