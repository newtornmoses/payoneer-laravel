<?php

namespace payoneer\request;

/**
 * Class GetPaymentStatusRequest
 * @package payoneer\request
 */
class GetPaymentStatusRequest extends RequestAbstract implements RequestInterface
{
    
    /**
     * @param $payeeId
     * @param $paymentId
     */
    function __construct($payeeId, $paymentId) {
        $this->parameters['p4'] = $payeeId;
        $this->parameters['p5'] = $paymentId;
    }
}
