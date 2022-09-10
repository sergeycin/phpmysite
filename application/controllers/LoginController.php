<?php

namespace application\controllers;

use application\core\Controller;

class LoginController extends Controller
{
    function signinAction()
    {
        $this->view->render('SignInView.php');
    }

    function signupAction()
    {
        $this->view->render('SignUpView.php');
    }

    function loginAction()
    {
        if (!empty($_POST)) {
            $this->model->validator->validate($_POST);
            $errors = $this->model->validator->getErrors();

            if (empty($errors)) {
                $findUser = $this->model->findUser($_POST);
                if ($findUser) {
                    $_SESSION['isUser'] = 1;
                    $_SESSION['userFullname'] = $findUser->fullname;
                    header('Location:/');
                    exit;
                } else {
                    $login = false;
                    $_POST['password'] = null;
                }
            }

            $vars = ['errors' => $errors, 'login' => $login];

            $this->view->render('SignInView.php', $vars);
        } else {
            $this->view->render('SignInView.php');
        }
    }

    function createAction()
    {
        if (!empty($_POST)) {
            $this->model->validator->validate($_POST);
            $errors = $this->model->validator->getErrors();

            if (empty($errors)) {
                $errors = $this->model->createUser($_POST);
                if (count($errors) == 0) {
                    $_POST = array();
                    header('Location:/login/signin');
                    exit;
                }
            }

            $vars = ['errors' => $errors];

            $this->view->render('SignUpView.php', $vars);
        } else {
            $this->view->render('SignUpView.php');
        }
    }

    function logoutAction()
    {
        unset($_SESSION['isUser']);
        header('Location:/login/signin');
        exit;
    }

    function checkLoginAction()
    {
        $findUserByLogin = $this->model->findByField($_POST['login'], 'login');
        $findUserByEmail = $this->model->findByField($_POST['email'], 'email');

        $result = [];

        if ($findUserByEmail != null) {
            array_push($result, "Данный email уже существует");
        }

        if ($findUserByLogin != null) {
            array_push($result, "Данный логин уже существует");
        }

        echo json_encode($result);
    }
}
