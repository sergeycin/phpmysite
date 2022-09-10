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
    
    function editAction()
    {
        $this->checkIsAuth();

        $xml = simplexml_load_string(file_get_contents('php://input'));
        $json = json_encode($xml);
        $array = json_decode($json, TRUE);

        $this->model->validator->validate($array);
        $errors = $this->model->validator->getErrors();

        if (empty($errors)) {
            $this->model->editPost($array);
        }

        echo json_encode($errors);
    }
}
