<?php

namespace application\controllers;

use application\core\Controller;

class ContactsController extends Controller {
    public function indexAction() {
        $this->view->render('Contacts');
    }
    
    function checkAction() {
		if (!empty($_POST)) {
			$this->model->validator->validate($_POST);
            $errors = $this->model->validator->getErrors();
            $vars = [ 'errors' => $errors ];
			if (empty($errors)) $_POST = array();
			$this->view->render('Contacts', $vars);
		} else {
            $this->view->render('Contacts');
        }
	}
}