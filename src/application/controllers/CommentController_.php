<?php

class CommentController extends Controller
{
    function action_index()
    {

        $this->view->generate('comment.php', '/template_view.php');
    }

    function action_comment()
    {
        commentModel::setComment();
        echo "Спасибо за коментарий";
        $this->view->generate('mainpageUser.php', '/template_view.php');
    }

    function action_change()
    {
        $this->view->generate('refactor_comment.php', '/template_view.php');
    }

    function action_changeCom()
    {
        commentModel::reSetCom();
        $this->view->generate('homepage.php', '/template_view.php');
    }
    function action_delete()
    {
        commentModel::deleteCom();
        $this->view->generate('homepage.php', '/template_view.php');
    }
}