<?php

namespace Framework\Core;

use Framework\Database\Database;

class Controller{

    public static Database $db;
    public View $view;
    public Model $model;

    function __construct(){
        $this->view = new View();
        $this->model = new Model();
        $this::$db = new Database();
    }
    function action(){

    }

}