<?php

namespace Acme\App;

//use Acme\Library\User;

class Administrator extends User {

    public function __construct(Array $params = []){
        parent::__construct($params);
        $this->isAdmin = true;
    }

    public function login()
    {
        return 'Do stuff' . '....And logging the last login date for the administrator';
    }

    public function reportForDuty()
    {

    }
}