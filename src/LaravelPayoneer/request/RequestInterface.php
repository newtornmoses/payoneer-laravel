<?php

namespace payoneer\request;

/**
 * Interface RequestInterface
 * @package payoneer
 */
interface RequestInterface {
    
    /**
     * @return array
     */
    public function getParameterArray();
}