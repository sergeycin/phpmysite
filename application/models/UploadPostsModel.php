<?php

namespace application\models;
use application\core\Model;

class UploadPostsModel extends Model {
    public function AdminUploadPostsModel() {
        $this->saveUserInfo("Upload");
        static::$tablename = 'blog';
        static::$dbfields = array('title', 'text', 'date');
    }

    public function savePosts($files_array) {
        $lines = file($files_array["file"]["tmp_name"]);
        $posts = [];
        foreach ($lines as $str) {
            array_push($posts, preg_split('/;/', $str));
        }

        try {
            foreach ($posts as $post) {
                $this->save($post);
            }
        } catch (\Throwable $th) {
            return false;
        }

        return true;
    }
}