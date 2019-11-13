<?php
/**
 * Created by PhpStorm.
 * User: Ahmed.Fakhr
 * Date: 2019-07-14
 * Time: 5:19 PM
 */
                                    // read // write // delete /edit

# improve Crud operation

if (isset($_REQUEST['delete'])) {
    $id = $_REQUEST['id'];
    delete($id);
} elseif (isset($_REQUEST['create'])) {
    create();
} elseif (isset($_REQUEST['edit'])) {
    $id = $_GET['id'];
    edit($id);
} elseif (isset($_REQUEST['update'])) {
    update();
}
function read()
{
    #example 1 read the file
    $rfile = fopen("quotes.txt", "r");
    $quotes = array();
    while (!feof($rfile)) {
        $quotes[] = fgets($rfile);
    }
    return $quotes;
}

function delete($id = NULL)
{
    #example 4 remove specific line from file
    $filename = "quotes.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES);
    unset($lines[$id]);
    $data = implode(PHP_EOL, $lines);
    file_put_contents($filename, $data);
    header('Location: ' . 'index.php');
}

function create()
{
    #example 3 append to the file
    $afile = fopen("quotes.txt", "a");
    $txt = PHP_EOL . $_REQUEST['quote'];
    fwrite($afile, $txt);
    fclose($afile);
    header('Location: ' . 'index.php');
}

function edit($id)
{
    $filename = "quotes.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES);
    $current_line = $lines[$id];
    $current_id = $id;
    include 'edit.php';
}

function update()
{
    #example 5 edit specific line from file
    $filename = "quotes.txt";
    $updated_line = $_REQUEST['quote'];
    $line_id = $_REQUEST['current_id'];

    if (!file_exists("$filename")) {
        die("File not found");
    } else {
        $lines = file($filename, FILE_IGNORE_NEW_LINES);
        $lines[$line_id] = $updated_line;
        $data = implode(PHP_EOL, $lines);
        file_put_contents($filename, $data);
        header('Location: ' . 'index.php');
    }
}
