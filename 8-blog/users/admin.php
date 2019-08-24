<?php

include("../include/url_users.php");

if(!isset($_SESSION['username'])){
	header('Location:../index.php');
}
else if($_SESSION['usertype']!='admin') {
  header('Location:../index.php');
}
else {
	$user=$_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Admin Panel</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#posts">Post Requests</a></li>
    <li><a data-toggle="tab" href="#acc">Account Requests</a></li>
    <li><a data-toggle="tab" href="#user">User Details</a></li>
		<li><a data-toggle="tab" href="#messages">Messages</a></li>
  </ul>

  <div class="tab-content">
    <div id="posts" class="tab-pane fade in active">
      <p>
				<?php
						include("../include/post_request.php");
				?>
		  </p>
		</div>

    <div id="acc" class="tab-pane fade">
      <p>
				<?php
						include("../include/account_request.php");
				?>
			</p>
    </div>

    <div id="user" class="tab-pane fade">
      <p>
				<?php
				   include("userlist.php");
				?>
			</p>
    </div>

		<div id="messages" class="tab-pane fade">
			<p>
				<?php
					 include("../include/messages.php");
				?>
			</p>
		</div>

  </div>
</div>

</body>
</html>
