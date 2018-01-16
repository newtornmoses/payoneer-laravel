<?php

namespace payoneer\request;

/**
 * Class BasicPaymentRequest
 * @package payoneer\request
 */
class BasicPaymentRequest extends RequestAbstract implements RequestInterface
{
    
    /**
     * @param $paymentId
     */
    function __construct($paymentId) {
        $this->parameters['p4'] = $paymentId;
    }
}
