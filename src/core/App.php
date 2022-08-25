<?php

final class App
{
    public static $instance;

    public static function init(){
        session_start();
        $app = App::getInstance();

        return new static();
    }

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public static function modelUse($route)
    {
        $controller_name = $route->getController();
        $model_name =  $controller_name.'Model';
        $controller_file = strtolower($model_name) . '.php';
        $controller_path = "application/models/" . $controller_file;
        if (file_exists($controller_path)) {
            include "application/models/" . $controller_file;
        }
    }

    public static function actionUse($route)
    {
        $controller_name = $route->getController();
        $action_name = $route->getAction();
        $controller_name =  $controller_name.'Controller';
        $action_name = 'action_' . $action_name;
        $controller = new $controller_name();
        $action = $action_name;
        if (method_exists($controller, $action)) {
            $controller->$action();
        }

    }
    public function run(){
        //$route = $_SERVER['REQUEST_URI'];
        $route = new route();
        app::getInstance();
        app::modelUse($route);
        app::actionUse($route);
    }
}