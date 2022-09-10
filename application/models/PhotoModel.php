<?php

namespace application\models;
use application\core\Model;

class PhotoModel extends Model {
    protected $photos = [];

    public function __construct() {
        for ($i = 1; $i <= 10; $i++) {
            $this->photos["Img_".$i] = "http://dummyimage.com/200";
        }
    }

    public function savePhotos($newPhotos) {
        $this->photos = $newPhotos;
    }

    public function getPhotos() {
        return $this->photos;
    }
   
}

?>