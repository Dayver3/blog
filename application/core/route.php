<?php

class Route
{
    static function start()
    {
        var_dump($_SERVER['REQUEST_URI']);
        $controller_name = 'MainPage';
        $action_name = 'index';
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        var_dump($routes);
        var_dump($_SERVER['REQUEST_URI']);
        if (!empty($routes[1])) {
            $controller_name = $routes[1];

        }
        if (!empty($routes[2])) {
            $action_name = $routes[2];


        }
        $model_name = 'Model_' . $controller_name;
        var_dump($model_name);
        $controller_name = 'Controller_' . $controller_name;
        $action_name = 'action_' . $action_name;
        var_dump($action_name);
        $controller_file = strtolower($model_name) . '.php';
        var_dump($controller_file);
        $controller_path = "application/models/" . $controller_file;
        var_dump($controller_path);
        var_dump(file_exists($controller_path));
        if (file_exists($controller_path)) {
            echo '1';
            include "application/models/" . $controller_file;
        } else {
            Route::errMsg();
        }
        var_dump($controller_name);
        $controller = new $controller_name;
        var_dump($controller);
        $action = $action_name;
        var_dump($action);
        if (method_exists($controller, $action)) {
            echo ' 2';
            $controller->$action();
        } else {
            Route::errMsg();
        }
    }

    static function errMsg()
    {
        echo 'something go wrong';
    }

}