<?php

require 'autoload.php';

$rules = ['email' => 'required|email', 'password' => 'required|min:8'];
$data  = ['email' => 'ddddddddd@xcvv.com', 'password' => '123456789', 'foo' => 'bar'];

$validator = new Acme\App\Validator();
if($validator->validate($data, $rules) == true){

    $joost = new Acme\App\Administrator();
    echo $joost->login();
}
else{
    var_dump($validator->getErrors());
}





