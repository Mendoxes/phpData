<?php
header("Access-Control-Allow-Origin: *");
include "dbh.php";
include "end.php";
include "newSkul.php";
// include "valSku.php";


// echo $_POST["type"];
// print_r($_POST);


    $products = new valSku();
    echo $products->getAllSku($_POST["sku"]);

$ok2 =new $_POST["type"]();
$ok2 ->setProduct();
