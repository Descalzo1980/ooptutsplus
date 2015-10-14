<?php
/**
 * Created by PhpStorm.
 * User: STAS
 * Date: 14.10.2015
 * Time: 23:32
 */

function getHash($string){
    return hash('sha256', $string);
}