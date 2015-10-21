<?php
/**
 * Created by PhpStorm.
 * User: STAS
 * Date: 16.10.2015
 * Time: 21:46
 */

namespace Acme\Library;

/**
 * Class User
 * @package Joostvanveen\Library
 */
class User {

    private $foo; //only here
    protected $bar; // can be extend to child class, not outside
    public $moo; // everywhere

    protected function login()
    {
        return 'Library? ...';
    }

}