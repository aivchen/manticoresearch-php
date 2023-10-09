<?php

namespace Manticoresearch\Endpoints;

use Manticoresearch\Request;

/**
 * Class Delete.
 */
class Delete extends Request
{
    /**
     * @return mixed|string
     */
    public function getPath()
    {
        return '/json/delete';
    }

    /**
     * @return mixed|string
     */
    public function getMethod()
    {
        return 'POST';
    }
}
