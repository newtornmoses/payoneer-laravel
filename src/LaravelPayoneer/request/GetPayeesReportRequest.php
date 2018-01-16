<?php

namespace payoneer\request;

/**
 * Class GetPayeesReportRequest
 * @package payoneer\request
 */
class GetPayeesReportRequest extends RequestAbstract implements RequestInterface
{
    
    // Only XML reports are supported (API v3.5.0.0)
    const REPORT_TYPE_XML = 0;
    
    /**
     * @param $startDate
     * @param $endDate
     */
    function __construct($startDate, $endDate) {
        $this->parameters['p5'] = $startDate;
        $this->parameters['p6'] = $endDate;
        $this->parameters['p4'] = self::REPORT_TYPE_XML;
    }
}