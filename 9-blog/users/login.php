<?php

/* If form is submitted then authenticate it*/

include("../include/url_users.php");

if(isset($_POST['submit'])) {

	$user_name=$_POST['user_name'];
	$password=$_POST['password'];


	/* Check login  correctness*/
	$query="SELECT * FROM users WHERE user_name='$user_name' AND password='$password' ";
	$result=mysqli_query($conn , $query);
	//$rows=1;

	/* query failed */
	if($result==FALSE) {
		printf("Query failed \n");
		header("location:login.php");
	}

	if(mysqli_num_rows($result) == 1) {
		$_SESSION['user_name']=$user_name;
		$_SESSION['password']=$password;
		/* user type */
		$detail=mysqli_fetch_assoc($result);
		$_SESSION['user_type']=$detail['user_type'];

		/* Redirect to current / previous page*/
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		//header("location:../index.php");
	} else {
		echo "
		<div class=\"alert alert-danger container\" role=\"alert\">
	  <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
	  <span class=\"sr-only\">Error:</span>
	   Invalid Username or Password
		</div>
		";
	}
} else {
			if(!isset($_SESSION['user_name'])) {
			echo "
			<div class=\"alert alert-danger\" role=\"alert\">
		  <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
		  <span class=\"sr-only\">Error:</span>
		   Login Again
			</div>
			";
			} else {
				header("location:../index.php");
			}
}


?>
