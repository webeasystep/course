<?php
/**
 * Created by PhpStorm.
 * User: Ahmed.Fakhr
 * Date: 2019-07-14
 * Time: 12:42 PM
 */
$name = "fakhr";
$age = 25;
$is_married = true;
$tall = 178.5;
$weight = "80";

function format_favorites()
{
    $fav_str = "";
    $favorites = array('color' => "white", 'drink' => "orange juice");
    foreach ($favorites as $key => $value) {
        $fav_str .= "(" . $key . "=" . $value . ")" . "-";
    }
    return $fav_str;
}

function format_languages(){
    $languages = array('PHP', 'Mysql', 'Javascript', 'Kotlin');
    $lang_str = "";
    $arrCount = count($languages);
    $loopCount = 0;
    foreach ($languages as $language) {
        if(++$loopCount !== $arrCount) {
            $lang_str .= $language ."-";
        }else{
            $lang_str .= $language;
        }
    }
    return $lang_str;
}

function format_size_recommendation($tall, $weight)
{
    $size_diff = $tall - 100 - $weight;
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

function format_best_numbers(){
    $best_num = "";
    for ($i = 50 ; $i <= 100 ; $i+=10){
         $best_num.= $i ."-";
    }
    return $best_num ;
}