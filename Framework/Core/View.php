<?php

namespace Framework\Core;

class View
{
    public function render(string $template = null, array $params = null, string $layout)
    {
        if (is_array($params)) {
            extract($params);
        }
        include '../App/View/Layouts/' . $layout;
    }
}
