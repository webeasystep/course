<?php
/**
 * Created by PhpStorm.
 * User: Ahmed.Fakhr
 * Date: 2019-06-25
 * Time: 6:10 PM
 */

/*
 * Data types
    Integers − are whole numbers, without a decimal point, like 4195.
    Doubles − are floating-point numbers, like 3.14159 or 49.1.
    Booleans − have only two possible values either true or false.
    NULL − is a special type that only has one value: NULL.
    Strings − are sequences of characters, like 'PHP supports string operations.'
    Arrays − are named and indexed collections of other values.
*/
// cast


##example 3 Arithmetic Operators
$x = 10;
$y = 5;
echo($x + $y); // 0utputs: 14
echo($x - $y); // 0utputs: 6
echo($x * $y); // 0utputs: 40
echo($x / $y); // 0utputs: 2.5
echo($x % $y); // 0utputs: 2

#example 4 Comparison Operators
$x = 25;
$y = 35;
$z = "25";
var_dump($x == $z);  // Outputs: boolean true
var_dump($x === $z); // Outputs: boolean false
var_dump($x != $y);  // Outputs: boolean true
var_dump($x !== $z); // Outputs: boolean true
var_dump($x < $y);   // Outputs: boolean true
var_dump($x > $y);   // Outputs: boolean false
var_dump($x <= $y);  // Outputs: boolean true
var_dump($x >= $y);  // Outputs: boolean false

#example 5  Logical Operators
$a = 42;
$b = 0;
var_dump( $a && $b );
var_dump(  $a and $b);
var_dump(  $a || $b );
var_dump(  $a or $b );

##example 6 Assignment Operators
$x = 10;
echo $x; // Outputs: 10

$x = 20;
$x += 30;
echo $x; // Outputs: 50

$x = 50;
$x -= 20;
echo $x; // Outputs: 30

$x = 5;
$x *= 25;
echo $x; // Outputs: 125

$x = 50;
$x /= 10;
echo $x; // Outputs: 5

$x = 100;
$x %= 15;
echo $x; // Outputs: 10

#
#example 6  Incrementing and Decrementing Operators
$x = 10;
echo ++$x; // Outputs: 11
echo $x;   // Outputs: 11

$x = 10;
echo $x++; // Outputs: 10
echo $x;   // Outputs: 11

$x = 10;
echo --$x; // Outputs: 9
echo $x;   // Outputs: 9

$x = 10;
echo $x--; // Outputs: 10
echo $x;   // Outputs: 9


/* Summary
 *  Indexed array - Associative array
 *  define - set value - change value
 *  foreach loop + concat - print array key with value
 *  print html with $variable mix
 *  white space from a string
*/
/* resources
*/
