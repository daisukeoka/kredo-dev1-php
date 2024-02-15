<!-- dev1-php/basics.php -->

<h1>Basics</h1>
<?php
    echo "Hello World!";
    echo "<h1>Headline 1</h1>";
    echo "Tim","Mary";

    // concatenate = > to join
    echo "John"."Dave";
?>

<hr>
<h1>Variables</h1>
<?php
    $first_name = "John";
    $last_name = "Smith";
    $age = 21;

    echo "<p>My name is $first_name $last_name. I am $age years old.</p>";
?>

<hr>
<h1>Data Types</h1>
<?php
    $str = "i am a string.";
    $int = 50;
    $float_or_double = 13.02;
    $bool = TRUE;

    var_dump($str);
    echo '<br>';
    var_dump($int);
    echo '<br>';
    var_dump($float_or_double);
    echo '<br>';
    var_dump($bool);
?>

<hr>
<h1>Arithmetic Operators</h1>
<?php
    $num1 = 35;
    $num2 = 11.01;
    $num3 = 157;
    $num4 = 7.03;

    $sum = $num1 + $num2; //Addition
    $difference = $num2 - $num3; //Subtraction
    $product = $num3 * $num4; //Multiplication
    $quotient = $num3 / $num1; //Division
    $remainder = $num3 % $num1; //Modulo

    echo "<p>$num1 + $num2 = $sum</p>";
    echo "<p>$num2 - $num3 = $difference</p>";
    echo "<p>$num3 * $num4 = $product</p>";
    echo "<p>$num3 / $num1 = $quotient</p>";
    echo "<p>$num3 % $num1 = $remainder</p>";
?>

<hr>
<h1>Assignment Operator</h1>
<?php
    $num1 = 15;
    $num2 = 9.07;
    $num3 = 3.01;
    $num4 = 47;
    $num5 = 49;

    echo "<p>INITIAL VALUE</p>";
    echo "<p>num1 = $num1</p>";
    echo "<p>num2 = $num2</p>";
    echo "<p>num3 = $num3</p>";
    echo "<p>num4 = $num4</p>";
    echo "<p>num5 = $num5</p>";

    $num6 = 11;

    $num1 += $num6; //$num1 = $num1 + $num6
    $num2 -= $num6; //$num2 = $num2 + $num6
    $num3 *= $num6; //$num3 = $num3 + $num6
    $num4 /= $num6; //$num4 = $num4 + $num6
    $num5 %= $num6; //$num5 = $num5 + $num6

    echo "<p>FINAL VALUE</p>";
    echo "<p>num1 = $num1</p>";
    echo "<p>num2 = $num2</p>";
    echo "<p>num3 = $num3</p>";
    echo "<p>num4 = $num4</p>";
    echo "<p>num5 = $num5</p>";
?>

<hr>
<h1>Comparison Operator</h1>
<?php
    $num1 = 5; // int
    $num2 = 5.0; // float/double
    $num3 = 7.11; 
    $num4 = 18.6; 

    $equal = ($num1 == $num2); //TRUE
    $identical = ($num1 === $num2); //FALSE
    $not_equal1 = ($num1 != $num3); //TRUE
    $not_equal2 = ($num2 <> $num4); //TRUE
    $greater_than = ($num2 > $num3); //FALSE
    $less_than = ($num3 < $num4); //TRUE
    $greater_than_or_equal_to = ($num1 >= $num2); //TRUE
    $less_than_or_equal_to = ($num1 <= $num2); //TRUE

    echo "<p>$num1 == $num2.0 => $equal</p>";
    echo "<p>$num1 === $num2.0 => $identical</p>";
    echo "<p>$num1 != $num3 => $not_equal1</p>";
    echo "<p>$num2.0 <> $num4 => $not_equal2</p>";
    echo "<p>$num2.0 > $num3 => $greater_than</p>";
    echo "<p>$num3 < $num4 => $less_than</p>";
    echo "<p>$num1 >= $num2.0 => $greater_than_or_equal_to</p>";
    echo "<p>$num1 <= $num2.0 => $less_than_or_equal_to</p>";
?>

<hr>
<h1>Increment(++)</h1>
<?php
    $x = 32;
    echo "<p>Initial Value: $x</p>";
    echo "<p>Pre-increment: ".++$x."</p>";
    echo "<p>Post-increment: ".$x++."</p>";
    echo "<p>Final Value: $x</p>";
?>

<hr>
<h1>Decrement(--)</h1>
<?php
    $x = 25;
    echo "<p>Initial Value: $x</p>";
    echo "<p>Pre-decrement: ".--$x."</p>";
    echo "<p>Post-decrement: ".$x--."</p>";
    echo "<p>Final Value: $x</p>";
?>

<hr>
<h1>Logical Operator</h1>
<?php
    $and1 = TRUE && TRUE; //TRUE
    $and2 = TRUE && FALSE; //FALSE
    $and3 = FALSE && FALSE; //FALSE
    
    $or1 = TRUE && TRUE; //TRUE
    $or2 = TRUE && FALSE; //TRUE
    $or3 = FALSE && FALSE; //FALSE
    
    $not1 = !TRUE ; //FALSE
    $not2 = !FALSE; //TRUE

    echo "<p>TRUE && TRUE = $and1</p>";
    echo "<p>TRUE && FALSE = $and2</p>";
    echo "<p>FALSE && FALSE = $and3</p>";

    echo "<p>TRUE || TRUE = $or1</p>";
    echo "<p>TRUE || FALSE = $or2</p>";
    echo "<p>FALSE || FALSE = $or3</p>";

    echo "<p>!TRUE = $not1</p>";
    echo "<p>!FALSE = $not2</p>";
?>
