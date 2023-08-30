<?php
namespace IteratorExample;

use ExceptionExample\InvalidNumberException;
use Iterator;

/**
 * My iterator class
 *
 * @category Iterator_Class
 * @package  Iterator
 * @author   Csenge Dobo <csengedobo@epam.com>
 * @license  PHP License 8.1.12
 * @link     https://github.com/obodegnecs/advanced-php
 */
class SortedArrayIterator implements Iterator
{
    /**
     * The array to iterate over
     *
     * @var array
     */
    private array $array;
    private int $index = 0;

    /**
     * Initialize array elements in ascending order
     *
     * @param array $array An array
     */
    public function __construct(array $array)
    {
        foreach ($array as $item) {
            if (!is_int($item) || $item < 0) {
                throw new InvalidNumberException($item);
            }
        }

        $this->array = $array;
        sort($this->array);
    }

    /**
     * Return the current value
     *
     * @return mixed Current value
     */
    public function current(): mixed
    {
        return $this->array[$this->key()];
    }

    /**
     * Increases the index
     *
     * @return void
     */
    public function next(): void
    {
        $this->index++;
    }

    /**
     * Return the current key
     *
     * @return int Current key
     */
    public function key(): int
    {
        return $this->index;
    }

    /**
     * Validate the current index
     *
     * @return bool Is the current index valid
     */
    public function valid(): bool
    {
        return isset($this->array[$this->key()]);
    }

    /**
     * Reset the index
     *
     * @return void
     */
    public function rewind(): void
    {
        $this->index = 0;
    }
}