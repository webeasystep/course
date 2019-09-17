<?php

include("../include/url_posts.php");
include_once("../include/total_views.php");

	/* view_post.php?id=2 */
	if(isset($_REQUEST['id'])) {
		$id=$_REQUEST['id'];

		$query="SELECT * FROM posts WHERE post_id='$id'";
		$result=mysqli_query($conn , $query);

		if($post=mysqli_fetch_assoc($result)) {
				$id=$post['post_id'];
				$title=$post['post_title'];
				$desc=$post['post_desc'];
				$tags=$post['post_tag'];
				$author=$post['post_author'];
				$time=$post['post_time'];
				$short_post=0;
				/* increament view by 1 */
				$views=increment_views($id, $author);

				include("../include/frame_post.php");
		}
	}

		/* view_post.php?tags=dp */
	if(isset($_REQUEST['tags'])) {
		$tag=$_REQUEST['tags'];

		$query="SELECT * FROM posts WHERE post_tag='$tag'";
		$result=mysqli_query($conn , $query);

		if(mysqli_num_rows($result) > 0) {
			while($post=mysqli_fetch_assoc($result)) {
				$id=$post['post_id'];
				$title=$post['post_title'];
				$desc=$post['post_desc'];
				$tags=$post['post_tag'];
				$author=$post['post_author'];
				$time=$post['post_time'];


				include("../include/frame_post.php");
			}

		}

	}

	/* view_post.php?user=qt */
if(isset($_REQUEST['user'])) {
	$user=$_REQUEST['user'];

	$query="SELECT * FROM posts WHERE post_author='$user'";
	$result=mysqli_query($conn , $query);

	if(mysqli_num_rows($result) > 0) {
		while($post=mysqli_fetch_assoc($result)) {
			$id=$post['post_id'];
			$title=$post['post_title'];
			$desc=$post['post_desc'];
			$tags=$post['post_tag'];
			$author=$post['post_author'];
			$time=$post['post_time'];
			$short_post=0;  /*  Full post with without read more */

			include("../include/frame_post.php");
		}

	}

}

?>
