<?php
header("Access-Control-Allow-Origin: *");

require_once('Validation.php');



// prfloat_r($_POST);


class Furniture extends Dbh{


    public function setProduct(){
        $result = $this->connect();
        $val = new Validation();

        $val->name("sku")->value($_POST["sku"])->required();
        $val->name("height")->value($_POST["height"])->pattern('float')->required();
        $val->name("length")->value($_POST["length"])->pattern('float')->required();
        $val->name("width")->value($_POST["width"])->pattern('float')->required();
        $val->name("price")->value($_POST["cost"])->pattern('float')->required();
       
        if($val->isSuccess()){
         
$skuNr= $_POST["sku"];

$objName = $_POST["name"];

$dimensions = $_POST["height"]."X".$_POST["length"]."X".$_POST["width"]."cm";
// echo $dimensions;
$objCost =$_POST["cost"];

    $query ="INSERT INTO `products` (`sku`, `name`, `price`, `attributes`) 
    VALUES ('$skuNr','$objName', '$objCost','$dimensions');";
    if(mysqli_query($result,$query)){
        echo "Data succes";
    }
    else{
        // echo "shiiet";
       
    }}






       


else{
            // echo "Validation error!";
            // var_dump($val);
            echo $val->displayErrors();
    
            // echo $val->name;
            
        }



    }

}




class Book extends Dbh{


    public function setProduct(){
        $result = $this->connect();
        $val = new Validation();

        $val->name("sku")->value($_POST["sku"])->required();
        $val->name("weight")->value($_POST["weight"])->pattern('float')->required();
        $val->name("price")->value($_POST["cost"])->pattern('float')->required();
       
        if($val->isSuccess()){
         
$skuNr= $_POST["sku"];

$objName = $_POST["name"];

$dimensions = $_POST["weight"]."Kg";
// echo $dimensions;
$objCost =$_POST["cost"];

    $query ="INSERT INTO `products` (`sku`, `name`, `price`, `attributes`) 
    VALUES ('$skuNr','$objName', '$objCost','$dimensions');";
    if(mysqli_query($result,$query)){
        echo "Data succes";
    }
    else{
        // echo "shiiet";
       
    }}






       


else{
            // echo "Validation error!";
            // var_dump($val);
            echo $val->displayErrors();
    
            // echo $val->name;
            
        }



    }

}



class Dvd extends Dbh{


    public function setProduct(){
        $result = $this->connect();
        $val = new Validation();

        $val->name("sku")->value($_POST["sku"])->required();
        $val->name("size")->value($_POST["size"])->pattern('float')->required();
        $val->name("price")->value($_POST["cost"])->pattern('float')->required();
       
        if($val->isSuccess()){
         
$skuNr= $_POST["sku"];

$objName = $_POST["name"];

$dimensions = $_POST["size"]."MB";
// echo $dimensions;
$objCost =$_POST["cost"];

    $query ="INSERT INTO `products` (`sku`, `name`, `price`, `attributes`) 
    VALUES ('$skuNr','$objName', '$objCost','$dimensions');";
    if(mysqli_query($result,$query)){
        echo "Data succes";
    }
    else{
    
       
    }}






       


else{
            // echo "Validation error!";
            // var_dump($val);
            echo $val->displayErrors();
    
            // echo $val->name;
            
        }



    }

}















// header("Access-Control-Allow-Origin: *");


//     // print_r($_POST);

//     // echo $_POST["size"];
// class grub{
 
// function sayHelloLater(){
//     foreach ($_POST as $key => $value) 
//     {
        
//       $audi = new $_POST[$key]($_POST[$key]);
//       return json_encode($audi->intro());
        
//     }
    
// }
// // $hello = sayHelloLater();
// // echo $hello;


// }


// abstract class Val {
//     public $name;
//     public function __construct($name) {
//       $this->name = $name;
//     }
//     abstract public function intro();
//   }



//   class size extends Val {
//     public function intro() {
//       return ' Format must contain only numbers of size1'.$this->name ;
//     }
//   }


//   class weight extends Val {
//     public function intro() {
//       return ' Format must contain only numbers weight1'.$this->name ;
//     }
//   }


//   class height extends Val {
//     public function intro() {
//       return ' Format must contain only numbers karamba1'.$this->name ;
//     }
//   }


// $say = new grub();
// echo json_encode($say->sayHelloLater() );

// if (!empty($_POST["state"])){

//     foreach ($_POST as $key => $value) 
//     {
//         echo $key;
//     }
// }