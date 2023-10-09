<?php

namespace Manticoresearch\Endpoints;

use Manticoresearch\Request;

/**
 * Class Search.
 */
class Search extends Request
{
    /**
     * @return mixed|string
     */
    public function getPath()
    {
        return '/json/search';
    }

    /**
     * @return mixed|string
     */
    public function getMethod()
    {
        return 'POST';
    }
}
