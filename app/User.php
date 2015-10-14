<?php
/**
 * Created by PhpStorm.
 * User: STAS
 * Date: 13.10.2015
 * Time: 22:07
 */

class User {

    private $email;
    private $password;

    public function login()
    {
        return 'Login in ...';
    }

    public function logout()
    {
        return 'Login out...';
    }

    public function setPassword($string)
    {
       $this->password = $string;
        return $this;
    }

    public function getPassword()
    {

        return $this->password;
    }

    public function setEmail($string)
    {
        $this->email = $string;
        return $this;
    }

    public function getEmail()
    {

        return $this->email;
    }
}

