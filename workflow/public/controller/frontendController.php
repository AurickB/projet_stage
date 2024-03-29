<?php 

require_once 'model/frontendModel.php';

function displayHome(){
    require 'view/home.php';
}

function displayContact(){
    require 'view/contact.php';
}

function displayNew(){
    require 'view/news.php';
}

function displayPost(){
    $posts = getPost();
    require 'view/post.php';
}

function displayPage(){
    $page = $_GET['page'] ?? '404';
    switch ($page) {
        case 'contact':
            displayContact();
            break;
        case 'actualite':
            displayNew();
            break;  
        default:
            displayHome();
            break;
    }
}
?>