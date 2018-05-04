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
        $this->client = new \SoapClient(NULL, array_merge(
            $options, [
                "uri" => "urn:Api",
                "style" => SOAP_RPC,
                "use" => SOAP_ENCODED
            ]
        ));
    }

    /**
     * @param $body
     * @return mixed
     */
    public function request($body)
    {
        $result = $this->client->__call("xcall",
            [$body], ["uri" => "urn:Api", "soapaction" => "urn:Api#xcall"]
        );

        return $result;
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
}