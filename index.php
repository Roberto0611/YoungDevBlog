<?php require('config/init.php') ?>
<?php 
// get the variables in the url
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$allBlogs = getAllPosts();
$RecentPosts = getRecentPosts();

$blogID = isset($_GET['id']) ? $_GET['id'] : "1";
$selectedPost = getPostByID($blogID);
?>

<!-- header -->
<?php require('templates/header.php') ?>

<!-- body -->
<?php
    // show the body based on the page var using a switch statement
    switch ($page) {
        case 'home':
            require 'templates/home.php';
            break;

        case 'blog':
            require 'templates/blog.php';
            break;

        case 'readBlog':
            require 'templates/readBlog.php';
            break;
    }
?>

<!-- footer -->
<?php require('templates/footer.php') ?>