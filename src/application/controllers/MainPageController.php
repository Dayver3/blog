<?php

class MainPageController extends Controller
{
    function indexAction()
    {
        postModel::getData();
        $this->view->generate('mainpage.php', '/template_view.php');

    }

    function mainPageAction()
    {
        if (isset($_SESSION['nickname'])) {
            postModel::getData();
            $this->view->generate('mainpage.php', '/template_view.php');
        } 
        else {
            $errMsg = "Пожалуйста залогинтесь";
            $this->view->generate('loginpage.php', '/template_view.php', $errMsg);
        }
    }
}
