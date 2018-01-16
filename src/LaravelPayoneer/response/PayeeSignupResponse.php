<?php

namespace payoneer\response;

use payoneer\ApiAbstract;

/**
 * Class PayeeSignupResponse
 * @package payoneer\response
 */
class PayeeSignupResponse extends ResponseAbstract implements ResponseInterface {
	/** @var array Status codes **/
	public $errors = [
		'001' => 'Field format is invalid or is not supported.',
		'005' => 'Internal error.',
		'006' => 'Internal error.',
		'008' => 'Internal error.',
		'PE1010' => 'Unauthorized action.',
		'000FFF0' => 'API function not allowed by partner.',
		'A00B556F' => 'Unauthorized access or invalid parameters. Please check IP address and parameters.',
		'4B501FF5' => 'Cannot find command or wrong method name.',
	];

	/** @var string Response Key **/
	protected $responseKey = 'PayoneerToken';
}