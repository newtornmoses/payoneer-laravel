<?php

namespace payoneer\LaravelPayoneer\Contracts;

/**
 * Interface RequestInterface
 * @package payoneer\LaravelPayoneer\Contracts
 */
interface RequestInterface {

    /**
     * @return array
     */
    public function getParameterArray();
} 