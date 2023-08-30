<?php
namespace IteratorExample;

use JetBrains\PhpStorm\Pure;

/**
 * My iterator class
 *
 * @category Iterator_Class
 * @package  Iterator
 * @author   Csenge Dobo <csenge_dobo@epam.com>
 * @license  PHP License 8.1.12
 * @link     https://github.com/obodegnecs/advanced-php
 */
class SortedArrayIterator implements \Iterator
{
    /**
     * The array to iterate over
     *
     * @var array
     */
    private array $_array;
    private int $_index = 0;

    /**
     * Initialize array elements in ascending order
     *
     * @param array $array An array
     */
    public function __construct(array $array)
    {
        $this->_array = $array;
        sort($this->_array);
    }

    /**
     * Return the current value
     *
     * @return mixed Current value
     */
    #[Pure] public function current(): mixed
    {
        return $this->_array[$this->key()];
    }

    /**
     * Increases the index
     *
     * @return void
     */
    public function next(): void
    {
        $this->_index++;
    }

    /**
     * Return the current key
     *
     * @return int Current key
     */
    public function key(): int
    {
        return $this->_index;
    }

    /**
     * Validate the current index
     *
     * @return bool Is the current index valid
     */
    #[Pure] public function valid(): bool
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
        $this->_index = 0;
    }
}