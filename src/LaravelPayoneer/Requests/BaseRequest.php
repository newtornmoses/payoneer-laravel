<?php

namespace payoneer\LaravelPayoneer\Requests;

/**
 * Class BaseRequest
 * @package payoneer\LaravelPayoneer\Requests
 */
abstract class BaseRequest
{
    /**
     * @var
     */
    public $parameters = [];

    /**
     * @return array
     */
    public function getParameterArray()
    {
        return $this->parameters;
    }
}