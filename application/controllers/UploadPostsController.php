<?php

namespace application\controllers;
use application\core\Controller;

class UploadPostsController extends Controller {
	function indexAction() {	
		$this->view->render('UploadPostsView.php');
    }
    
    function createAction() {
        if ($_FILES['file']['name'] != "") {
            var_dump($_FILES['file']['name']);
            if ($this->mode->savePosts($_FILES)) {
                $vars = [ 'result' => true ];
            } else {
                $vars = [ 'error' => true ];
            }
            $this->view->render('UploadPostsView.php', $vars);
        } else {
            $vars = [ 'empty' => true ];
            $this->view->render('UploadPostsView.php',  $vars);
        }
	}
}