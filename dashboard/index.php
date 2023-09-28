<!doctype html>
<html class="no-js" lang="en">

<?php
include "head.html";
include "OOP_db.php";
$content = new db;
$allContent = $content->select("currency", "*")->getAll();

?>


<body>
    <!-- ssssssssss -->



    <script>
        function myFunction() {

            // Declare variables 
            var input = document.getElementById("myInput");
            var filter = input.value.toUpperCase();
            var table = document.getElementById("myTable");
            var rows = table.tBodies[0].getElementsByTagName("tr");

            // Loop through first tbody's rows
            for (var i = 1; i < rows.length; i++) {

                // define the row's cells
                var tds = rows[i].getElementsByTagName("td");

                // hide the row
                rows[i].style.display = "none";

                // loop through row cells
                for (var i2 = 1; i2 < tds.length - 2; i2++) {

                    // if there's a match
                    if (tds[i2].innerHTML.toUpperCase().indexOf(filter) > -1) {

                        // show the row
                        rows[i].style.display = "";

                        // skip to the next row
                        continue;

                    }
                }
            }

        }

    </script>


    <!-- ssssssss -->
    <div class="left-sidebar-pro">
        <?php include "nav.html"; ?>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>

        <?php include "header.html"; ?>
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>currency List</h4>
                            <div class="add-product">
                                <a href="product-edit.php">Add currency</a>
                            </div>
                            <table id="myTable">

                                <tr>
                                    <th>Image</th>
                                    <th>currency Name</th>
                                    <th>Price To USD</th>
                                    <th>Setting</th>
                                </tr>

                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

                                <?php foreach ($allContent as $content): ?>
                                    <tr class="saaa">
                                        <td>
                                            <img src="https://flagcdn.com/48x36/<?= $content['country_list_img']; ?>.png" />
                                        </td>
                                        <td>
                                            <?= $content['name']; ?>
                                        </td>
                                        <td>
                                            <?= $content['value']; ?>
                                        </td>
                                        <td>
                                            <a href="edit.php?id=<?= $content['id']; ?>">
                                                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                            <a href="delete.php?id=<?= $content['id']; ?>">
                                                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>












</body>

</html>