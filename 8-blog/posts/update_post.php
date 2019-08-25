<?php

include("../include/url_posts.php");

if(!isset($_REQUEST['id'])) {
	header("posts.php");
}

/* Update post form */
if(!isset($_POST['submit'])) {

	include("../db/dbconnect.php");

	$id=$_REQUEST['id'];

	$query="SELECT * FROM posts WHERE post_id='$id' ";
	$result=mysqli_query($conn , $query);


	if(mysqli_num_rows($result) > 0) {
		$post=mysqli_fetch_assoc($result);

		/* Only Author can update the post */
		if($_SESSION['user_name']  != $post['post_author'] && $_SESSION['user_type']!='admin') {
			 printf("You are not valid user to update this post");
			 header("location:view_post.php?id=".$post['post_id']);
		}

		$id=$post['post_id'];
		$desc=$post['post_desc'];
		$title=$post['post_title'];
		$tags=$post['post_tag'];
		$author=$post['post_author'];

		include("../include/frame_update.php");

	} else {
		echo "No such post exists :-(";
	}
}
/* Update query */
else {
	include("../db/dbconnect.php");

	echo "hello";

	$id=$_REQUEST['id'];
	$desc=$_POST['post_desc'];
	$title=$_POST['post_title'];
	$tags=$_POST['post_tag'];

	echo "ID : " .$id;

	$query="UPDATE posts
			SET post_title='$title' , post_desc='$desc' , post_tag='$tags'
			WHERE post_id='$id';
			";

	$result=mysqli_query($conn , $query);

	if($result) {
		echo "Updated Successfully";
		header("location:view_post.php?id=".$id);
	} else {
		echo "updation failed";
		header("location:update_post.php?id='$id' ");
	}

}

?>
