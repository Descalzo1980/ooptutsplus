<?php

require 'App/Helper.php';
require 'App/User.php';
require 'App/Validator.php';
require 'Library/User.php';

$rules = ['email' => 'required|email', 'password' => 'required|min:8'];
$data  = ['email' => 'ddddddddd@xcvv.com', 'password' => '123456789', 'foo' => 'bar'];

$validator = new Validator();
if($validator->validate($data, $rules) == true){
    $joost = new User($data);
    var_dump($joost);

    $nick = new Library\User();
    echo $nick->login();
    var_dump($nick);
}
else{
    var_dump($validator->getErrors());
}




