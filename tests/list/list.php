<?php

$info = array('coffee', 'brown', 'caffeine');

// Listing all the variables
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.\n";

// Listing some of them
list($drink, , $power) = $info;
echo "$drink has $power.\n";

// TODO: unncoment after resolve https://github.com/glayzzle/php-parser/issues/137
// Or let's skip to only the third one
// list( , , $power) = $info;
// echo "I need $power!\n";

// list() doesn't work with strings
list($bar) = "abcde";
var_dump($bar); // NULL

while (list($id, $name, $salary) = $result->fetch(PDO::FETCH_NUM)) {}

list($a, list($b, $c)) = array(1, array(2, 3));

$info = array('coffee', 'brown', 'caffeine');
list($a[0], $a[1], $a[2]) = $info;

list("id" => $id1, "name" => $name1) = $data[0];
list("veryVeryVeryVeryVeryLongKey" => $veryVeryVeryVeryVeryLongValue, "veryVeryVeryVeryVeryLongKey" => $veryVeryVeryVeryVeryLongValue) = $data[0];
list("veryVeryVeryVeryVeryVeryVeryVeryVeryLongKey" => $veryVeryVeryVeryVeryVeryVeryVeryVeryLongValue, "veryVeryVeryVeryVeryVeryVeryVeryVeryLongKey" => $veryVeryVeryVeryVeryVeryVeryVeryVeryLongValue) = $data[0];

foreach ($data as list("id" => $id, "name" => $name)) {
    // logic here with $id and $name
}

foreach ($data as list("veryVeryVeryVeryVeryLongKey" => $veryVeryVeryVeryVeryLongValue, "veryVeryVeryVeryVeryLongKey" => $veryVeryVeryVeryVeryLongValue)) {
    // logic here with $id and $name
}

foreach ($data as list("veryVeryVeryVeryVeryVeryVeryVeryVeryLongKey" => $veryVeryVeryVeryVeryVeryVeryVeryVeryLongValue, "veryVeryVeryVeryVeryVeryVeryVeryVeryLongKey" => $veryVeryVeryVeryVeryVeryVeryVeryVeryLongValue)) {
    // logic here with $id and $name
}

list(, $b) = ['a', 'b'];
list(, , $c) = ['a', 'b', 'c'];
