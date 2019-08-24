<?php

/* SHOWS MOST VIEWED POSTS */

include("../include/url_posts.php");
include("../db/dbconnect.php");
include_once("../include/algos.php");


	$query="SELECT *
      FROM user_post , posts
      WHERE user_post.postID=posts.postID
      ORDER BY postViews DESC
      ;
			";

	$result=mysqli_query($conn , $query);

  if($result==false) {
    echo "problem fetching posts";
  } else {
      if(mysqli_num_rows($result)) {
        while($post=mysqli_fetch_assoc($result)) {
          /* set variables */
          $id=$post['postID'];
          $title=$post['postTitle'];
          $desc=$post['postDesc'];
          $tags=$post['postTag'];
          $author=$post['postAuthor'];
          $time=$post['postTime'];
					$views=showViews($id,$author);
          $shortpost=1;  /* short post with read more  */
          include('../include/frame_post.php');

        }
      }
  }

?>
