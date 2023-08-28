<?php

use App\Core\View;

function loadView($path, $data = [])
{
    if (!empty(View::$dataShare)) {
        $data = array_merge($data, View::$dataShare);
    }
    extract($data);
    $fileView =  _DIR_ROOT . '/app/views/' . $path . '.php';
    if (file_exists($fileView)) {
        require_once $fileView;
    }
}

function assets($path = '')
{
    return _ASSETS . '/' . $path;
}


function route($route = '')
{
    return _WEB_ROOT . '/' . $route;
}
