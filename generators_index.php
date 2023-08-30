<?php
require "utils.php";

echo "Generating random numbers into an array:\n";

$i = 1;
foreach (generateRandomNumbers(1000000) as $nums) {
    if ($i % 100000 === 0) {
        printMemoryUsage();
    }
    $i++;
}
echo "\n";

echo "Generating random numbers with a generator:\n";

$i = 1;
foreach (randomNumbersWithGenerator(1000000) as $nums) {
    if ($i % 100000 === 0) {
        printMemoryUsage();
    }
    $i++;
}
