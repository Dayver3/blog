<?php

class controller_Comment extends Controller
{
    function action_index()
    {

        $this->view->generate('comment.php', '/template_view.php');
    }

    function action_comment()
    {
        model_comment::setComment();
        echo "Спасибо за коментарий";
        $this->view->generate('mainpageUser.php', '/template_view.php');
    }

    function action_change()
    {
        $this->view->generate('refactor_comment.php', '/template_view.php');
    }

    function action_changeCom()
    {
        model_comment::reSetCom();
        $this->view->generate('homepage.php', '/template_view.php');
    }
    function action_delete()
    {
        model_comment::deleteCom();
        $this->view->generate('homepage.php', '/template_view.php');
    }
}