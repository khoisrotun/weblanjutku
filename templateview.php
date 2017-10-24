<?php
class View
{
    private $model;

    public function __construct($model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output(){
        $data = "<p>" . $this->model->tstring ."</p>";
        require_once($this->model->template);
    }
}
