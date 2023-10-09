<?php

namespace Manticoresearch\Exceptions;

use Manticoresearch\Request;

/**
 * Class ConnectionException.
 */
class ConnectionException extends \RuntimeException implements ExceptionInterface
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * ConnectionException constructor.
     *
     * @param string $message
     */
    public function __construct($message = '', Request $request = null)
    {
        $this->request = $request;
        parent::__construct($message);
    }

    /**
     * @return null|Request
     */
    public function getRequest()
    {
        return $this->request;
    }
}
