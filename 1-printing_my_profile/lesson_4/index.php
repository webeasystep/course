<?php
/**
 * Created by PhpStorm.
 * User: Ahmed.Fakhr
 * Date: 2019-06-25
 * Time: 6:10 PM
 */
// the problem : i want to organize code and more concise size results
    // create function
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
    function format_favorites(){
        $lang_str = "";
        $favorites =  array('color' =>"white", 'drink' =>"orange juice");
        foreach ($favorites as $key =>$value) {
            $lang_str .= "(".$key."=".$value.")"."-";
        }
        return $lang_str;
    }
    /*function old_format_size_recommendation($tall,$weight){
        $size_diff =  $tall - 100 - $weight ;
        if($size_diff < 0){
            $size_recommendation =  "You should loose $size_diff " ;
        }elseif($size_diff == 0){
            $size_recommendation =  "Your weight is Great " ;
        }else{
            $size_recommendation =  "You should weight $size_diff " ;
        }
        return $size_recommendation;
    }*/
    // function params and return
    function format_size_recommendation($tall,$weight){
        $size_diff =  $tall - 100 - $weight ;
        switch ($size_diff) {
            case ($size_diff >= 20):
                return "Too ​Skinny You should weight $size_diff";
                break;
            case ($size_diff >= 10):
                return "Skinny You should  weight  $size_diff";
                break;
            case ($size_diff <= -15):
                return "Too Fat You should loose $size_diff";
                break;
            case ($size_diff <= -5):
                return "Fat You should loose $size_diff";
                break;

            default:
                return "Normal Best weight";
        }
    }
    function print_profile(){
    $name = "fakhr";
    $is_married = true ;
    $age = 25;
    $is_married = ($is_married == true) ? "Yes" : "NO" ;
    $tall = 178.5;
    $weight = "80";
    echo  "  Name: $name </br>
        Age:$age </br>
        Tall:$tall </br>
        weight:$weight </br>
        size Recommendation : ".format_size_recommendation($tall,$weight)." </br> 
        is_married:$is_married </br>
        Languages: ".format_languages()." </br>
        Favorites: ".format_favorites();
}
    // call function
    print_profile();


