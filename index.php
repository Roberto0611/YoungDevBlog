<?php require('config/init.php') ?>
<?php 
// get the variables in the url
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$allBlogs = getAllPosts();
?>

<!-- header -->
<?php require('templates/header.php') ?>

<!-- body -->
    <?php
        // show the body based on the page var
        if ($page == 'home') {
            require 'templates/home.php';
        }elseif ($page == 'blog') {
            require 'templates/blog.php';
        }
    ?>


<!-- footer -->
<?php require('templates/footer.php') ?>