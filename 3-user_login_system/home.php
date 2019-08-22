<?php
require_once 'config.php';
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
        <h1>Welcome <?php echo $username; ?>.</h1>
        <p> Your user Id is <?php echo $userId; ?>.</p>
        Welcome! You have successfully logged in. Thank you.
        <a href="<?php echo WEB_ROOT; ?>logout.php" onclick="return confirm('Are you sure want to logout?')">Logout</a>
    </div>
    <form action="index.php">
        <input type="submit" name="Logout" value="Logout">
    </form>
</div>
</body>
</html>