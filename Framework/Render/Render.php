<?php

class Render implements RenderInterface
{
    public function __construct()
    {
    }

    public function render(string $template, array $params, string $layout)
    {
        $template = $template . '.php';
        $layout = $layout . '.php';
        if (is_file($template) && is_file($layout)) {
            ob_start();
            extract(array_merge($params, ["templates" => "${template}"]));
            include $layout;
            return ob_get_clean();
             }
        return false;
    }
}
