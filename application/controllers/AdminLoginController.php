<?php

namespace application\controllers;
use application\core\Controller;

class AdminLoginController extends Controller
{
    

    function indexAction()
    {
        $this->view->render('AdminAuthView.php');
    }

    function loginAction()
    {
        if (!empty($_POST)) {
           $this->model->validator->validate($_POST);
            $errors = $this->model->validator->getErrors();

            if (empty($errors)) {
                if ($this->compareLoginData($_POST)) {
                    header('Location:/editBlog/index');
                    exit;
                } else {
                    $login = false; 
                    $_POST['password'] = null;
                }
            }

            $vars = ['errors' => $errors, 'login' => $login];

            $this->view->render('AdminAuthView.php', $vars);
        } else {
            $this->view->render('AdminAuthView.php');
        }
    }

    function logoutAction()
    {
        unset($_SESSION['isAdmin']);
        header('Location:/admin');
        exit;
    }

    function compareLoginData($post_array)
    {
        if (($post_array['login'] === 'admin') && (($post_array['password']) === 'admin')) {
            $_SESSION['isAdmin'] = 1;
            return true;
        }
        return false;
    }
}
