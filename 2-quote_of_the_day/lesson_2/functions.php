<?php
/**
 * Created by PhpStorm.
 * User: Ahmed.Fakhr
 * Date: 2019-07-14
 * Time: 5:19 PM
 */
// read // write // delete /edit
# the problem with arrays it's not suitable for hard coded large data

if(isset($_GET['delete'])){
    $id = $_GET['id'];
    delete($id);
}
function create(){
    #example 3 append to the file
    $afile = fopen("quotes.txt", "a");
    $txt = "John Doe\n";
    fwrite($afile,$txt);
    fclose($afile);
}
function read(){
    #example 1 read the file
    $rfile = fopen("quotes.txt", "r");
    $quotes = array();
    while (!feof($rfile)) {
        $quotes[] = fgets($rfile);
    }
    return $quotes;
}
function update(){
    #example 5 edit specific line from file
    $filename = "quote.txt";
    $remove_line = "John Doe";
    if (!file_exists("quote.txt")) {
        die("File not found");
    } else {
        $lines = file($filename, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $key => $line) {
            if ($line === $remove_line)
                $lines[$key] = "John Daa";
        }
        $data = implode(PHP_EOL, $lines);
        file_put_contents($filename, $data);
        print "Line added successfully";
    }
}
function delete($id = NULL){
    #example 4 remove specific line from file
    $filename = "quotes.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES);
    unset($lines[$id]);
    $data = implode(PHP_EOL, $lines);
    file_put_contents($filename, $data);
    header('Location: '.'index.php');
}
