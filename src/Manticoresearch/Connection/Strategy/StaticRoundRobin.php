<?php

namespace Manticoresearch\Connection\Strategy;

use Manticoresearch\Connection;

/**
 * Class StaticRoundRobin.
 */
class StaticRoundRobin implements SelectorInterface
{
    /**
     * @var int
     */
    private $current = 0;

    public function getConnection(array $connections): Connection
    {
        if ($connections[$this->current % count($connections)]->isAlive()) {
            return $connections[$this->current];
        }
        ++$this->current;

        return $connections[$this->current % count($connections)];
    }
}
