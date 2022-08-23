<?php

class controller_MainPageUser extends Controller
{
    function action_index()
    {

        $this->view->generate('mainpageUser.php', '/template_view.php');
    }
}
