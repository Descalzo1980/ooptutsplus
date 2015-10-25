<?php
/**
 * Created by PhpStorm.
 * User: STAS
 * Date: 13.10.2015
 * Time: 22:07
 */
namespace Acme\App;

abstract class User {

    use \Acme\App\Traits\Curlable;
    use \Acme\App\Traits\Accessible;

    protected $facebookid;
    protected $email;
    protected $password;
    protected $isAdmin = false;

    public function __construct(Array $params = [])
    {
        $this->fillable[] = 'email';
        $this->fillable[] = 'password';
        $this->fillable[] = 'facebookid';
        $this->accessible[] = 'email';
        $this->accessible[] = 'password';
        $this->accessible[] = 'facebookid';


        if(count($params)){
            foreach($params as $key => $value){
                $this->$key = $value;
            }
        }
    }

    public function getProperty(){}

    public function getFacebookData()
    {
        $url = 'http://graph.facebook.com/' . $this->facebookid;
        return json_decode($this->curl($url), true);
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

