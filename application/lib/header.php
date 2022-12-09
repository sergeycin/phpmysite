<?php
    $arr = '';
       if (isset($_SESSION['isUser'])) {
        $arr = '
        <div class="title-block">
        <h1 class = "title" > Reality Developer: ' . $_SESSION['userFullname']. '</h1>
        </div>
        ';
       } else {
           $arr = '
           <div class="title-block">
           <h1 class = "title" > Reality Developer: (not authorized) </h1>
           </div>
           ';
      
       }

       return $arr;

    ?>