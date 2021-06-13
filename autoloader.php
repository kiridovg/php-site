<?php

class Autoloader
{
    public $rules;
    public function __construct(array $rules = [])
    {
        $this->rules = $rules;
    }

    public function load($classname)
    {
        foreach($this->rules as $key => $value){
            $classname = str_replace($key, $value, $classname);
        }
        $dir = explode('\\', $classname);
        $dir = implode('/', $dir) . '.php';
        if (is_file($dir)) {
            require_once $dir;
            return true;
        }
        return false;
    }
}