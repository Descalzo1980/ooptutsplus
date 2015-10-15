<?php

require 'app/User.php';
require 'app/Helper.php';
require 'app/Validator.php';

$rules = ['email' => 'required|email', 'password' => 'required|min:8'];
$data  = ['email' => 'ddddddddd@xcvv.com', 'password' => '123456789', 'foo' => 'bar'];

$validator = new Validator();
if($validator->validate($data, $rules) == true){
    $joost = new User($data);

    $joost->email = 'gogogoog@lff.com';
    $joost->password = 'askdljsdksdfjsl';
//    var_dump($joost->email);
//    var_dump($joost->password);
//    var_dump($joost);

    echo $joost;
}
else{
    var_dump($validator->getErrors());
}




