<?php
//array-----------------------------------------------------------------------------------------------
//task 1
$colors = array('white', 'green', 'red');
echo "<ul>";
foreach ($colors as $color) {
    echo "<li>$color</li>";
}
echo "</ul>";

echo "<br>";
echo "<br>";
echo "<hr>";

//task2
$cities = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);

// Sort the array by capital names
asort($cities);

foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital\n";
}

echo "<br>";
echo "<br>";
echo "<hr>";

//task3
$color = array(4 => 'white', 6 => 'green', 11 => 'red');
echo reset($color);

echo "<br>";
echo "<br>";
echo "<hr>";

//task4
$array = array(1, 2, 3, 4, 5);
$position = 4;
$newItem = '$';

array_splice($array, $position - 1, 0, $newItem);

print_r($array);
echo "<br>";
echo "<br>";
echo "<hr>";

//task5
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// Sort the array by key in ascending order
ksort($fruits);

foreach ($fruits as $key => $value) {
    echo "$key = $value <br>";
}
echo "<br>";
echo "<br>";
echo "<hr>";

//task6
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

// Calculate the average temperature
$average_temperature = array_sum($temperatures) / count($temperatures);
echo "Average Temperature is: " . round($average_temperature, 1) . "<br>";

// Sort the temperatures in ascending order
sort($temperatures);

// Get the five lowest temperatures
$lowest_temperatures = array_slice($temperatures, 0, 5);
echo "List of five lowest temperatures: " . implode(", ", $lowest_temperatures) . "<br>";

// Get the five highest temperatures
$highest_temperatures = array_slice($temperatures, -5);
echo "List of five highest temperatures: " . implode(", ", $highest_temperatures) . "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";


//task7
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$result = array_merge($array1, $array2);

print_r($result);
echo "<br>";
echo "<br>";
echo "<hr>";

//task8

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo "<br>";
echo "<br>";
echo "<hr>";
echo "<hr>";

//function-----------------------------------------------------------------------------------------
//task1
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

$input = 3;

if (isPrime($input)) {
    echo "$input is a prime number";
} else {
    echo "$input is not a prime number";
}
echo "<br>";
echo "<br>";
echo "<hr>";

//task2
function reverseString($str) {
    return strrev($str);
}

$input = "remove";
echo reverseString($input);
echo "<br>";
echo "<br>";
echo "<hr>";

//task3
function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$x = 12;
$y = 10;

swap($x, $y);

echo "x = $x<br>";
echo "y = $y<br>";
echo "<br>";
echo "<br>";
echo "<hr>";


//task4

function isArmstrongNumber($number) {
    $sum = 0;
    $temp = $number;
    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += $digit * $digit * $digit;
        $temp = (int)$temp / 10;
    }
    return $sum == $number;
}

$input = 407;

if (isArmstrongNumber($input)) {
    echo "$input is an Armstrong Number";
} else {
    echo "$input is not an Armstrong Number";
}

echo "<br>";
echo "<br>";
echo "<hr>";

//task5
function isPalindrome($str) {
    // Remove non-alphanumeric characters and convert to lowercase
    $str = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $str));
    
    // Check if the string is equal to its reverse
    return $str == strrev($str);
}

$input = "Eva, can I see bees in a cave?";

if (isPalindrome($input)) {
    echo "Yes, it is a palindrome";
} else {
    echo "No, it is not a palindrome";
}

echo "<br>";
echo "<br>";
echo "<hr>";

//task6
function removeDuplicates($array) {
    return array_unique($array);
}

$array1 = array(2, 4, 7, 4, 8, 4);
$array1 = removeDuplicates($array1);

print_r($array1);

echo "<br>";
echo "<br>";
echo "<hr>";
echo "<hr>";
 

//Logical Statements and Operators---------------------------------------------------------------

//task1







?>