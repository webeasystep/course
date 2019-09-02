<?php

/*
Stores URLs that will need to include in users folder's files
*/

session_start();
$index_url='../index.php';
$posts_url='../posts/posts.php';
$top_posts_url='../posts/top_posts.php';
$post_url='../posts/view_post.php';
$newpost_url='../posts/create_post.php';
$login_url='login.php';
$register_url='register.php';
$logout_url='logout.php';
$profile_url='../users/profile.php';
$search_url='../posts/search.php';
$contact_us_url='../users/contact_us.php';

include("../db/dbconnect.php");
include("../include/navbar.php");
include("../include/bootstrap_cdn.php");

?>
