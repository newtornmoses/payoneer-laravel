<?php

namespace payoneer;

class PayoneerAPI extends PayoneerConfig
{
    /**
     * PayoneerConfig constructor.
     *
     * @param $apiUser
     * @param $apiPassword
     * @param $partnerId
     * @param bool $sandbox
     */
    function __construct($apiUser, $apiPassword, $partnerId, $sandbox = true)
    {
        $this->sandbox = $sandbox;
        if ($sandbox == true) {
            $this->URL = static::SANDBOX_API_URL;
        } else {
            $this->URL = static::PRODUCTION_API_URL;
        }

        $this->apiUser = $apiUser;
        $this->apiPassword = $apiPassword;
        $this->partnerID = $partnerId;
    }

    /**
     * Get Token for registration
     *
     * @param $value
     * @return mixed
     */
    public function getToken($value)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $this->URL . '?mname=GetToken&p1=' . $this->apiUser . '&p2=' . $this->apiPassword . '&p3=' . $this->partnerID . '&p4=' . $value,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                "Cache-Control: no-cache",
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo 'cURL Error #:' . $err;
        } else {
            return $response;
        }
    }

    /**
     * This method provides the status of the API and payout
     *
     * @return mixed
     */
    public function getApiStatus()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $this->URL . '?mname=Echo&p1=' . $this->apiUser . '&p2=' . $this->apiPassword . '&p3=' . $this->partnerID . '&p4=' . $value,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                "Cache-Control: no-cache",
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo 'cURL Error #:' . $err;
        } else {
            return $response;
        }
    }
}