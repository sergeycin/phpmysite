<?php

namespace application\models;

use application\core\Model;

class MainModel extends Model {
    public $photoModel;
    public $interests;

    public $validator;
    public $resultVerification;

    public function __construct() {
        $this->photoModel = new PhotoModel();
        $this->interests = new InterestsModel();
        $this->validator = new FormValidation();
        $this->resultVerification = new ResultsVerification();
    }
}
