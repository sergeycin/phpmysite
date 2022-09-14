<?php
    $arr = '';
       if (isset($_SESSION['isUser'])) {
        $arr = '
        <div class="title-block">
        <a href="/">    <h1 class = "title" > About Reality developer: ' . $_SESSION['userFullname']. '</h1></a>
        </div>
        ';
       } else {
           $arr = '
           <div class="title-block">
           <a href="/">  <h1 class = "title" > About Reality developer: (not authorized) </h1></a>
           </div>
           ';
      
       }

       return $arr;

    ?>