<?php
/* Authenticate user */
include("../db/dbconnect.php");

/* Redirect if post_id is not set */
if (!isset($_REQUEST['post_id'])) {
    header("location:view_post.php?id=" . $id);
} else {
    $post_id = $_REQUEST['post_id'];
}
/* delete from table posts */
$query = "DELETE FROM posts WHERE post_id='$post_id'";

$result = mysqli_query($conn, $query);

/* delete from post user_table */
$query = "DELETE FROM user_post WHERE post_id='$post_id'	";

$result = mysqli_query($conn, $query);

/* delete from comment user_table */
$query = "DELETE FROM comments WHERE post_id='$post_id'";

$result = mysqli_query($conn, $query);

if ($result == TRUE) {
    header("location:posts.php");
} else {
    echo "Problem in deleting the Post";
}

?>
