<?php

namespace payoneer\request;

/**
 * Class PayeeRequest
 * @package payoneer\request
 */
class PayeeRequest extends RequestAbstract implements RequestInterface
{
    
    /**
     * @param $payeeId
     */
    function __construct($payeeId) {
        $this->parameters['p4'] = $payeeId;
    }
}