<?php
header("Access-Control-Allow-Origin: *");
class ViewProduct  extends Product {


public function showAllProducts(){

$datas = $this->getAllProducts();
// foreach($datas as $data){

//     // echo  json_encode($data["name"], $data["price"]);
// }

echo json_encode($datas);
}}





// class TheClass {
//     public $Name;
//     public $Number;
//     function MrFunction() { /* bla bla bla */ }

//    public function __toString()
//    {
//      return $this->Name . ' '. $this->Number;
//    }
// }


// echo $theClassInstance;