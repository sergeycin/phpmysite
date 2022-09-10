<?php


namespace application\controllers;

use application\core\Controller;
use application\models\GuestBookModel;

class UploadReviewsController extends AdminController
{
    function indexAction()
    {
        $this->checkIsAuth();
        $this->view->render('UploadReviewsView.php');
    }

    function createAction()
    {
        $this->checkIsAuth();
        $model = new GuestBookModel();

        
        if ($_FILES['file']['name'] != "") {
            foreach(file($_FILES['file']['tmp_name']) as $file) {
                $model->addReview($file);
            }
             $vars = ['result' => true];
            $this->view->render('UploadReviewsView.php', $vars);
        } else {
            $vars = ['empty' => true];
            $this->view->render('UploadReviewsView.php', $vars);
        }
    }
}
