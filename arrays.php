<h1>Indexed Array</h1>
<?php

    // Method 1 - []
    $fruits = ["Apple", "Banana", "Orange"];

    // Method 2 - array()
    $vegetables = array("Cabbage", "Broccoli", "Lettuce");

    // print_r() => displays the array in a human readable format
    print_r($fruits);
    echo "<br>";
    print_r($vegetables);
    echo "<br>";

    // assigning a value to an index
    // $array_name[index] = value
    $colors[0] = "red";
    $colors[1] = "green";
    $colors[2] = "blue";
    $colors[3] = "pink";
    $colors[4] = "yellow";

    // displaying individual values from an array
    // echo $array_name[index];
    echo $fruits[0]."<br>"; //Apple
    echo $vegetables[1]."<br>"; //Broccoli
    echo $colors[2]."<br>"; //blue

    // foreach loop
    foreach ($fruits as $x) {
        echo "<p>$x</p>";
    }

    // count() => return how many elements/values there are in the array
    echo "fruits: ".count($fruits)."<br>";
    echo "vegetables: ".count($vegetables)."<br>";
    echo "colors: ".count($colors)."<br>";
?>

<hr>
<h1>Associative Array</h1>
<?php
    // method 1 - []
    $person = ["name"=>"Sakura", "age"=>18, "address"=>"Japan"];

    // method 2 - array()
    $book = array("title"=>"The Adventures of Tom Sawyer", "author"=>"Mark Twain", "Price"=>10);

    // method 3
    // Assigning values to each key
    // $array_name[key] =value;
    $ages["Tom"] = 16;
    $ages["Jerry"] = 22;
    $ages["Ethan"] = 11;

    // displaying values
    // echo $array_name[key];
    echo $person["name"],"<br>"; //Sakura
    echo $book["title"],"<br>"; //The Adventures of Tom Sawyer
    echo $ages["Jerry"],"<br>"; //22

    // foreach loop
    foreach ($person as $key => $value) {
        echo "<p>key: $key === value: $value</p>";
    }
?>