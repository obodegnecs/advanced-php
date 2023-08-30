<?php

/**
 * Generates random numbers in to an array
 *
 * @param int $num number of random numbers
 *
 * @return array
 */
function generateRandomNumbers(int $num): array
{
    $array = [];

    for ($i = 0; $i < $num; $i++) {
        $array[$i] = rand(0, 999);
    }

    return $array;
}

/**
 * Iterates over an array or iterator with foreach
 *
 * @param mixed $arg array or iterator
 *
 * @return void
 */
function printWithForeach(mixed $arg): void
{
    echo "Iterating over an " .  gettype($arg) . " with foreach:\n";

    foreach ($arg as $item) {
        echo $item . "\n";
    }

    if ($arg instanceof Iterator) {
        $arg->rewind();
    }
}

/**
 * Iterates over an iterator with Iterator methods
 *
 * @param Iterator $iterator e.g. SortedArrayIterator
 *
 * @return void
 */
function printIterator(Iterator $iterator): void
{
    echo "Iterating over an iterator with object methods:\n";

    while ($iterator->valid()) {
        echo $iterator->current() . "\n";
        $iterator->next();
    }

    $iterator->rewind();
}

function randomNumbersWithGenerator(int $num): Generator
{
    for ($i = 0; $i < $num; $i++) {
        yield rand(0, 999);
    }
}

function printMemoryUsage(): void
{
    echo "Memory usage: " . number_format(memory_get_usage()/1024, 2, ".", " ") . " KB\n";
}
