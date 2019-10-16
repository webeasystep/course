<?php
/**
 * Created by PhpStorm.
 * User: Ahmed.Fakhr
 * Date: 2019-06-25
 * Time: 6:10 PM
 */


##example 1 Arithmetic Operators
    $x = 10;
    $y = 4;
    echo($x + $y); // 0utputs: 14
    echo($x - $y); // 0utputs: 6
    echo($x * $y); // 0utputs: 40
    echo($x / $y); // 0utputs: 2.5
    echo($x % $y); // 0utputs: 2

#example 2 Comparison Operators
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


#example 3  Logical Operators
    $a = 42;
    $b = 0; // = false

    if( $a and $b ) {
        echo "TEST2 : Both  true<br/>";
    }else{
        echo "TEST2 : Either  false<br/>";
    }
    if( $a && $b ) {
        echo "TEST1 : Both  true<br/>";
    }else{
        echo "TEST1 : Either false<br/>";
    }

    if( $a or $b ) {
        echo "TEST4 : Either  true<br/>";
    }else {
        echo "TEST4 : Both  false<br/>";
    }

    if( $a || $b ) {
        echo "TEST3 : Either  true<br/>";
    }else{
        echo "TEST3 : Both  false<br/>";
    }



##example 4 Assignment Operators
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

#example 5  Incrementing and Decrementing Operators
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


