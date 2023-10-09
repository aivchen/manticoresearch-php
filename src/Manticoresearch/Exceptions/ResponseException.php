<?php

namespace Manticoresearch\Exceptions;

use Manticoresearch\Request;
use Manticoresearch\Response;

/**
 * Class ResponseException.
 */
class ResponseException extends \RuntimeException implements ExceptionInterface
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * @var Response
     */
    protected $response;

    /**
     * ResponseException constructor.
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;

        parent::__construct($response->getError());
    }

    public function getRequest(): Request
    {
        return $this->request;
    }

    public function getResponse(): Response
    {
        return $this->response;
    }
}
