<?php
// include "dbh.php";
require_once('Validation.php');






class Post extends Dbh{

    public function setProduct(){

$result = $this->connect();
$recText =$_POST["text"];
$recText2 =$_POST["nur"];
$recText3 =$_POST["attr"];
$recText4 =$_POST["sku"];
$recText5 = $_POST["size"];
$recText6 = $_POST["width"];
$recText7 = $_POST["length"];



$email = 'example@email.com';
    $username = 'admin';
    $password = 'Wdsasdt12';
    $age = 29;
    
    $val = new Validation();
    // $val->name('email')->value($email)->pattern('email')->required();
    // $val->name("name")->value($recText4)->pattern('alpha')->required();
    $val->name("price")->value($recText2)->pattern('float')->required();
    $val->name('age')->value($age)->min(18)->max(40);
    
    if($val->isSuccess()){
        if(!empty($recText5)){
        $query ="INSERT INTO `products` (`sku`, `name`, `price`, `attributes`) 
        VALUES ('$recText4','$recText2', '$recText','$recText5');";
        if(mysqli_query($result,$query)){
            echo "Data succes";
        }
        else{
            // echo "shiiet";
           
        }}
    }else{
    	// echo "Validation error!";
        // var_dump($val);
        echo $val->displayErrors();

        // echo $val->name;
        
    }


    // $courseid = $_POST['sku'];

    // $result2 = mysql_query("SELECT 1 * FROM products WHERE sku = $courseid'");
    // if( mysql_num_rows( $result2 )> 1 ) {
    //     echo "Course ID Already in Exists<br/>";
    // } else {   
    //     //other code here
    // } ;








// if(mysqli_query($result,$query)){
//     echo "Data succes";
// }
// else{
//     // echo "shiiet";
   
// }

}




}



