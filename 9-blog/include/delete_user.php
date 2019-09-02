<?php
/* Authenticate user */
include("../db/dbconnect.php");

/* Redirect if post_id is not set */
if (!isset($_REQUEST['user_name'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    $user_name = $_REQUEST['user_name'];
}


/* delete from table posts */
$query = "DELETE FROM users WHERE user_name='$user_name'";

$result = mysqli_query($conn, $query);

if ($result == TRUE) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    echo "Something went Wrong ! please try again later";
}

