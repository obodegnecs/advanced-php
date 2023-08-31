<?php
use IteratorExample\SortedArrayIterator;

require "vendor/autoload.php";
require "utils.php";

echo "Testing array FILTER:\n";

$array = [123, "I am a string!", false, 42, 56.52, 101, 99];

printWithForeach((SortedArrayIterator::withPositiveIntegersOnly($array)));
