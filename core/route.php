<?php
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

$dir = $_SERVER['DOCUMENT_ROOT'];
$route = $request_uri[0];

if ($route == "/") {
    $model_path = "{$dir}/controller/homeController.php";
    $route = "/home";
} else {
    $model_path = "{$dir}/controller{$route}Controller.php";
}
if (file_exists($model_path)) {
    include $model_path; //Loading Controller
} else {
    include "{$dir}/view/404.php";;
}