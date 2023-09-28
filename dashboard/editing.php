<?php


include "OOP_db.php";
$content = new db;
$allContent = $content->select("currency", "*")->where("id", "=", $_GET['id'])->getRow();


// $name = $allContent['name'];
// $country_list_img = $allContent['country_list_img'];
// $value = $allContent['value'];

$newCountry = [
    "name" => $allContent['name'],
    "country_list_img" => $allContent['country_list_img'],
    "value" => $allContent['value']
];

return $content->update("currency", $newCountry);

// header("Refresh: 2; url=product-list.php");



?>