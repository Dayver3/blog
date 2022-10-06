<?php

class HomepageController extends Controller
{
    function indexAction()
    {
        if (isset($_SESSION['nickname'])) {
            $this->view->generate('homepage.php', '/template_view.php');
        }
        else 
        {
            $errMsg = "Пожалуйста залогинтесь";
            $this->view->generate('login.php', '/template_view.php', $errMsg);
        }
    }
}
