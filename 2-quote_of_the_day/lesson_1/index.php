<?php
/**
 * Created by PhpStorm.
 * User: Ahmed.Fakhr
 * Date: 2019-07-14
 * Time: 5:19 PM
 */

                                 ### read ### write ### delete ### edit

#example 1 read the file

/*$rfile = fopen("quotes.txt", "r");
//var_dump($rfile);exit; //resources data type
$lines = array();

while (!feof($rfile)) {
    $lines[] = fgets($rfile);
}

print_r($lines);exit;*/

#example 2 write to the file

/*$file = fopen("quotes.txt", "w");
$txt = "John Doe\n";
fwrite($file, $txt);*/

#example 3 append to the file

/*$afile = fopen("quotes.txt", "a");
$txt = "John Doe\n";
fwrite($afile,$txt);
fclose($afile);*/

#example 4 remove specific line from file

/*$filename = "quotes.txt";
$remove_line = "100. “Peace comes from within. Do not seek it without.”";
$lines = file($filename, FILE_IGNORE_NEW_LINES);
foreach ($lines as $key => $line) {
    if ($line === $remove_line) unset($lines[$key]);
}
$data = implode(PHP_EOL, $lines);
file_put_contents($filename, $data);*/

#example 5 edit specific line from file

$filename = "quotes.txt";
$edit_line = "John Doe";
if (!file_exists("quotes.txt")) {
    die("File not found");
} else {
    $lines = file($filename, FILE_IGNORE_NEW_LINES);
    foreach ($lines as $key => $line) {
        if ($line === $edit_line)
            $lines[$key] = "John Daa";
    }
    $data = implode(PHP_EOL, $lines);
    file_put_contents($filename, $data);
    print "Line added successfully";
}
