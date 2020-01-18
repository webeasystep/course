<?php
require 'config.php';

$temp = '';
$errors = '';
$clss = 'danger';
if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        $errors .= "\nEmail/Username and Password required.";
        $temp .= "N";
    }

    if (!empty($username) && strlen($username) > 80) {
        $errors .= "\nMax length of Email Address:80";
        $temp .= "N";
    }

    if ((!empty($password) && strlen($password) > 20)) {
        $errors .= "\nMax length of Password:25";
        $temp .= "N";
    }

    if (empty($temp)) {
        $_POST['password'] = '';
        $_POST['username'] = '';
        $clss = 'success';
        $result = user_login($username, $password);
        $errors .= $result;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<head>
    <meta charset="UTF-8">
    <title>Remember Me Example</title>

</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>Remember Me Example Tutorial</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue</h1>
            <div class="account-wall">

                <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="form-signin">
                    <?php
                    if (!empty($errors)) {
                        echo "<p class='alert alert-".$clss . "'>" . nl2br($errors) . "</p>";
                    }
                    ?>
                    <input class="form-control" type="text" name="username" placeholder="Email" required autofocus
                           tabindex="1"
                           value="<?php echo isset($_COOKIE['cookname']) ? $_COOKIE['cookname'] : @htmlspecialchars($_POST['username']); ?>"/>
                    <input class="form-control" type="password" placeholder="Password" name="password" title="Password" tabindex="2"
                           value="<?php echo isset($_COOKIE['cookpass']) ? $_COOKIE['cookpass'] : ''; ?>"/>

                    <button class="btn btn-lg btn-primary btn-block" name="login" value="Login"  type="submit">Sign in</button>
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me"  value="1"
                        <?php echo isset($_COOKIE['cookrem']) ? 'checked="checked"' : ''; ?>>
                        Remember me
                    </label>
                    <span class="clearfix"></span>
                </form>
            </div>
            <a href="register.php" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>



</body>
</html>
