<?php

namespace payoneer\request;

/**
 * Class RequestAbstract
 * @package payoneer\request
 */
abstract class RequestAbstract
{
    
    /**
     * @var Parameters
     */
    public $parameters = [];
    
    /**
     * @return array
     */
    public function getParameterArray() {
        return $this->parameters;
    }
}
