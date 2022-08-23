<?php

class controller_MainPageUser extends Controller
{
    function action_index()
    {

        $this->view->generate('mainpageUser.php', '/template_view.php');

    }

    function action_mainPageUser()
    {
        $userId = model_post::getUserId();
        $dt = time();
        $postData = $_POST["postData"];
        $title = $_POST["theme"];
        model_post::setPost($userId, $dt, $postData,$title);
        $data =[];
        $this->view->generate('mainpageUser.php', '/template_view.php');
    }
}
