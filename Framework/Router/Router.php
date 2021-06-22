<?php

namespace Framework\Router;

class Router
{
    private array $route = [];

    public function link(string $url, $controller)
    {
        $url = '/^' . str_replace('/', '\/', $url) . '$/';
        $this->route[$url] = $controller;
    }

    public function run()
    {
        $url = $this->getUrl();
        foreach ($this->route as $pattern => $controller) {
            if (preg_match($pattern, $url, $param)) {
                $controller[0] = new $controller[0]();
                array_shift($param);
                return call_user_func($controller, $param);
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