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