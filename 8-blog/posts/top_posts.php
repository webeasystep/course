<?php

/* SHOWS MOST VIEWED POSTS */

include("../include/url_posts.php");
include("../db/dbconnect.php");
include_once("../include/total_views.php");


$query = "SELECT * FROM user_post , posts 
      WHERE user_post.post_id=posts.post_id  
      ORDER BY post_views DESC ";

$result = mysqli_query($conn, $query);

if ($result == false) {
    echo "problem fetching posts";
} else {
    if (mysqli_num_rows($result)) {
        while ($post = mysqli_fetch_assoc($result)) {
            /* set variables */
            $id = $post['post_id'];
            $title = $post['post_title'];
            $desc = $post['post_desc'];
            $tags = $post['post_tag'];
            $author = $post['post_author'];
            $time = $post['post_time'];
            $views = showViews($id, $author);
            $short_post = 1;  /* short post with read more  */
            include('../include/frame_post.php');

        }
    }
}

?>
