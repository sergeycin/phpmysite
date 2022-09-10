<?php

namespace application\models;

class ResultsVerification extends CustomFormValidation {
    private $result = 0;
    private $answers = [];

    public function __construct() {
        //parent::__construct();
        $this->setAnswer('task1', 'some');
        $this->setAnswer('task2', 'answer 1');
        $this->setAnswer('task3', 'answer 2');
    }

    public function checkAns($post_array) {
        //debug($this->answers);
        foreach ($this->answers as $key => $value) {
            if ($post_array[$key] == $value) {
                $this->result++;
            } 
        }
    }

    public function getResult() {
        return $this->result;
    }

    public function setAnswer($field_name, $ans) {
        $this->answers[$field_name] = $ans;
	}
}