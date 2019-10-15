<?php
/**
 * Created by PhpStorm.
 * User: Ahmed.Fakhr
 * Date: 2019-06-25
 * Time: 6:10 PM
 */

$name = "fakhr";
$age = 25;
$tall = 178.5;
$weight = "80";
$is_married = true ;
$languages = array('PHP', 'Mysql', 'Javascript', 'Kotlin');
$favorites =  array('color' =>"white", 'drink' =>"orange juice");
$fav_str = "";
$lang_str = "";

/*foreach ($languages as $language) {
    $lang_str .= $language ."-";
}*/

foreach ($favorites as $key =>$value) {
    $fav_str .= "(".$key."=".$value.")"."-";
}

# example 1 if else
/* if($is_married == true){
    $is_married = "Yes";
}else{
    $is_married = "NO";
}*/

# example 2 ternary operator
$is_married = ($is_married == true) ? "Yes" : "NO" ;


# example 3 if else with loop + array functions + increment operators

   $arrCount = count($languages);  // 4
   $loopCount = 0;
foreach ($languages as $language) {
    // 1+$loopCount
    if(++$loopCount !== $arrCount) {
        $lang_str .= $language ."-";
    }else{
        $lang_str .= $language;
    }
}
//echo "Name: $name </br> Age:$age </br> Tall:$tall </br> is_married:$is_married </br> Languages: $lang_str </br>  Favorites:  $fav_str";

# example 4 Arithmetic Operators + elseif + print with type + type casting
  //var_dump($weight);
 //var_dump((int) $weight);
$size_diff =  $tall - 100 - $weight ;
if($size_diff < 0){
    $size_recommendation =  "You should loose $size_diff " ;
}elseif($size_diff == 0){
    $size_recommendation =  "Your weight is Great " ;
}else{
    $size_recommendation =  "You should weight $size_diff " ;
}

echo
"
Name: $name </br> 
Age:$age </br> 
Tall:$tall </br> 
weight:$weight </br> 
size Recommendation : $size_recommendation </br>
is_married:$is_married </br>
Languages: $lang_str </br>
Favorites:  $fav_str
";

