<?php
namespace application\controllers;
use application\core\Controller;

class AdminStatisticsController extends AdminController {

	function indexAction() {
        $this->checkIsAuth();
        $result = $this->model->getStatistics($_GET);
		$this->view->render('AdminStatisticsView.php', $result);
    }
}