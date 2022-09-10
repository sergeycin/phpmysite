<?php


namespace application\controllers;
use application\core\Controller;

class UploadReviewsController extends Controller {
	function indexAction() {	
		$this->view->render('UploadReviewsView.php');
    }
    
    function createAction() {
        if ($_FILES['file']['name'] != "") {
            if (copy ($_FILES['file']['tmp_name'], 'reviews.inc')) {
                $vars = [ 'result' => true ];
            } else {
                $vars = [ 'error' => true ];
            }
            $this->view->render('UploadReviewsView.php', $vars);
        } else {
            $vars = [ 'empty' => true ];
            $this->view->render('UploadReviewsView.php', $vars);
        }
	}
}