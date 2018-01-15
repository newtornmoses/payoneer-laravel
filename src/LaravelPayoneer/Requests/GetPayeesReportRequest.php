<?php

namespace payoneer\LaravelPayoneer\Requests;

use payoneer\LaravelPayoneer\API\PartnerDetails;
use payoneer\LaravelPayoneer\API\PayeeDetails;
use payoneer\LaravelPayoneer\Contracts\RequestInterface;
use payoneer\LaravelPayoneer\Util\Array2XML;

/**
 * Class BasicRequest
 * @package payoneer\LaravelPayoneer\Requests
 */
class GetPayeesReportRequest extends BaseRequest implements RequestInterface
{
    // Only XML reports are supported (API v3.5.0.0)
    const REPORT_TYPE_XML = 0;

    /**
     * @param $startDate
     * @param $endDate
     */
    public function __construct($startDate, $endDate)
    {
        $this->parameters['p5'] = $startDate;
        $this->parameters['p6'] = $endDate;
        $this->parameters['p4'] = self::REPORT_TYPE_XML;
    }
}