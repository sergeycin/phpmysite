<?php
namespace application\models;
use application\core\Model;

class GuestBookModel extends Model {

    function __construct()
    {
        $this->saveUserInfo("GuestBook");
    }
    

    public function parseReviews() {
        $filename = "reviews.inc";
        $reviews = [];
        if (file_exists($filename)) {
            $arrStr = file($filename);
            foreach (array_reverse($arrStr) as $str) {
                array_push($reviews, preg_split('/;/', $str));
            };
        }
        return $reviews;
    }

    public function addReview($data) {
        $str = '';
        $file = fopen('reviews.inc', 'a');

        foreach($data as $item) {
            $str .= $item . ';';
        }

        fwrite($file, "$str\n");
        fclose($file);
    }
}