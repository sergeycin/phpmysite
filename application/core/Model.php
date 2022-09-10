<?php 

namespace application\core;
use application\core\validators\FormValidation;


class Model extends BaseActiveRecord {
    public $validator;

    public function __construct() {
        $this->validator = new FormValidation();
    }

    public function validate($post_data) {
        $this->validator->validate($post_data);
    }
    
    public function saveUserInfo($page) {
		static::setupConnection();

		$tablename = 'statistics';
		$sql = "
            INSERT INTO $tablename (`page`, `ip`, `host`, `browser`, `date`) 
            VALUES (
                '" . $page . "', 
                '" . $_SERVER['REMOTE_ADDR'] . "', 
                '" . gethostbyaddr($_SERVER['REMOTE_ADDR']) . "', 
                '" . $_SERVER['HTTP_USER_AGENT'] . "',
                '" . date('Y-m-d H:i:s') . "'
            )
        ";
		$stmt = static::$pdo->query($sql);
	}
}