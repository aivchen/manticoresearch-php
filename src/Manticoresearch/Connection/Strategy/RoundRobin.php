<?php

namespace Manticoresearch\Connection\Strategy;

use Manticoresearch\Connection;

/**
 * Class RoundRobin.
 */
class RoundRobin implements SelectorInterface
{
    /**
     * @var int
     */
    private $current = 0;

    public function getConnection(array $connections): Connection
    {
        $connection = $connections[$this->current % count($connections)];
        ++$this->current;

        return $connection;
    }
}
