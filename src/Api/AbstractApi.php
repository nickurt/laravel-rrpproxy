<?php

namespace nickurt\RrpProxy\Api;

use nickurt\RrpProxy\Client;

abstract class AbstractApi implements ApiInterface
{
    /**
     * @var Client
     */
    public $client;

    /**
     * AbstractApi constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param $parameters
     * @return mixed
     */
    protected function request($parameters)
    {
        $parameters = array_merge([
            "s_login" => $this->client->getSoapClient()->getOptions()['username'],
            "s_pw" => $this->client->getSoapClient()->getOptions()['password'],
        ], $parameters);

        $response = $this->client->getSoapClient()->request(
            $parameters
        );

        return $response;
    }
}