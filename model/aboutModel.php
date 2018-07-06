<?php

class About
{
    public function run()
    {
        $array = [
            "img" => "../assets/img/test.jpeg",
            "width" => "400",
        ];
        return $array;
    }
}

global $app;
$app = new About;