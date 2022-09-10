<?php

namespace application\controllers;

use application\core\Controller;

class TestController extends Controller {
    public function indexAction() {
        $this->view->render('Test');
    }
    
    
    function checkAction() {
		if (!empty($_POST)) {
		    //   $this->model->validator->validate($_POST);
            // $errors = $this->model->validator->getErrors();
            //var_dump($errors);
			if (empty($errors)) {
                $this->model->resultVerification->checkAns($_POST);
                //debug($_POST);
                //$this->model->createTest($_POST);
                $_POST = array();
                $result = $this->model->resultVerification->getResult();
                $vars = [ 'result' => $result ];
			}
			else {
                $vars = [ 'errors' => $errors ];
            }
			$this->view->render('Test', $vars);
		} 
    else {
            $this->view->render('Test');
        }
	}
}
