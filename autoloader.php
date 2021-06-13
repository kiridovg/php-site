<?php

class Autoloader
{
    public function __construct(array $rules = [])
    {

    }

    public function load($classname)
    {
        $dir = explode('\\', $classname);
        $dir = implode('/', $dir) . '.php';
        if (is_file($dir)) {
            require_once $dir;
            return true;
        }
        return false;
    }
}