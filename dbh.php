<?php


class Dbh {
//private becouse we dont want users to have acces to it
    public $servername;
    private $username;
    private $password;
    private $dbname;

//just for connection 
protected function connect(){

    $this->servername = "localhost";
    $this->username = "root";
    $this->password = "";
    $this->dbname = "testphp";

    //oop not proced
    $conn = new mysqli($this->servername,$this-> username,$this->password,$this->dbname);
return $conn;

}
}

?>