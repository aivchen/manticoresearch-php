<?php

namespace Manticoresearch\Endpoints;

use Manticoresearch\Request;

/**
 * Class Update.
 */
class Update extends Request
{
    /**
     * @return mixed|string
     */
    public function getPath()
    {
        return '/json/update';
    }

    /**
     * @return mixed|string
     */
    public function getMethod()
    {
        return 'POST';
    }
}
