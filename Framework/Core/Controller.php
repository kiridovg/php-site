<?php

namespace Framework\Core;

class Controller{

    public View $view;
    public Model $model;

    function __construct(){
        $this->view = new View();
        $this->model = new Model();
    }
    function action(){

    }

}