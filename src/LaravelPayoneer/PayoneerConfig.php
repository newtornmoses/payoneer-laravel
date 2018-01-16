<?php

namespace payoneer;

/**
 * Class PayoneerConfig
 * @package payoneer
 */
class PayoneerConfig
{
    const SANDBOX_API_URL = 'https://api.sandbox.payoneer.com/Payouts/HttpApi/API.aspx';
    const PRODUCTION_API_URL = 'https://api.payoneer.com/payouts/HttpAPI/API.aspx';

    /**
     * API endpoint url
     */
    public $apiEndpoint;

    /**
     * API partner user
     */
    public $apiUser;

    /**
     * API partner password
     */
    public $apiPassword;

    /**
     * API partner id
     */
    public $partnerId;

    /**
     * API mode
     */
    public $sandbox = true;

    /**
     * @param $apiEndpoint
     * @param $apiUser
     * @param $apiPassword
     * @param $partnerId
     */
    function __construct($apiUser, $apiPassword, $partnerId, $sandbox = true)
    {
        $this->sandbox = $sandbox;
        if ($sandbox == true) {
            $this->apiEndpoint = static::SANDBOX_API_URL;
        } else {
            $this->apiEndpoint = static::PRODUCTION_API_URL;
        }

        $this->apiUser = $apiUser;
        $this->apiPassword = $apiPassword;
        $this->partnerId = $partnerId;
    }

    /**
     * Return api parameters (p1, p2, p3)
     * @return array
     */
    public function getParameterArray()
    {
        return ['p1' => $this->apiUser, 'p2' => $this->apiPassword, 'p3' => $this->partnerId];
    }
}
