<?php

if(!isset($_SESSION['user_name'])){
	header('Location:../index.php');
}
else if($_SESSION['user_type']!='admin') {
  header('Location:../index.php');
}
else {
	$user=$_SESSION['user_name'];
}

/* fetch user detail */
$query="SELECT * FROM posts_buffer";

$result=mysqli_query($conn , $query );

if($result) {
  if(mysqli_num_rows($result)==0) {
      echo "No more requests to show";
  }

	else if(mysqli_num_rows($result)>0) {
		while($row=mysqli_fetch_assoc($result)) {
		    include("frame_post_requested.php");
    }
  }
} else {
	echo "failed";
}

?>
