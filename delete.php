<?php

class Delete extends Dbh{

    public function deleteProduct(){

$result = $this->connect();
// $recText =$_POST["text"];
// $recText2 =$_POST["nur"];
// $recText3 =$_POST["attr"];


$parts = explode(',', $_POST["columns"]);

foreach($parts as $id){

    // echo $parts[$i]."<br/>";

    $query = "DELETE FROM `products` WHERE `sku`=$id";
    if(mysqli_query($result,$query)){
        echo "Data succes";
    }
    else{
        echo "shiiet";
    }
   
};

// $query = "DELETE FROM `products` WHERE `sku`=2";

// $query ="INSERT INTO `products` (`name`, `price`, `attributes`) 
// VALUES ('$recText','$recText2','$recText3');";




if(mysqli_query($result,$query)){
    echo "Data succes";
}
else{
    echo "shiiet";
}

}




}