<?php

namespace application\models;
use application\core\Model;

class BlogModel extends Model {
    public function BlogModel() {
        static::$tablename = 'blog';
        static::$dbfields = array('title', 'image', 'text', 'date');
        $this->saveUserInfo("Блох");
    }

    public function getPosts($get_array) {
        $countOfPosts = $this->getCount();
        $rowsPerPage = 3;
        $totalPages = ceil($countOfPosts / $rowsPerPage);

        if (isset($get_array['page']) && is_numeric($get_array['page'])) {
            $currentPage = (int) $get_array['page'];
        } else {
            $currentPage = 1;
        }

        if ((int) $currentPage > (int) $totalPages) {
            $currentPage = $totalPages;
        }

        if ((int) $currentPage < 1) {
            $currentPage = 1;
        }

        $offset = ($currentPage - 1) * $rowsPerPage;

        $posts = $this->findByPage($offset, $rowsPerPage);
        
        $comments = [];
        foreach ($posts as $post) {
            $sql = "SELECT * FROM `comments` WHERE `id_post`=".$post['id']." ORDER BY `date` DESC";
            array_push($comments, $this->executeSQL($sql));
		}

        $result = [
           "posts" => $posts,
           "comments" => $comments,
           "current_page" => $currentPage, 
           "total_pages" => $totalPages 
        ];

        return $result;
    }

    public function addComment($request_array) {
        $sql = "
            INSERT INTO `comments` (`id_post`, `fullname`, `comment`, `date`) 
            VALUES ('".$request_array["is_post"]."', '".$request_array["fullname"]."', '".$request_array["comment"]."', '".$request_array["date"]."')
        ";
        $this->executeSQL($sql);
    }
}