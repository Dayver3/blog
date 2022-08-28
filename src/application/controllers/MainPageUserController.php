<?php

/**
 *
 */
class MainPageUserController extends Controller
{
    /**
     * @return void
     */
    function indexAction()
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
    function mainPageUserAction()
    {
        if (isset($_SESSION['nickname'])) {
            if (isset($_SESSION['nickname'])) {
                $userId = postModel::getUserId();
                $dt = time();
                $postData = $_POST["postData"];
                $title = $_POST["theme"];
                postModel::setPost($userId, $dt, $postData, $title);
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
