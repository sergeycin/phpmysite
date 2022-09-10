<?php

namespace application\controllers;
use application\core\Controller;


class BlogController extends Controller {
  
	function indexAction() {
        $result = $this->model->blogModel->getPosts($_GET);
		$this->view->render('BlogView.php', $result);
    }
    
    function addAction() {
      $this->model->blogModel->addComment($_GET);
      $json = [
          'id' => $_GET['id_post'], 
          'fullname' => $_GET['fullname'], 
          'comment' => $_GET['comment'], 
          'date' => $_GET['date']
      ];
      echo "addComment(".json_encode($json).");";
  }
}