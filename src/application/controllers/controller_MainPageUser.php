<?php

/**
 *
 */
class controller_MainPageUser extends Controller
{
    /**
     * @return void
     */
    function action_index()
    {
        if (isset($_SESSION['nickname'])) {
            $this->view->generate('mainpageUser.php', '/template_view.php');
        } else {
            $errMsg = "Пожалуйста залогинтесь";
            $this->view->generate('login.php', '/template_view.php', $errMsg);
        }
    }

    /**
     * @return void
     */
    function action_mainPageUser()
    {
        if (isset($_SESSION['nickname'])) {
            if (isset($_SESSION['nickname'])) {
                $userId = model_post::getUserId();
                $dt = time();
                $postData = $_POST["postData"];
                $title = $_POST["theme"];
                model_post::setPost($userId, $dt, $postData, $title);
                $data = [];
                $this->view->generate('mainpageUser.php', '/template_view.php');
            } else {

                $errMsg = "Пожалуйста залогинтесь";
                $this->view->generate('login.php', '/template_view.php', $errMsg);
            }
        } else {
            $errMsg = "Пожалуйста залогинтесь";
            $this->view->generate('login.php', '/template_view.php', $errMsg);
        }
    }
}
