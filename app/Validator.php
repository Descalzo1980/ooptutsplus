<?php
/**
 * Created by PhpStorm.
 * User: STAS
 * Date: 14.10.2015
 * Time: 23:32
 */

class Validator {

    private $errors = [];

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
} 