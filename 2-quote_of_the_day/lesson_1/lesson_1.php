<?php
/**
 * Created by PhpStorm.
 * User: Ahmed.Fakhr
 * Date: 2019-07-14
 * Time: 5:19 PM
 */
// read // write // delete /edit
# the problem with arrays it's not suitable for hard coded large data

#example 1 read the file
$rfile = fopen("quotes.txt", "r");
//var_dump($file);
$members = array();

while (!feof($rfile)) {
    $members[] = fgets($rfile);
}


#example 2 write to the file
/*$file = fopen("quotes.txt", "w");
$txt = "John Doe\n";
fwrite($file, $txt);*/

#example 3 append to the file
/*$afile = fopen("quotes.txt", "a");
$txt = "John Doe\n";
fwrite($afile,$txt);
fclose($afile); */

#example 4 remove specific line from file
$filename = "quotes.txt";
$remove_line = "100. “Peace comes from within. Do not seek it without.”";
$lines = file($filename, FILE_IGNORE_NEW_LINES);
foreach ($lines as $key => $line) {
    if ($line === $remove_line) unset($lines[$key]);
}
$data = implode(PHP_EOL, $lines);
file_put_contents($filename, $data);

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


/* Summary
 *  file system functions (fopen,feof,fgets,file,file_put_contents,file_exists)
 *  how to read documentations
 *  using while
 *  recourse data type
 *  array functions implode-unset
 *  misc die
 * PHP_EOL - \n
*/
/* resources
*/
/* quiz
how to Make $size_recommendation = -1 using type casting ?
*/