<?php

class Route
{
    static function start()
    {
        $controller_name = 'MainPage';
        $action_name = 'index';
        $theme_id = '0';
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($routes[1])) {
            $controller_name = $routes[1];

        }
        if (!empty($routes[2])) {
            $action_name = $routes[2];


        }
        if (!empty($routes[3])) {

            $_GET['post_id'] = $routes[3];

        }
        if (stristr($action_name, '?')) {
            $action_arr = explode('?', $action_name);
            $action_name = $action_arr[0];
        }

        $model_name = 'Model_' . $controller_name;
        $controller_name = 'Controller_' . $controller_name;
        $action_name = 'action_' . $action_name;
        $controller_file = strtolower($model_name) . '.php';
        $controller_path = "application/models/" . $controller_file;
        if (file_exists($controller_path)) {
            include "application/models/" . $controller_file;
        } else {
            Route::errMsg();
        }
        $controller = new $controller_name;
        $action = $action_name;
        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            Route::errMsg();
        }
    }

    static function errMsg()
    {

    }

}