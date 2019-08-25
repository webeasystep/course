<?php

include("../include/url_users.php");

/* If not logged in then redirect to login page */
if(!isset($_SESSION['user_name']))
{
	header("location:login.php");
}

if(isset($_POST['submit'])) {

	$postTitle=$_POST['title'];
	$post_desc=$_POST['description'];
	$post_tag=$_POST['tag'];
	$post_author=$_SESSION['user_name'];

	include("../db/dbconnect.php");

	/* CHECK if same user or email exists or not ? */
	$query="INSERT INTO posts (postTitle , post_desc , post_tag , post_author)
			VALUES ('$postTitle' , '$post_desc' , '$post_tag' , '$post_author') ";
	mysqli_query($conn , $query);

	printf("Successfully posted your post\n");
}

/* * * * * POST Form * * * * */
else {
	echo "
		<form action='create_post.php' method='POST' >
			Title : <input type='text' name='title'></br>
			Description : <input type='text' name='description'></br>
			Tags : <input type='text' name='tag'></br>
			<input type='submit' name='submit' value='Publish'></br>
		</form>
	";
}


?>