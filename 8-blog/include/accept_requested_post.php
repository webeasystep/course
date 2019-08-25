<?php
/* Authenticate user */
include("../db/dbconnect.php");

/* Redirect if post_id is not set */
if(!isset($_REQUEST['id'])) {
	 header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
	$post_id=$_REQUEST['id'];
}

/* delete from table posts */
$query="SELECT * FROM posts_buffer WHERE post_id='$post_id' ";
$result=mysqli_query($conn , $query);

if(mysqli_num_rows($result) == 1) {
   while($row=mysqli_fetch_assoc($result)) {

        $postTitle=$row['postTitle'];
        $post_desc=$row['post_desc'];
        $post_tag=$row['post_tag'];
        $post_author=$row['post_author'];

        $query="INSERT INTO posts (postTitle , post_desc , post_tag , post_author)
            VALUES ('$postTitle' , '$post_desc' , '$post_tag' , '$post_author') ";

        mysqli_query($conn , $query);

        // delete from users_buffer

        $query="DELETE FROM posts_buffer WHERE post_id='$post_id' ";
        mysqli_query($conn , $query);
   }
}

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
