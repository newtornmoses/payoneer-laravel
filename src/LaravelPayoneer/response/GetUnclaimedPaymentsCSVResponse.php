<?php

namespace payoneer\response;

use payoneer\ApiAbstract;

/**
 * Class GetUnclaimedPaymentsCSVResponse
 * @package payoneer\response
 */
class GetUnclaimedPaymentsCSVResponse extends ResponseAbstract implements ResponseInterface {
	
	/** @var array Status codes **/
	public $errors = [
		'001' => 'Field format is invalid or is not supported.',
		'006' => 'Internal error.',
		'000FFF0' => 'API function not allowed by partner.',
		'A00B556F' => 'Unauthorized access or invalid parameters.',
		'4B501FF5' => 'Cannot find command or wrong method name.',
	];

	/** @var string Error Key **/
	protected $errorKey = 'GetUnclaimedPaymentsCSV';

	/**
	 * @return mixed
     */    
    public function getData(){
    	return $this->_responseObj->getBody()->getContents();
    }
}