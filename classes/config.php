<?php

function __autoload($klasa) {
    require_once $klasa . ".php";
}

Database::connect();

$nav = new Navigation();

$log_in = new Login();

$reg = new Register_form();

$categorie = new Categorie();

$all_blog = new All_blog_render();

$add = new Add_comments();

$add_message = new Message();

$add_post = new Admin_add_post();

$edit_post = new Admin_edit_post();

$del_post = new Admin_delete_post();

$publis_add_post = new Add_post();