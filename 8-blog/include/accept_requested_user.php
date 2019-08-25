<?php
/* Authenticate user */
include("../db/dbconnect.php");

/* Redirect if post_id is not set */
if(!isset($_REQUEST['user_name'])) {
	 header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
	$user_name=$_REQUEST['user_name'];
}

/* delete from table posts */
$query="SELECT * FROM users_buffer WHERE user_name='$user_name' ";
$result=mysqli_query($conn , $query);

if(mysqli_num_rows($result) == 1) {
   while($row=mysqli_fetch_assoc($result)) {
        // insert into users
        $user_name=$row['user_name'];
        $first_name=$row['first_name'];
        $password=$row['password'];
        $email=$row['email'];

        $query="INSERT INTO users (user_name, first_name, password, email  )
            VALUES ('$user_name','$first_name','$password','$email')";
        mysqli_query($conn , $query);

        // delete from users_buffer
        $query="DELETE FROM users_buffer WHERE user_name='$user_name' ";
        mysqli_query($conn , $query);
   }
}

	 header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
