<?php 
	session_start();
	if(isset($_POST['submit'])){
		$username = strip_tags($_POST['username']);
		$password = strip_tags(md5($_POST['password']));
		$db = mysqli_connect("localhost", "root", "", "demo") or die ("Failed to connect");
		$query = "INSERT INTO users(username,password,activated) VALUES('$username', '$password',1)";
		$result = mysqli_query($db,$query);
		if($result) {
			echo "Successfully registered";
			header('Location: index.php');
		}
		else {
			echo "Failed to register";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>

<div class="container">

    <div class="row">
        <h1>Register</h1>
        <hr>
        <div class="span12">

            <form class="form-horizontal" action="register.php" method="POST">
                <fieldset>

                    <div class="form-group">
                        <!-- Username -->
                        <label   for="username">Username</label>
                        <div class="controls">
                            <input type="text" id="username" name="username" placeholder="Enter username" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Password-->
                        <label  for="password">Password</label>
                        <div class="controls">
                            <input type="password" id="password" name="password" placeholder="Enter password here" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Button -->
                        <div class="controls">
                            <button type="submit" name="submit" value="Register" class="btn btn-success">Register</button>
                            <a href="login.php" class="btn btn-info">Back</a>
                        </div>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
</div>


</body>
</html>