<?php
/* Authenticate user */
include("../db/dbconnect.php");

/* Redirect if postid is not set */
if(!isset($_REQUEST['postid'])) {
	header("location:post.php?id=".$id);
} else {
	$postid=$_REQUEST['postid'];
}
/* delete from table posts */
$query="DELETE FROM posts WHERE postID='$postid'";

$result=mysqli_query($conn , $query);

/* delete from post user_table */
$query="DELETE FROM user_post WHERE postID='$postid'	";

$result=mysqli_query($conn , $query);

/* delete from comment user_table */
$query="DELETE FROM comments WHERE postID='$postid'
				";

$result=mysqli_query($conn , $query);

if($result==TRUE) {
	header("location:posts.php");
} else {
	echo "Problem in deleting the Post";
}

?>
