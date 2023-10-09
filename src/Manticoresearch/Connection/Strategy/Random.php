<?php

namespace Manticoresearch\Connection\Strategy;

use Manticoresearch\Connection;

/**
 * Class Random.
 */
class Random implements SelectorInterface
{
    public function getConnection(array $connections): Connection
    {
        shuffle($connections);

        return $connections[0];
    }
}
