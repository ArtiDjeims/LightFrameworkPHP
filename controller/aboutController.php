<?php
//Loading Model
$model->load("about");

//Working with Data
$data = $app->run();

//Loading a Template with a View
include("{$dir}/templates/main.php");