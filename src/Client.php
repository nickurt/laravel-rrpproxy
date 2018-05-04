<?php

namespace nickurt\RrpProxy;

class Client
{
    /**
     * @var
     */
    protected $soapClient;

    /**
     * @var array
     */
    protected $options = [
        'location' => 'https://api.rrpproxy.net:8082/soap'
    ];

    /**
     * @param $method
     * @param $args
     * @return Api\Contacts|Api\Domains
     */
    public function __call($method, $args)
    {
        try {
            return $this->api($method);
        } catch (InvalidArgumentException $e) {
            throw new \BadMethodCallException(sprintf('Undefined method called:"%s"', $method));
        }
    }

    /**
     * @param $name
     * @return Api\Contacts|Api\Domains
     */
    public function api($name)
    {
        switch ($name) {
            case 'contacts':
                $api = new \nickurt\RrpProxy\Api\Contacts($this);
                break;
            case 'domains':
                $api = new \nickurt\RrpProxy\Api\Domains($this);
                break;
            default:
                throw new \InvalidArgumentException(sprintf('Undefined method called:"%s"', $name));
                break;
        }

        return $api;
    }

    /**
     * @param $username
     * @param $password
     */
    public function setCredentials($username, $password)
    {
        $this->getSoapClient()->setOptions([
            'username' => $username,
            'password' => $password
        ]);
    }

    /**
     * @return SoapCLient
     */
    public function getSoapClient()
    {
        if (!isset($this->soapClient)) {
            $this->soapClient = new \nickurt\RrpProxy\SoapClient\SoapClient(
                $this->options
            );
        }

        return $this->soapClient;
    }
}