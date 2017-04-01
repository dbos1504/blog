<?php
     if (isset($_GET['page'])) {
        $strane = array('blog', 'gallery', 'contact');
        $page = $_GET['page'];
        $file = $page . ".php";
        if(in_array($_GET['page'],$strane)) {
            require_once $file;
        } else
            echo "No page";
     }
     else if (isset($_GET['categorie'])) {
         require_once "categorie_page.php";
     }
     else if (isset($_GET['id'])){
         require_once "blog_page.php";
     }
     else if (isset($_GET['bl_search'])) {
         require_once "search_page.php";
     }
     else
         require "allblog.php";
