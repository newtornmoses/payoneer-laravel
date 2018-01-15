<?php

namespace payoneer\LaravelPayoneer\Requests;

use payoneer\LaravelPayoneer\API\PartnerDetails;
use payoneer\LaravelPayoneer\API\PayeeDetails;
use payoneer\LaravelPayoneer\Contracts\RequestInterface;
use payoneer\LaravelPayoneer\Util\Array2XML;

/**
 * Class PayeeSignupAutoPopulationRequest
 * @package payoneer\LaravelPayoneer\Requests
 */
class PayeeSignupAutoPopulationRequest extends BaseRequest implements RequestInterface
{
    /**
     * @var PartnerDetails
     */
    private $partnerDetails;
    /**
     * @var PayeeDetails
     */
    private $payeeDetails;

    /**
     * @param PartnerDetails $partnerDetails
     * @param PayeeDetails $payeeDetails
     */
    public function __construct(
        PartnerDetails $partnerDetails,
        PayeeDetails $payeeDetails
    )
    {
        $this->partnerDetails = $partnerDetails;
        $this->payeeDetails = $payeeDetails;
        $this->parameters['xml'] = $this->buildXML();
    }

    /**
     * @return string
     */
    private function buildXML()
    {
        $details = (array)$this->partnerDetails;
        $personalDetails = (array)$this->payeeDetails;

        $xmlArray = [
            'Details' => $details,
            'PersonalDetails' => $personalDetails,
        ];

        $xml = Array2XML::createXML('PayoneerDetails', $xmlArray);

        return $xml->saveXML();
    }
}