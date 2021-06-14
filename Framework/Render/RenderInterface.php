<?php

interface RenderInterface
{
    public function render(string $template, array $params, string $layout);
}