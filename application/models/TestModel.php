<?php

namespace application\models;
use application\core\Model;
use application\core\validators\ResultsVerification;

class TestModel extends Model {
    public $validator;

    public function TestModel() {
        $this->saveUserInfo("Test");
        $this->validator = new ResultsVerification();
        static::$tablename = 'test';
        static::$dbfields = array('fullname', 'question_1', 'question_2', 'question_3', 'count', 'date');
    }

    public function createTest($post_array,$result) {
        var_dump($post_array);
        // $checkboxes = array_filter([
        //     $post_array["checkbox1"],
        //     $post_array["checkbox2"],
        //     $post_array["checkbox3"]
        // ]);
        // $checkboxesWithComma = implode(', ', $checkboxes);

        // $result = $this->validator->getResult();

        $data = [
			"fullname" => $post_array["fullName"],
			"question_1" => $post_array["task1"],
			"question_2" => $post_array["task2"],
			"question_3" => $post_array["task3"],
            "count" => $result,
            "date" => date('d.m.Y'),
        ];
        array_push($data);
    }
}