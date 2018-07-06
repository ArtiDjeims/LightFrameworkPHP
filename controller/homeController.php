<?php
//Loading Model
$model->load("home");

//Working with Data
$data = $app->run();

//Loading a Template with a View
include("{$dir}/templates/main.php");