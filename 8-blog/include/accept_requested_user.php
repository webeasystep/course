<?php
/* Authenticate user */
include("../db/dbconnect.php");

/* Redirect if postid is not set */
if(!isset($_REQUEST['username'])) {
	 header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
	$username=$_REQUEST['username'];
}

/* delete from table posts */
$query="SELECT * FROM users_buffer WHERE username='$username' ";
$result=mysqli_query($conn , $query);

if(mysqli_num_rows($result) == 1) {
   while($row=mysqli_fetch_assoc($result)) {
        // insert into users
        $username=$row['username'];
        $firstname=$row['firstname'];
        $password=$row['password'];
        $emailid=$row['emailid'];

        $query="INSERT INTO users (username, firstname, password, emailid  )
            VALUES ('$username','$firstname','$password','$emailid')";
        mysqli_query($conn , $query);

        // delete from users_buffer
        $query="DELETE FROM users_buffer WHERE username='$username' ";
        mysqli_query($conn , $query);
   }
}

	 header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
