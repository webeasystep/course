<?php

include("../include/url_posts.php");


/* If not logged in then redirect to login page */
if(!isset($_SESSION['user_name']))
{
	header("location:../users/login.php");
}

if(isset($_POST['submit'])) {

	$post_title=$_POST['post_title'];
	$post_desc=$_POST['post_desc'];
	$post_tag=$_POST['post_tag'];
	$post_author=$_SESSION['user_name'];

	include("../db/dbconnect.php");

	/* CHECK if same user or email exists or not ? */
	$query="INSERT INTO posts_buffer (post_title , post_desc , post_tag , post_author)
			VALUES ('$post_title' , '$post_desc' , '$post_tag' , '$post_author') ";
	mysqli_query($conn , $query);

	printf("Successfully posted your post\n");
	header("location:posts.php");

}

/* * * * * POST Form * * * * */
else {
	/*
	echo "
		<form action='create_post.php' method='POST' >
			Title : <input type='text' name='title'></br>
			Description : <input type='text' name='description'></br>
			Tags : <input type='text' name='tag'></br>
			<input type='submit' name='submit' value='Publish'></br>
		</form>
	";*/

	include("../include/frame_newpost.php");

}


?>
