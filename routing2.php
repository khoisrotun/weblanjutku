<?php
$model = $_GET['model'];
$view = $_GET['view'];
$controller = $_GET['controller'];
$action = $_GET['action'];

if (!(empty($model) || empty($view) || empty($controller) || empty($action))) {
    $m = new $model();
    $c = new $controller($m, $action);
    $v = new $view($m);
    echo $v->output();
}
