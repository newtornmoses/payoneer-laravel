<?php

namespace payoneer\LaravelPayoneer\Services;

use GuzzleHttp\Client;
use payoneer\LaravelPayoneer\Contracts\RequestInterface;
use payoneer\LaravelPayoneer\PayoneerConfig;

abstract class BaseService
{
    protected $response;

    protected $config;

    /**
     * @param $config
     */
    function __construct(PayoneerConfig $config)
    {
        $this->config = $config;
    }

    /**
     * @param                  $methodName
     * @param RequestInterface $request
     * @return mixed
     */
    public function call($methodName, RequestInterface $request)
    {
        $client = new Client();
        $url = $this->config->apiEndpoint . '?mname=' . $methodName;
        $parameters = array_merge($this->config->getParameterArray(), $request->getParameterArray());
        $response = $client->post($url, ['form_params' => $parameters]);

        return $response;
    }
} 