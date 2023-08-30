<?php
use IteratorExample\SortedArrayIterator;

require "vendor/autoload.php";
require "utils.php";

echo "Testing ARRAY iteration:\n";
printWithForeach(generateRandomNumbers(5));

$sai = new SortedArrayIterator(generateRandomNumbers(5));
echo "Testing ITERATOR iteration:\n";
printWithForeach($sai);

printIterator($sai);
