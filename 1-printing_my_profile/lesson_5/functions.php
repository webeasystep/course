<?php
/**
 * Created by PhpStorm.
 * User: Ahmed.Fakhr
 * Date: 2019-07-14
 * Time: 12:42 PM
 */

function format_favorites(){
    $lang_str = "";
    $favorites =  array('color' =>"white", 'drink' =>"orange juice");
    foreach ($favorites as $key =>$value) {
        $lang_str .= "(".$key."=".$value.")"."-";
    }
    return $lang_str;
}
function format_languages(){
    $languages = array('PHP', 'Mysql', 'Javascript', 'Kotlin');
    $fav_str = "";
    $arrCount = count($languages);
    $loopCount = 0;
    foreach ($languages as $language) {
        if(++$loopCount !== $arrCount) {
            $fav_str .= $language ."-";
        }else{
            $fav_str .= $language;
        }
    }
    return $fav_str;
}
function format_size_recommendation($tall,$weight){
    $size_diff =  $tall - 100 - $weight ;
    switch ($size_diff) {
        case ($size_diff >= 20):
            return "Too ​Skinny You should weight $size_diff";
            break;
        case ($size_diff >= 10):
            return " ​Skinny You should  weight  $size_diff";
            break;
        case ($size_diff <= -5):
            return "Fat You should loose $size_diff";
            break;
        case ($size_diff <= -15):
            return "Too Fat You should loose $size_diff";
            break;
        default:
            return "Normal Best weight";
    }
}

/* Summary
 * include
 * separate business logic from presentation
 * mix php with html
 * short php tag
 * write comments in PHP
*/
/* resources
*/
//quiz
// google it
// can we define var before use it ?
// how to solve define before use variable (USE NULL)
