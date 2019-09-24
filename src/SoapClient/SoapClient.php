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
    }

    /**
     * @param $body
     * @return mixed
     */
    public function request($body)
    {
        $result = $this->getClient()->__call(
            "xcall",
            array_merge([$body], ["uri" => "urn:Api", "soapaction" => "urn:Api#xcall"])
        );

        return $result;
    }

    /**
     * @return \SoapClient
     * @throws \SoapFault
     */
    public function getClient()
    {
        if (!isset($this->client)) {
            $this->client = new \SoapClient(NULL, $this->getOptions());

            return $this->client;
        }

        return $this->client;
    }

    /**
     * @param \SoapClient $client
     */
    public function setClient(\SoapClient $client)
    {
        $this->client = $client;
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
