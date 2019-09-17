<?php
/* Authenticate user */
include("../db/dbconnect.php");

/* Redirect if post_id is not set */
if(!isset($_REQUEST['id'])) {
	 header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
	$post_id=$_REQUEST['id'];
}

echo $post_id;

/* delete from table posts */
$query="DELETE FROM posts_buffer WHERE post_id='$post_id' ";

$result=mysqli_query($conn , $query);

if($result==TRUE) {
	 header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
	echo "Something went Wrong ! please try again later";
}

?>
