<?php
namespace ExceptionExample;

use InvalidArgumentException;
use Throwable;

/**
 * My exception class
 *
 * @category Exception_Class
 * @package  InvalidArgumentException
 * @author   Csenge Dobo <csengedobo@epam.com>
 * @license  PHP License 8.1.12
 * @link     https://github.com/obodegnecs/advanced-php
 */
class InvalidNumberException extends InvalidArgumentException
{
    /**
     * InvalidArgumentException override
     *
     * @param mixed          $invalidNumber not a positive integer
     * @param Throwable|null $previous      Throwable default null
     */
    public function __construct(mixed $invalidNumber, Throwable $previous = null)
    {
        $msg = "Expected a valid number, but got: '" . $invalidNumber . "'!";
        parent::__construct($msg, 0, $previous);
    }
}
