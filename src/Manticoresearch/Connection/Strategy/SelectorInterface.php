<?php

namespace Manticoresearch\Connection\Strategy;

use Manticoresearch\Connection;

/**
 * Interface SelectorInterface.
 */
interface SelectorInterface
{
    public function getConnection(array $connections): Connection;
}
