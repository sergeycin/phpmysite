<?php

namespace application\controllers;

use application\core\Controller;

class BlogController extends Controller {

	function indexAction() {
      $result = $this->model->getPosts($_GET);
	  	$this->view->render('BlogView.php', $result);
  }
    
    function addAction() {
      $this->model->addComment($_GET);
      $json = [
          'id' => $_GET['id_post'], 
          'fullname' => $_GET['fullname'], 
          'comment' => $_GET['comment'], 
          'date' => $_GET['date']
      ];
      echo "addComment(".json_encode($json).");";
  }
}