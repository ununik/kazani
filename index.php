<?php

function __autoload($name)
{
    include_once("models/Classes/$name.class.php");
}

$html = new HTML();

include 'controllers/login.php';

print(include 'views/page.php');