<?php
/* Authenticate user */
include("../db/dbconnect.php");

/* Redirect if postid is not set */
if(!isset($_REQUEST['id'])) {
	 header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
	$postid=$_REQUEST['id'];
}

/* delete from table posts */
$query="SELECT * FROM posts_buffer WHERE postID='$postid' ";
$result=mysqli_query($conn , $query);

if(mysqli_num_rows($result) == 1) {
   while($row=mysqli_fetch_assoc($result)) {

        $postTitle=$row['postTitle'];
        $postDesc=$row['postDesc'];
        $postTag=$row['postTag'];
        $postAuthor=$row['postAuthor'];

        $query="INSERT INTO posts (postTitle , postDesc , postTag , postAuthor)
            VALUES ('$postTitle' , '$postDesc' , '$postTag' , '$postAuthor') ";

        mysqli_query($conn , $query);

        // delete from users_buffer

        $query="DELETE FROM posts_buffer WHERE postid='$postid' ";
        mysqli_query($conn , $query);
   }
}

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
