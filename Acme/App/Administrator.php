<?php

namespace Acme\App;

//use Acme\Library\User;

class Administrator extends User {

    public function __construct(){
        $this->isAdmin = true;
    }

    public function login()
    {
        $massage = parent::login();
        return $massage . '....And logging the last login date for the administrator';
    }

    public function reportForDuty()
    {

    }
}