<?php
/**
 * Created by PhpStorm.
 * User: Ahmed.Fakhr
 * Date: 2019-08-27
 * Time: 4:47 PM
 */


# create a new text file , put a text on it , try to read and print text on the browser
// CODE HERE

# I want to accept only jpg,png,gif extensions , how to do that ?
// CODE HERE
$ext = pathinfo($_FILES["quotes"]["name"], PATHINFO_EXTENSION);
if ($_FILES["quotes"]["error"] != 0) {
    $_SESSION['message'] = 'File has a wrong  extension.';
}