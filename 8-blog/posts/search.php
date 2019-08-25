<?php

/* search.php?q='dp' */

include("../include/url_posts.php");

if (isset($_POST['submit'])) {
    $q = $_POST['q'];
} else {
    printf("No search Result found");
    $q = '';
}

$query = "SELECT * FROM posts WHERE post_title like '%$q%' 
                    OR post_tag like '$q' 
					OR post_desc like '$q' 
					OR post_author like '$q' ";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result)) {
    while ($post = mysqli_fetch_assoc($result)) {
        $id = $post['post_id'];
        $title = $post['post_title'];
        $desc = $post['post_desc'];
        $tags = $post['post_tag'];
        $author = $post['post_author'];
        $time = $post['post_time'];
        $short_post = 1;  /* short post with read more  */

        include("../include/frame_post.php");
    }
}

?>
