<?php

require 'autoload.php';

$rules = ['email' => 'required|email', 'password' => 'required|min:8'];
$data  = ['email' => 'ddddddddd@xcvv.com', 'password' => '123456789', 'foo' => 'bar'];

$validator = new Joostvanveen\App\Validator();
if($validator->validate($data, $rules) == true){
    $joost = new Joostvanveen\App\User($data);
    var_dump($joost);

    $nick = new Joostvanveen\Library\User();
    var_dump($nick);
}
else{
    var_dump($validator->getErrors());
}




