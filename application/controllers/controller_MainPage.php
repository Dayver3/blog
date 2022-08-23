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
        model_post::getData();
        $this->view->generate('mainpage.php', '/template_view.php');
    }
}