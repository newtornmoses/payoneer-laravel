<?php

namespace payoneer\request;

/**
 * Class ChangePayeeIdRequest
 * @package payoneer\request
 */
class ChangePayeeIdRequest extends RequestAbstract implements RequestInterface
{
    
    /**
     * @param $oldId
     * @param $newId
     */
    function __construct($oldId, $newId) {
        $this->parameters['p4'] = $oldId;
        $this->parameters['p5'] = $newId;
    }
}
