<?php
require_once 'config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        Welcome! You have successfully logged in. Thank you.
        <a href="<?php echo WEB_ROOT; ?>logout.php" onclick="return confirm('Are you sure want to logout?')">Logout</a>
    </div>

</div>
</body>
</html>