<?php

namespace Framework\Router;

class Router
{
    private array $route = [];


    public function get(string $url, $contoller)
    {
        $url = '/^' . str_replace('/', '\/', $url) . '$/';
        $this->route[$url] = $contoller;
    }

    public function run()
    {
        $url = $this->getUrl();
        foreach ($this->route as $pattern => $contoller) {
            if (preg_match($pattern, $url, $param)) {
                $controller = new $contoller[0]();
                $contoller[0] = $controller;
                return call_user_func($contoller, $param[0]);
            }
        }
    }

    public function getUrl()
    {
        $path = $_SERVER["REQUEST_URI"];
        $position = strpos($path, '?');
        if ($position !== false) {
            $path = substr($path, 0, $position);
        }
        return $path;
    }

}