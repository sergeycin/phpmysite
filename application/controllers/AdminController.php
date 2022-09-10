<?php 

namespace application\controllers;
use application\core\Controller;

class AdminController extends Controller {
    function checkIsAuth() {
        if (!isset($_SESSION['isAdmin'])) {
            header('Location:/admin/auth');
            exit;
        }
    }
}