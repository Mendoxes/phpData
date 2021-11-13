<?php
include "dbh.php";
include "god.php";
include "god2.php";
include "delete.php";
include "post.php";

header("Access-Control-Allow-Origin: *");

?>



<?php


    // echo $recText1;
// echo $_POST["size"];
// print_r($_POST);

if(!empty($_POST['columns'])) {
    echo "a sentence".$_POST['columns']." with something in the middle.";
    $ok3 =new Delete();
$ok3 ->deleteProduct();
 }

//  if(!empty($_POST["text"])){
// $ok2 =new Post();
// $ok2 ->setProduct();}

if(!empty($_POST["atrrCheck"])){
$audi = new $_POST["atrrCheck"]($_POST["atrrCheck"]);
echo json_encode($audi->intro());


}
if(!empty($_POST["text"])){
$products = new valSku();
echo $products->getAllSku($_POST["sku"]);





$ok2 =new Post();
$ok2 ->setProduct();


}

// foreach ($_POST as $key => $value) 
// {
//     echo $key;
// }

// if (!empty($_POST["state"])){

//     foreach ($_POST as $key => $value) 
//     {
//         echo $key;
//     }
// }




?>
