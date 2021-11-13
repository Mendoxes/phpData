<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
header("Access-Control-Allow-Origin: *");
// $rest_json = file_get_contents("php://input");
// $_POST = json_decode($rest_json, true);
// echo $_POST;

// $data = json_decode(file_get_contents('php://input'), true);
// print_r($data);


$serverName = "localhost";
$username = "root";
$password="";
$databaseName="react_php";
$conn = mysqli_connect($serverName,$username,$password,$databaseName);
$recText =$_POST["text"];
$recText2 =$_POST["nur"];
$respi = "costam";

// if(!empty($_POST)){ echo $respi};



// $sql ="INSERT INTO `new_table` (`id`, `texts`) VALUES ('4', 'costam223')";
//   mysqli_query($conn,$sql);

// foreach ($_POST as $key => $value) 
// {
//  echo $key;
//  echo $value;
// }

// INSERT INTO `new_table` (`id`, `texts`) VALUES ('18', 'nowe ');

$query ="INSERT INTO `new_table` (`id`, `texts`) VALUES ('$recText2','$recText')";

if(mysqli_query($conn,$query)){
    echo "Data succes";
}
else{
    echo "shiiet";
}
?>

<div>ok czemu to nie dziala



</div>