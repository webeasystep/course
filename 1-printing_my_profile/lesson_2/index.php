<?php
// old issue
$name = "fakhr";
$age = 25;
$is_married = true ;
$tall = 178.5;
$languages_1 = "PHP";
$languages_2 = "MYSQl";
$languages_3 = "JavaScript";
$languages_4 = "Kotlin";

### example 1 (print)
$languages[0]="PHP";
$languages[1]="Mysql";
$languages[2]="Javascript";
$languages[3]="Kotlin";

$languages = array('PHP', 'Mysql', 'Javascript', 'Kotlin');

/*echo "Name: $name age:$age tall:$tall languages: $languages[0]".'-'."$languages[1]".'-'."$languages[2]".'-'."$languages[3]" ;*/

### example 2 (overwrite)

$languages[3]= "Java";
/*echo "Name: $name age:$age tall:$tall languages: $languages[0].'-'.$languages[1].'-'.$languages[2].'-'.$languages[3]" ;*/


### example 4 (print associative)
$favorites = array('color' =>"white", 'drink' =>"orange juice");

/*echo "Name: $name age:$age tall:$tall languages: $languages[0].'-'.$languages[1].'-'.$languages[2].'-'.$languages[3]".
'-'.$favorites["color"].'-'.$favorites["drink"];*/

### example 5 (foreach loop print)

 /*   foreach ($languages as $language) {
        echo $language;
    }*/


### example 6 (foreach loop print enhance with key value)

/*foreach ($languages as $language) {
    echo $language ."-";
}

foreach ($favorites as $key =>$value) {
    echo "(".$key."=".$value.") -";
}*/

### example 7 (foreach loop for concat )
$fav_str = "";
$lang_str = "";
foreach ($languages as $language) {
    $lang_str = $language ."-";
}

foreach ($favorites as $key =>$value) {
    $fav_str .= "(".$key."=".$value.") -";
}

echo "Name: $name </br> Age:$age </br> Tall:$tall </br> is_married:$is_married </br> Languages: $lang_str </br>  Favorites:  $fav_str";



