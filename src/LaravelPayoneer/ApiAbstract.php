<?php

namespace payoneer;

use payoneer\request\RequestInterface;
use GuzzleHttp\Client;

/**
* Class ApiAbstract
* @package payoneer
*/
abstract class ApiAbstract
{
	const PAYOUT_CARD = 'PrepaidCard';
	const PAYOUT_DEPOSIT = 'DirectDeposit';
	const PAYOUT_ACH = 'iACH';
	const PAYOUT_CHECK = 'PaperCheck';
	const ACH_MODE_REGULAR = 'Regular';
	const ACH_MODE_EXPRESS = 'Express';

	protected $response;
	protected $config;

	/**
	* @param $config
	*/
	function __construct(PayoneerConfig $config) {
		$this->config = $config;
	}

	/**
     * @param $methodName
     * @param RequestInterface $request
     * @return mixed
     */
    public function call($methodName, RequestInterface $request) {
    	$client = new Client(['verify' => false]);
    	// $client->setDefaultOption('verify', false);
    	$parameters = array_merge($this->config->getParameterArray(), $request->getParameterArray());
    	$url = $this->config->apiEndpoint . '?mname=' . $methodName;
    	$res = $client->post($url, ['form_params' => $parameters]);
    	$this->response = $res;
    	return $res;
    }
}