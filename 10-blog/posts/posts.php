<?php
include("../include/url_posts.php");
include_once("../include/total_views.php");

?>

<?php

/* CHECK if same user or email exists or not ? */
$query = "SELECT * FROM posts ORDER BY post_time DESC";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($post = mysqli_fetch_assoc($result)) {
        $id = $post['post_id'];
        $title = $post['post_title'];
        $desc = $post['post_desc'];
        $tags = $post['post_tag'];
        $author = $post['post_author'];
        $time = $post['post_time'];
        $short_post = 1;  /* short post with read more  */
        $views = showViews($id, $author);

        include("../include/frame_post.php");
    }
}

?>
