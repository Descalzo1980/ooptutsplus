<?php
/**
 * Created by PhpStorm.
 * User: STAS
 * Date: 14.10.2015
 * Time: 23:32
 * @param $string
 * @return string
 */

function getHash($string){
    return hash('sha256', $string);
}

function autoload($className)
{
    $file = dirname(__FILE__) . '/' . $className . '.php';
    if(file_exists($file)){
        require $file;
    }
}

spl_autoload_register('autoload');