<?php

class controller_Login extends Controller
{
    function action_index()
    {


        $this->view->generate('login.php', '/template_view.php');

    }

    function action_log()
    {
        global $db;
        $login = $_POST["login"];
        $password = $_POST["password"];

        if ($login != '' && $password != '') {
            if (model_user::getData($login, $password)) {
                $nickname = model_user::getNickname($login, $password);
                session_unset();
                $_SESSION['nickname'] = $nickname;
                $this->view->generate('mainpage.php', '/template_view.php');
                echo $_SESSION['nickname'];
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