<?php

namespace payoneer\request;

/**
 * Class PerformPayoutPaymentRequest
 * @package payoneer\request
 */
class PerformPayoutPaymentRequest extends RequestAbstract implements RequestInterface
{
    
    /**
     * @param      $programId
     * @param      $paymentId
     * @param      $payeeId
     * @param      $amount
     * @param      $description
     * @param      $paymentDate
     * @param null $groupId
     * @param null $currency
     */
    function __construct($programId, $paymentId, $payeeId, $amount, $description, $paymentDate = null, $groupId = null, $currency = null) {
    	if(!$paymentDate)
        	$paymentDate = Date('m/d/Y h:i:s', time());
        
        $this->parameters['p4'] = $programId;
        $this->parameters['p5'] = $paymentId;
        $this->parameters['p6'] = $payeeId;
        $this->parameters['p7'] = $amount;
        $this->parameters['p8'] = $description;
        $this->parameters['p9'] = $paymentDate;
        $this->parameters['p11'] = $groupId;
        $this->parameters['Currency'] = $currency;
    }
}
