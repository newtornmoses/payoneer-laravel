<?php

namespace payoneer\LaravelPayoneer\Requests;

use payoneer\LaravelPayoneer\Contracts\RequestInterface;

/**
 * Class BasicRequest
 * @package payoneer\LaravelPayoneer\Requests
 */
class BasicPaymentRequest extends BaseRequest implements RequestInterface
{
    /**
     * @param $paymentId
     */
    public function __construct($paymentId)
    {
        $this->parameters['p4'] = $paymentId;
    }
}