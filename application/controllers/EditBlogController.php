<?php

namespace application\controllers;

use application\core\Controller;

class EditBlogController extends AdminController
{

    function indexAction()
    {
        $this->checkIsAuth();
        $result = $this->model->getPosts($_GET);
        $vars = [
            'posts' => $result['posts'],
            'comments' => $result['comments'],
            'current_page' => $result['current_page'],
            'total_pages' => $result['total_pages']
        ];
        $this->view->render('AdminEditBlogView.php', $vars);
    }

    function addAction()
    {
        $this->checkIsAuth();
        if (!empty($_POST)) {
            $this->model->validator->validate($_POST);
            $errors = $this->model->validator->getErrors();

            if (empty($errors)) {
                $this->model->addPost($_POST, $_FILES);
                $_POST = array();
            }

            $result = $this->model->getPosts($_GET);
            $vars = [
                'posts' => $result['posts'],
                'comments' => $result['comments'],
                'errors' => $errors,
                'current_page' => $result['current_page'],
                'total_pages' => $result['total_pages']
            ];

            $this->view->render('AdminEditBlogView.php', $vars);
        } else {
            $this->view->render('AdminEditBlogView.php');
        }
    }
}
