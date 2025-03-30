<?php

$request = $_SERVER["REQUEST_URI"];

switch ($request)
{
    case "/":
        require "home.php";
        break;
    case "":
        require "home.php";
        break;
    case "/project":
        require "project.php";
        break;
}