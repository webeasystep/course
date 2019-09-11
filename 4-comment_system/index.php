<?php
//date_default_timezone_set()- Sets the timezone you want to get the date in
date_default_timezone_set('Africa/Nairobi');

//Include database connection
include 'db.php';

//Include functions page file
include 'comments.php';

//Starts the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>Comments Tutorial</h1>
    </div>
    <div class="row">
<!-- Video to be displayed on the browser-->
<iframe width="320" height="240"
        src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
<br>

<!-- The form belows allow the user to login and logout before updating or deleting any comments in the website-->
<?php

//This code checks if user is logged in or logout
if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];
    echo "<div class='alert alert-success'>
        <strong>Success!</strong> You are logged in!
        </div>";
    //In order to see the form inside the PHP code, use echo"";
    echo "<form method='post' action='" . setComments($db) . "'>
              <input type='hidden' name='user_id' value='$user_id'>
              <input type='hidden' name='comment_date' value='" . date('Y-m-d H:i:s') . "'>
            <div class='form-group'>
            <label class='control-label'>Title</label>
            <textarea class='form-control' name='message'></textarea><br>
            </div>
              <button class='btn btn-success' type='submit' name='comment_submit'> Send </button>
	     </form> 
         <form method='post' action='" . userLogout() . "' >
            <div class='form-group'>
            <button class='btn btn-info' type='submit' name='logout_submit'> LogOut </button>
            </div>
         </form>
	  ";
} else {
    echo
        "<form class='form-inline' role='form' method='post' action='" . getLogin($db) . "' >
		    <input type='text' name='user_name'>
		    <input type='password' name='password'>
		    <button type='submit' name='loginSubmit'> LogIn </button>
		</form>";
    echo "You are NOT logged in!";
}
?>

</div>

<div class="row">
<!--date()- Displays the date, Y-m-d(Year,Month, Date) H:i:s(Hour, Minute, Second) -->
<?php
//The function below is used to get comments from the database
getComments($db);
?>
</div>
</div>
</body>
</html>