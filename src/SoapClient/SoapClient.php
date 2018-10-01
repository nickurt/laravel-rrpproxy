<?php

namespace nickurt\RrpProxy\SoapClient;

class SoapClient implements SoapClientInterface
{
    /**
     * @var \SoapClient
     */
    protected $client;

    /**
     * @var array
     */
    protected $options = [];

    /**
     * SoapClient constructor.
     * @param array $options
     */
    public function __construct($options = [])
    {
        $this->setOptions(array_merge($options, [
            "uri" => "urn:Api",
            "style" => SOAP_RPC,
            "use" => SOAP_ENCODED
        ]));

        $this->client = new \SoapClient(NULL, $this->getOptions());
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options)
    {
        $this->options = array_merge($this->options, $options);
    }

    /**
     * @param $body
     * @return mixed
     */
    public function request($body)
    {
        $this->client->__setLocation($this->getOptions()['location']);

        $result = $this->client->__call(
            "xcall",
            array_merge([$body], ["uri" => "urn:Api", "soapaction" => "urn:Api#xcall"])
        );

        return $result;
    }
}
