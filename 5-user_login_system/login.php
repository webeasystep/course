<?php
require_once 'config.php';

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<head>
    <meta charset="UTF-8">
    <title>Remember Me Example</title>
    <style>
        .form-signin
        {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading, .form-signin .checkbox
        {
            margin-bottom: 10px;
        }
        .form-signin .checkbox
        {
            font-weight: normal;
        }
        .form-signin .form-control
        {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .form-signin .form-control:focus
        {
            z-index: 2;
        }
        .form-signin input[type="text"]
        {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        .form-signin input[type="password"]
        {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .account-wall
        {
            margin-top: 20px;
            padding: 40px 0px 20px 0px;
            background-color: #f7f7f7;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
        .login-title
        {
            color: #555;
            font-size: 18px;
            font-weight: 400;
            display: block;
        }
        .profile-img
        {
            width: 96px;
            height: 96px;
            margin: 0 auto 10px;
            display: block;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
        .need-help
        {
            margin-top: 10px;
        }
        .new-account
        {
            display: block;
            margin-top: 10px;
        }
        @cjohnweb

    </style>
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

                    <button class="btn btn-lg btn-primary btn-block" name="login" value="Login"  type="submit">
                        Sign in</button>
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me"  value="1" <?php echo isset($_COOKIE['cookrem']) ? 'checked="checked"' : ''; ?>>
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
