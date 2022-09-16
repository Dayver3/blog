<?php

class controller_MainPage extends Controller
{
    function action_index()
    {
        model_post::getData();
        $this->view->generate('mainpage.php', '/template_view.php');

    }

    function action_mainPage()
    {
        if (isset($_SESSION['nickname'])) {
            model_post::getData();
            $this->view->generate('mainpage.php', '/template_view.php');
        } else {
            $errMsg="plz login";
            $this->view->generate('loginpage.php', '/template_view.php',$errMsg);
        }
    }
}