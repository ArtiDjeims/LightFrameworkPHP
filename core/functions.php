<?php

class Model
{
    public function load($name) //loading a Model from a controller
    {
        $dir = $_SERVER['DOCUMENT_ROOT'];
        $modelPath = "{$dir}/model/{$name}Model.php";
        include($modelPath);
    }
}

$model = new Model;