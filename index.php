<?php

require 'app/User.php';
require 'app/Helper.php';
require 'app/Validator.php';

$rules = ['email' => 'required|email', 'password' => 'required|min:8'];
$data  = ['email' => 'ddddddddd@xcvv.com', 'password' => '13sdfsfdfddf'];

$validator = new Validator();
if($validator->validate($data, $rules) == true){
    $joost = new User();
    $joost->setEmail($data['email'])
          ->setPassword(getHash($data['password']));
    var_dump($joost);
}
else{
    var_dump($validator->getErrors());
}




