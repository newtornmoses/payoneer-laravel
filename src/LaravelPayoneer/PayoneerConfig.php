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

    public $URL;

    public $apiUser;

    public $apiPassword;

    public $partnerID;

    public $sandbox = true;
}