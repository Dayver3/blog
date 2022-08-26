<?php

class MainPageController extends Controller
{
    function action_index()
    {
        postModel::getData();
        $this->view->generate('mainpage.php', '/template_view.php');

    }

    function action_mainPage()
    {
        if (isset($_SESSION['nickname'])) {
            postModel::getData();
            $this->view->generate('mainpage.php', '/template_view.php');
        } else {
            $errMsg = "Пожалуйста залогинтесь";
            $this->view->generate('loginpage.php', '/template_view.php', $errMsg);
        }
    }
}