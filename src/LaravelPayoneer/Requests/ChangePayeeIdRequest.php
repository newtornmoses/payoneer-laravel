<?php

namespace payoneer\LaravelPayoneer\Requests;

use payoneer\LaravelPayoneer\Contracts\RequestInterface;

/**
 * Class BasicRequest
 * @package payoneer\LaravelPayoneer\Requests
 */
class ChangePayeeIdRequest extends BaseRequest implements RequestInterface
{
    /**
     * @param $oldId
     * @param $newId
     */
    public function __construct($oldId, $newId)
    {
        $this->parameters['p4'] = $oldId;
        $this->parameters['p5'] = $newId;
    }
}