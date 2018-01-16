<?php

namespace payoneer\response;

use payoneer\ApiAbstract;

/**
 * Class PayeeSignupAutoPopulationResponse
 * @package payoneer\response
 */
class PayeeSignupAutoPopulationResponse extends ResponseAbstract implements ResponseInterface {
	
	/** @var array Status codes **/
	public $errors = [
		'001' => 'Field format is invalid or is not supported.',
		'005' => 'Internal error.',
		'006' => 'Internal error.',
		'PE1005' => 'No partner ID received.',
		'PE1006' => 'No payee ID received.',
		'PE1010' => 'Unauthorized action.',
		'PE1011' => 'Required field is missing.',
		'PE1023' => 'Invalid ID type.',
		'PE1028' => 'Invalid currency.',
		'000FFF0' => 'API function not allowed by partner.',
		'A00B556F' => 'Unauthorized access or invalid parameters. Please check your IP address and parameters.',
		'4B501FF5' => 'Cannot find command or wrong method name.',
		'FFA009A' => 'Auto populate XML contains invalid entries.',
	];

	/** @var string Response Key **/
	protected $responseKey = 'PayoneerToken';
}