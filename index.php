<?php

require 'app/User.php';
require 'app/Helper.php';
require 'app/Validator.php';

$rules = ['email' => 'required|email', 'password' => 'require|min:8'];
$data  = ['email' => 'stas@mail.com', 'password' => '1234stas'];

$validator = new Validator();
$validator->validate($rules, $data);




