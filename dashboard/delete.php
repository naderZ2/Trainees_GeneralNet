<?php

$connnection = mysqli_connect("localhost", "root", "", "currency_converter");
$idCurrency = $_GET['id'];

header("LOCATION: product-list.php ");
return mysqli_query($connnection, "DELETE FROM `currency` WHERE `id`=$idCurrency");


?>