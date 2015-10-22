<?php

namespace Acme\App;

//use Acme\Library\User;

class Member extends User
{

    public function login()
    {
        $massage = parent::login();
        return $massage . '....Set a flag in the online member table';
    }
}