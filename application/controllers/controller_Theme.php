<?php

class controller_Theme extends Controller
{
    function action_index()
    {
        if (isset($_SESSION['nickname'])) {
            $post_id = $_GET['id'];
            model_comment::$datum = model_comment::getCommentPost();
            $this->view->generate('theme.php', '/template_view.php');
        } else {
            $errMsg = "Пожалуйста залогинтесь";
            $this->view->generate('login.php', '/template_view.php', $errMsg);
        }
    }

    function action_theme()
    {
        if (isset($_SESSION['nickname'])) {
            $post_id = $_GET['id'];
            model_comment::$datum = model_comment::getCommentPost();
            $this->view->generate('theme.php', '/template_view.php');
        }else{
            $errMsg = "Пожалуйста залогинтесь";
            $this->view->generate('login.php', '/template_view.php', $errMsg);
        }
    }

}