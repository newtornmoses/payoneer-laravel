<?php

namespace payoneer\LaravelPayoneer\Requests;

use payoneer\LaravelPayoneer\Contracts\RequestInterface;

/**
 * Class GetPaymentStatusRequest
 * @package payoneer\LaravelPayoneer\Requests
 */
class GetPaymentStatusRequest extends BaseRequest implements RequestInterface
{
    /**
     * @param $payeeId
     * @param $paymentId
     */
    public function __construct($payeeId, $paymentId)
    {
        $this->parameters['p4'] = $payeeId;
        $this->parameters['p5'] = $paymentId;
    }
}