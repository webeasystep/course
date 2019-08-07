<?php
session_start();

if(isset($_POST['submit']) and $_POST['submit'] == 'Login') {

	include_once('connection.php');
	$username = strip_tags($_POST['username']);
	$password = strip_tags(md5($_POST['password']));

	$sql = "SELECT id,username,password FROM users where username = '$username' LIMIT 1";
	$query = mysqli_query($db, $sql);
	if($query) {
		$row = mysqli_fetch_row($query);
		$userId= $row[0];
		$dbUserName = $row[1];
		$dbPassword = $row[2];
	}

	if($username == $dbUserName && $password == $dbPassword) {
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $userId;
		header('Location: user.php');
	}
	else {
		echo "<div class=\"alert alert-danger\">
                <strong>Wrong!</strong>Incorrect login data username or password.</div>";

	}
}
if(isset($_POST['submit']) and $_POST['submit'] == 'Logout') {
    session_start();
    session_destroy();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="span12">

            <form class="form-horizontal" action="index.php" method="POST">
                <fieldset>
                    <div id="legend">
                        <legend class="">Login</legend>
                    </div>
                    <div class="form-group">
                        <!-- Username -->
                        <label for="username">Username</label>
                        <div class="controls">
                            <input type="text" id="username" name="username" placeholder="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Password-->
                        <label  for="password">Password</label>
                        <div class="controls">
                            <input type="password" id="password" name="password" placeholder="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Button -->
                            <button type="submit" name="submit" value="Login" class="btn btn-success">Login</button>
                    </div>
                </fieldset>
            </form>
            <a href="register.php" >Register</a>

        </div>
    </div>
</div>
</body>
</html>