<?php
/**
 * Created by PhpStorm.
 * User: STAS
 * Date: 14.10.2015
 * Time: 23:32
 */

namespace Joostvanveen\App;

class Validator {

    private $errors = array();

    public function validate(Array $data, Array $rules)
    {
        $valid = true;

        foreach($rules as $item => $ruleset){

            $ruleset = explode('|', $ruleset);

            foreach($ruleset as $rule){

                $pas = strpos($rule, ':');
                if ($pas !== false){
                    $parameter = substr($rule, $pas + 1);
                    $rule = substr($rule, 0, $pas);
                }
                else{
                    $parameter = '';
                }
                $methodName = 'validate'. ucfirst($rule);
                $value = isset($data[$item]) ? $data[$item] : NULL;
                if(method_exists($this, $methodName)){
                    $this->$methodName($item, $value, $parameter) OR $valid = false;
                }

            }
        }

        return $valid;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    private function validateRequired($item, $value, $parameter)
    {
        if($value === '' || $value === NULL){
            $this->errors[$item][] = 'The ' . $item. ' field is required';
            return false;
        }
        return true;
    }

    private function validateEmail($item, $value, $parameter)
    {
        if(! filter_var($value, FILTER_VALIDATE_EMAIL)){
            $this->errors[$item][] = 'The ' . $item. ' field should be a valid email';
            return false;
        }
        return true;
    }

    private function validateMin($item, $value, $parameter)
    {
        if(strlen($value) >= $parameter == false){
        $this->errors[$item][] = 'The ' . $item . ' field should be a minimum length '. $parameter;
        return false;
    }
        return true;
    }
} 