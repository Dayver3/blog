<?php

class controller_Homepage extends Controller
{
    function action_index()
    {
        if (isset($_SESSION['nickname'])) {
            $this->view->generate('homepage.php', '/template_view.php');
        }
        else {
            $errMsg = "plz login";
            $this->view->generate('login.php', '/template_view.php', $errMsg);
        }
    }
}