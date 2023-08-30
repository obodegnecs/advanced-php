<?php

use ExceptionExample\InvalidNumberException;
use IteratorExample\SortedArrayIterator;

require "vendor/autoload.php";
require "utils.php";

/**
 * Prints array if it contains positive integer only
 *
 * @param array $array an array
 *
 * @return void
 */
function printArraySorted(array $array)
{
    echo "Printing sorted array:\n";

    try {
        printWithForeach(new SortedArrayIterator($array));
    } catch (InvalidNumberException $invalidNumberException) {
        echo "Unable to print out array: " . $invalidNumberException->getMessage();
        echo "\n";
    } finally {
        echo "Finished printing\n\n";
    }
}

$array1 = [456, 123, true];
$array2 = [500, 123, "I am a string!", 678];
$array3 = [300, 123.67];
$array4 = [65, 34, 78];

echo "Testing EXCEPTION handling:\n";

printArraySorted($array1);
printArraySorted($array2);
printArraySorted($array3);
printArraySorted($array4);
