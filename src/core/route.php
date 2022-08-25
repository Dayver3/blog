<?php

class route
{
    private $controller_name;
    private $action_name;

   function __construct()
    {
        $this->controller_name='MainPage';
        $this->action_name = 'index';
        $theme_id = '0';
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($routes[1])) {
            $this->controller_name = $routes[1];

        }
        if (!empty($routes[2])) {
            $this->action_name = $routes[2];


        }
        if (!empty($routes[3])) {

            $_GET['post_id'] = $routes[3];

        }
        if (stristr($this->action_name, '?')) {
            $action_arr = explode('?', $this->action_name);
            $this->action_name = $action_arr[0];
        }


    }

    public function getController()
    {
        return $this->controller_name;
    }

    public function getAction()
    {
        return $this->action_name;
    }


    static function errMsg()
    {

    }

}