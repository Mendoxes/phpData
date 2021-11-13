<?php
include "dbh.php";
include "product.php";
include "viewproduc.php";
include "set.php";
include "post.php";
// include "try.php";
header("Access-Control-Allow-Origin: *");

?>



<?php

// echo json_encode($_REQUEST);

$products = new ViewProduct();
$products->showAllProducts();


// if(10>1){
// $strawberry = new Strawberry("Strawberry", "red");
// $strawberry->message();
// $strawberry->intro();}

// $ok =new Set();
// $ok ->saveRecords();
// $ok2 =new Post();
// $ok2 ->setProduct();


// $data = new Product();
// $data ->getAllProducts();


?>
