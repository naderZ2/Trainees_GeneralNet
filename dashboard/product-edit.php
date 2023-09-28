<?php

include 'OOP_db.php';
$content = new db;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $value = $_POST['value'];
    $country_list_img = $_POST['country_list_img'];

    $newCountry = [
        "name" => $name,
        "country_list_img" => $country_list_img,
        "value" => $value
    ];
    // print_r($newCountry);



    $content->insert("currency", $newCountry)->excu();


    header("Refresh: 1.2; url=product-list.php");
}





?>

<!doctype html>
<html class="no-js" lang="en">

<?php
include "head.html";

?>


<body>

    <div class="sk-chase">
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
    </div>


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
                <div class="review-tab-pro-inner">
                    <ul id="myTab3" class="tab-review-design">
                        <li class="active">
                            <a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i>Add currency</a>
                        </li>
                    </ul>
                    <form active='' method='post'>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="icon nalika-user"
                                                        aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Currency Name">
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="icon nalika-edit"
                                                        aria-hidden="true"></i></span>
                                                <input type="text" class="form-control"
                                                    placeholder="Currency abbreviation" name='country_list_img'>
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-usd"
                                                        aria-hidden="true"></i></span>
                                                <input type="number" class="form-control" name='value'
                                                    placeholder="Currency Value">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="text-center custom-pro-edt-ds">
                                            <input type="submit" name="submit" value="Save"
                                                class="btn btn-ctl-bt waves-effect waves-light m-r-10">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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