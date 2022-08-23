<?php

class controller_Homepage extends Controller
{
    function action_index()
    {

        var_dump($_COOKIE);
        echo $_SESSION['nickname'];
        $this->view->generate('homepage.php', '/template_view.php');
    }
}