<?php

namespace application\models;

use application\core\Model;
use application\core\validators\ResultsVerification;

class MainModel extends Model {
    public $photoModel;
    public $interests;
    public $resultVerification;

    public function __construct() {
        parent::__construct();        
        $this->photoModel = new PhotoModel();
        $this->interests = new InterestsModel();
        $this->resultVerification = new ResultsVerification();
    }
    
}
