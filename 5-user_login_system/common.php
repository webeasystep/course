<?php

function check_login()
{
    /* Check if user has been remembered */
    if (isset($_COOKIE['cookname'])) {
        $_SESSION['username'] = $_COOKIE['cookname'];
    }

    if (isset($_COOKIE['cookpass'])) {
        $_SESSION['user_pass'] = $_COOKIE['cookpass'];
    }

    if (isset($_COOKIE['cookrem'])) {
        $_SESSION['user_rem'] = $_COOKIE['cookrem'];
    }

    /* Username and password have been set */
    if (isset($_SESSION['username']) && isset($_SESSION['user_pass'])) {
        /* Confirm that username and password are valid */
        if (confirm_user($_SESSION['username'], $_SESSION['user_pass']) === FALSE) {
            /* Variables are incorrect, user not logged in */
            unset($_SESSION['username']);
            unset($_SESSION['user_pass']);
            unset($_SESSION['user_rem']);
            return FALSE;
        }
        $row = dbFetchAssoc(confirm_user($_SESSION['username'], $_SESSION['user_pass']));
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['last_login'] = $row['last_login'];
        return TRUE;
    } else {/* User not logged in */
        return FALSE;
    }
}

//user login
function user_login($username, $password)
{
    if (user_exists($username) == FALSE) {
        return "You are not a registered member";
    }
    else if (confirm_user($username, md5($password)) === FALSE) {
        return "Authentication error";
    }
    else {
        $_SESSION['username'] = $username;
        $_SESSION['user_pass'] = $password;
        $row = dbFetchAssoc(confirm_user($username, md5($password)));
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['last_login'] = $row['last_login'];
        if (isset($_POST['remember_me'])) {
            $_SESSION['user_rem'] = $_POST['remember_me'];
            setcookie("cookname", $_SESSION['username'], time() + 60 * 60 * 24 * COOKIE_TIME_OUT);
            setcookie("cookpass", $_SESSION['user_pass'], time() + 60 * 60 * 24 * COOKIE_TIME_OUT);
            setcookie("cookrem", $_SESSION['user_rem'], time() + 60 * 60 * 24 * COOKIE_TIME_OUT);
        } else {
            //destroy any previously set cookie
            setcookie("cookname", '', time() - 60 * 60 * 24 * COOKIE_TIME_OUT);
            setcookie("cookpass", '', time() - 60 * 60 * 24 * COOKIE_TIME_OUT);
            setcookie("cookrem", '', time() - 60 * 60 * 24 * COOKIE_TIME_OUT);
        }

        //Login history
        $sql = "UPDATE users  SET last_login= NOW()  WHERE username='" . $username . "'";

        dbQuery($sql);

        header('Location:' . WEB_ROOT . 'index.php');
        exit;
    }
}

function user_exists($username)
{
    $sql = "SELECT ua.username,ua.username,ua.last_login FROM users ua
            WHERE ua.username='$username'"
        . " LIMIT 1";

    $result = dbQuery($sql);

    if (!$result || (dbNumRows($result) < 1)) {
        return FALSE; //Indicates username failure
    }

    return $result;
}

function confirm_user($username, $password)
{

    /* Verify that user is in database */
    $sql = "SELECT ua.username,ua.username,ua.last_login FROM users ua
            WHERE ua.username='$username'
                AND ua.password='$password' LIMIT 1";

    $result = dbQuery($sql);

    if (!$result || (dbNumRows($result) < 1)) {
        return FALSE; //Indicates username failure
    }

    return $result;
}

//do user logout
function user_logout()
{
    session_start();
    $_SESSION = array(); // reset session array
    session_destroy();   // destroy session.
    //delete from cookie if expires
    setcookie("cookname", '', time() - 60 * 60 * 24 * COOKIE_TIME_OUT);
    setcookie("cookpass", '', time() - 60 * 60 * 24 * COOKIE_TIME_OUT);
    setcookie("cookrem", '', time() - 60 * 60 * 24 * COOKIE_TIME_OUT);
    header('Location: ' . WEB_ROOT . 'login.php');
    exit;
}

/*
 * End of common.php
 */