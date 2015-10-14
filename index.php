<?php

require 'User.php';

$joost = new User();

$joost->setPassword('12345hjkwerw');
$joost->setEmail('jooo@cc.com');

$mike = clone $joost;

$mike->setEmail('mike@mmm.com');
$mike->setPassword('1231234ds');

var_dump($joost);
echo '</br>';
var_dump($mike);
echo '</br>';


