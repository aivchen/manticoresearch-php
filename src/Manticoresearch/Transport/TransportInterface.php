<?php

namespace Manticoresearch\Transport;

use Manticoresearch\Connection;
use Manticoresearch\Request;
use Manticoresearch\Transport;

/**
 * Interface TransportInterface.
 */
interface TransportInterface
{
    /**
     * @param array $params
     *
     * @return mixed
     */
    public function execute(Request $request, $params = []);

    /**
     * @return mixed
     */
    public function getConnection();

    public function setConnection(Connection $connection): Transport;
}
