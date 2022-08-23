<?php

class controller_MainPage extends Controller
{
    function action_index()
    {

        $this->view->generate('mainpage.php', '/template_view.php');

    }
}