<?php

namespace Acme\App\Traits;

trait Accessible
{

    protected $fillable = [];
    protected $accessible = [];

    public function __set($name, $value)
    {
        if(count($this->fillable) && ! in_array($name, $this->fillable)){
            return false;
        }
        if(property_exists($this, $name)){
            $this->$name = $value;
        }
    }

    public function __get($name)
    {
        if(count($this->accessible) && ! in_array($name, $this->accessible)){
            return NULL;
        }
        return property_exists($this, $name) ? $this->$name : NULL;
    }

//    abstract public function getProperty();
}