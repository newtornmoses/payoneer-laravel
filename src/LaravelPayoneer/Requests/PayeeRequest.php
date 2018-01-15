<?php

namespace payoneer\LaravelPayoneer\Requests;

use payoneer\LaravelPayoneer\Contracts\RequestInterface;

/**
 * Class BasicRequest
 * @package payoneer\LaravelPayoneer\Requests
 */
class PayeeRequest extends BaseRequest implements RequestInterface
{
    /**
     * @param $payeeId
     */
    public function __construct($payeeId)
    {
        $this->parameters['p4'] = $payeeId;
    }
}