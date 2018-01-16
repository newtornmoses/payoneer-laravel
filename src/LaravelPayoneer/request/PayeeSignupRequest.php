<?php

namespace payoneer\request;

use payoneer\ApiAbstract;

/**
 * Class PayeeSignupRequest
 * @package payoneer\request
 */
class PayeeSignupRequest extends RequestAbstract implements RequestInterface {
    /**
     * @param string $payeeId
     * @param        $sessionId
     * @param        $redirectUrl
     * @param        $redirectTime
     * @param        $testAccount
     * @param        $xmlResponse
     * @param array  $payoutMethods
     * @param string $achMode
     */
    function __construct(
        $payeeId,
        $redirectUrl,
        $sessionId = '',
        $redirectTime = '10',
        $testAccount = 'false', //Auto approve account or not
        $xmlResponse = 'true',
        array $payoutMethods = array(
            ApiAbstract::PAYOUT_CARD,
            ApiAbstract::PAYOUT_ACH,
            // TODO Figure out why enabling the two options below causes an 'Unauthorized action' error.
           // ApiAbstract::PAYOUT_CHECK,
           // ApiAbstract::PAYOUT_DEPOSIT
        ),
        $achMode = ApiAbstract::ACH_MODE_REGULAR
    ) {
        $this->parameters['p4']  = $payeeId;
        $this->parameters['p5']  = $sessionId;
        $this->parameters['p6']  = $redirectUrl;
        $this->parameters['p8']  = $redirectTime;
        $this->parameters['p9']  = $testAccount;
        $this->parameters['p10'] = $xmlResponse;
        $this->parameters['p11'] = implode(',', $payoutMethods);
        $this->parameters['p12'] = $achMode;
    }
}