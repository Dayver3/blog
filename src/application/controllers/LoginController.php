<?php

class LoginController extends Controller
{
    function indexAction()
    {


        $this->view->generate('login.php', '/template_view.php');

    }

    function logAction()
    {
        $login = $_POST["login"];
        $password = $_POST["password"];

        if ($login ===null || $password ===null) {
            if (userModel::getData($login, $password)) {
                $nickname = userModel::getNickname($login, $password);
                session_unset();
                $_SESSION['nickname'] = $nickname;
                $this->view->generate('homepage.php', '/template_view.php');
            } else {

                $this->view->generate('login.php', '/template_view.php');
                echo '<br/>Неправильный логин или пароль.<br/>';
            }

        } else {
            $this->view->generate('login.php', '/template_view.php');
            echo '<br/>Заполните поля<br/>';
        }

    }
}