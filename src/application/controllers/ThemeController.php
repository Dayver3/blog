<?php

class ThemeController extends Controller
{
    function indexAction()
    {
        if (isset($_SESSION['nickname'])) {
            $post_id = $_GET['id'];
            commentModel::$datum = commentModel::getCommentPost();
            $this->view->generate('theme.php', '/template_view.php');
        } else {
            $errMsg = "Пожалуйста залогинтесь";
            $this->view->generate('login.php', '/template_view.php', $errMsg);
        }
    }

    function themeAction()
    {
        if (isset($_SESSION['nickname'])) {
            $post_id = $_GET['id'];
            commentModel::$datum = commentModel::getCommentPost();
            $this->view->generate('theme.php', '/template_view.php');
        }
            else
            {
            $errMsg = "Пожалуйста залогинтесь";
            $this->view->generate('login.php', '/template_view.php', $errMsg);
            }
    }
    function changeAction()
    {

        $this->view->generate('refactor_post.php', '/template_view.php');
    }
    function changePostAction()
    {
        postModel::reSetPost();
        $this->view->generate('homepage.php', '/template_view.php');
    }

}
