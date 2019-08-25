<?php
include("../include/url_users.php");

/* If already logged in then redirect to previous page */
if(isset($_SESSION['user_name'])) {
		header('Location:../index.php');
}

if(isset($_POST['submit'])) {

	$user_name=$_POST['user_name'];
	$first_name=$_POST['first_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	include("../db/dbconnect.php");

	/* CHECK if same user or email exists or not ? */
	$query="SELECT * FROM users , users_buffer WHERE user_name='$user_name' OR email='$email' ";
	$result=mysqli_query($conn , $query);
	$rows=mysqli_num_rows($result);

	if($rows > 0) {
		header("location:register.php");
	}
	else {
		$query="INSERT INTO users_buffer (user_name, first_name, password, email)
				VALUES ('$user_name','$first_name','$password','$email')";
		mysqli_query($conn , $query);
		header("location:../index.php");
	}


}

/* * * * * Registeration Form * * * * */
else {
	include("../include/frame_register.php");

}


?>
