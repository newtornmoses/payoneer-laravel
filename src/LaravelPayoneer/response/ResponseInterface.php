<?php

namespace payoneer\response;

/**
 * Interface ResponseInterface
 * @package payoneer
 */
interface ResponseInterface {
    
    /**
     * @return string
     */
    public function getCode();

    /**
     * @return string
     */
    public function getData();
}