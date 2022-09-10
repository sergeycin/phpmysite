<?php

namespace application\controllers;
use application\core\Controller;

class GuestBookController extends Controller {

	function indexAction() {	
    $reviews = $this->model->guestBookModel->parseReviews();	
    $vars = [ 'reviews' => $reviews ];	
		$this->view->render('GuestBookView.php', $vars);
  }
    
    function createAction() {
		if (!empty($_POST)) {
			$this->model->validator->validate($_POST);
            $errors = $this->model->validator->getErrors();

            if (empty($errors)) {
                $newReview = [];
                array_push($newReview, $_POST['fullName'], $_POST['Email'], date('Y-m-d H:i:s'), $_POST['review']);
                $this->model->guestBookModel->addReview($newReview);
                $_POST = array();
            }

            $reviews = $this->model->guestBookModel->parseReviews();
            $vars = [ 'errors' => $errors, 'reviews' => $reviews ];

			$this->view->render('GuestBookView.php', $vars);
		} else {
            $this->view->render('GuestBookView.php');
        }
	}
}