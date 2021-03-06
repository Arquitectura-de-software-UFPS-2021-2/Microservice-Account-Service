<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait RequestService
{

    public function request($method, $requestUrl, $formParams = [], $headers = [])
    {
        $client = new Client([
            'base_uri' => $this->baseUri
        ]);
        if (isset($this->token)) {
            $headers['Authorization'] = $this->token;
        }
        $response = $client->request($method, $requestUrl,
            [
                'form_params' => $formParams,
                'headers' => $headers
            ]
        );
        return $response->getBody()->getContents();
    }

}