<?php

class Home
{
    public function run() //example function
    {
        return 'Home Page is loaded.';
    }
}

global $app;
$app = new Home;