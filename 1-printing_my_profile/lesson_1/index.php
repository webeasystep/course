<?php


// echo / print data
echo "my name is ahmed fakhr el din";
print "my name is ahmed fakhr el din";

                    // store data with short name and prevent duplication

// use constant
//define("myname", "my name is ahmed fakhr el din");
//echo  myname ;
//echo myname = "my name is ahmed";
            /*
                Rules for PHP variables:
                A variable starts with the $ sign, followed by the name of the variable
                A variable name must start with a letter or the underscore character
                A variable name cannot start with a number
                A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
                Variable names are case-sensitive ($age and $AGE are two different variables)
                Variables can, but do not need, to be declared before assignment.
                Variables used before they are assigned have default values.
            */

$name = "fakhr"; /// declare assign
$age = NULL; // default value
$is_married = true ;
$age = 30; //overwrite
$tall = 178.5;
$languages_1 = "PHP";
$languages_2 = "MYSQl";
$languages_3 = "JavaScript";
$languages_4 = "Kotlin";
echo "Name: $name age:$age tall:$tall languages: $languages_1 - $languages_2 - $languages_3 - $languages_4" ;
//echo 'name $name';
echo 'name'. $name;
///////////////////////////////////////////////////////////


