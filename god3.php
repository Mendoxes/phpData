<?php
require_once('Validation.php');

$email = 'example@email.com';
    $username = 'admin';
    $password = 'test12';
    $age = 29;
    
    $val = new Validation();
    $val->name('email')->value($email)->pattern('email')->required();
    $val->name('username')->value($username)->pattern('alpha')->required();
    $val->name('password')->value($password)->customPattern('[A-Za-z0-9-.;_!#@]{5,15}')->required();
    $val->name('age')->value($age)->min(18)->max(40);
    
    if($val->isSuccess()){
    	echo "Validation ok!";
    }else{
        echo $val->displayErrors();
    }