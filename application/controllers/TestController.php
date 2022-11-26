<?php

namespace application\controllers;

use application\core\Controller;

class TestController extends Controller {
    public function indexAction() {
        $this->view->render('Test');
    }
    
    
    function checkAction() {
		if (!empty($_POST)) {  
            $answers = [];
            $result = 0;
            $answers['task1'] = 'some';
            $answers['task2'] = 'answer 1';
            $answers['task3'] = 'answer 2';
            if (empty($errors)) {
         foreach ($answers as $key => $value) {
            if ($_POST[$key] == $value) {
                $result++;
            } 
        }
            }

			// if (empty($errors)) {
            //     var_dump($_POST);
            //     $this->model->resultVerification->checkAns($_POST);
             
            //     $_POST = array();
            //     $result = $this->model->resultVerification->getResult();
            //     $vars = [ 'result' => $result ];
			// }
			// else {
            //     $vars = [ 'errors' => $errors ];
            // }
            $vars = [ 'result' => $result ];
			$this->view->render('Test', $vars);
            
            $this->model->createTest($_POST,$result);
		} 
    else {
            $this->view->render('Test');
        }
	}

}
