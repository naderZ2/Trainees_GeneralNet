<?php

include "OOP_db.php";
$content = new db;
$allContent = $content->select("currency", "*")->where("id", "=", $_GET['id'])->getRow();


$name = $allContent['name'];
$country_list_img = $allContent['country_list_img'];
$value = $allContent['value'];


if (isset($_POST['submit'])) {

    $newName = $_POST['name'];
    $newCountry_list_img = $_POST['country_list_img'];
    $newValue = $_POST['value'];

    $newCountry = [
        "name" => $newName,
        "country_list_img" => $newCountry_list_img,
        "value" => $newValue
    ];

    header("LOCATION:product-list.php");
    return $content->update("currency", $newCountry)->where("id", "=", $_GET['id'])->excu();


}
?>


<!doctype html>
<html class="no-js" lang="en">

<?php
include "head.html";

?>


<body>

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
                                                <input type="text" class="form-control" value="<?= $name ?>"
                                                    name=" name" placeholder="Currency Name">
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="icon nalika-edit"
                                                        aria-hidden="true"></i></span>
                                                <input type="text" class="form-control"
                                                    placeholder="Currency abbreviation" value="<?= $country_list_img ?>"
                                                    name='country_list_img'>
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-usd"
                                                        aria-hidden="true"></i></span>
                                                <input type="number" class="form-control" value="<?= $value ?>"
                                                    name='value' placeholder=" Currency Value">
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

</body>

</html>