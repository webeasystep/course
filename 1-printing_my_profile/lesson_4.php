<?php
/**
 * Created by PhpStorm.
 * User: Ahmed.Fakhr
 * Date: 2019-06-25
 * Time: 6:10 PM
 */

// the problem : i want to print the

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
    function format_size_recommendations($tall,$weight){
        $size_diff =  $tall - 100 - $weight ;
        if($size_diff < 0){
            $size_recommendation =  "You should loose $size_diff " ;
        }elseif($size_diff == 0){
            $size_recommendation =  "Your weight is Great " ;
        }else{
            $size_recommendation =  "You should weight $size_diff " ;
        }
        return $size_recommendation;
    }
    function print_profile(){
        $name = "fakhr";
        $age = 25;
        $is_married = true ;
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
    // call function
    print_profile();
/*
 * PHP language supports following type of operators.
        Arithmetic Operators
        Comparison Operators
        Logical (or Relational) Operators
        Assignment Operators
 */

/* Summary
 *  functions create - call -params - return
 *  scope meaning - execution order
 *  switch - comparison operators
 *
*/
/* resources
*/
/* quiz
how to Make $size_recommendation = -1 using type casting ?
*/