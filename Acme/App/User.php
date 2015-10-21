<?php
/**
 * Created by PhpStorm.
 * User: STAS
 * Date: 13.10.2015
 * Time: 22:07
 */
namespace Acme\App;

class User {

    protected $email;
    protected $password;
    protected $isAdmin = false;
    protected $fillable = ['email', 'password'];
    protected $accessible = ['email', 'password'];

    public function __construct(Array $params = [])
    {
        if(count($params)){
            foreach($params as $key => $value){
                $this->$key = $value;
            }
        }
    }

    public function __set($name, $value)
    {
        if(! in_array($name, $this->fillable)){
            return false;
        }
        if(isset($this->$name)){
            $this->$name = $value;
        }
    }

    public function __get($name)
    {
        if(! in_array($name, $this->accessible)){
            return NULL;
        }
        return isset($this->$name) ? $this->$name : NULL;
    }

    public function __toString()
    {
        $data = [];

        foreach ($this->accessible as $key){
            $data[$key] = $this->$key;
    }

        return json_encode($data);
    }

    public function login()
    {
        return 'Login in a user...';
    }

    public function logout()
    {
        return 'Logging out';
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

