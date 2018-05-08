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
    protected $endpoints = [
        'live' => 'https://api.rrpproxy.net:8082/soap',
        'otae' => 'https://api-ote.rrpproxy.net:8082/soap'
    ];

    /**
     * @var
     */
    protected $environment;

    /**
     * @var array
     */
    protected $classes = [
        'account' => 'Account',
        'aftermarket' => 'Aftermarket',
        'application' => 'Application',
        'certificates' => 'Certificates',
        'contacts' => 'Contacts',
        'domains' => 'Domains',
        'dynamicdns' => 'DynamicDns',
        'events' => 'Events',
        'finances' => 'Finances',
        'hosting' => 'Hosting',
        'keydns' => 'KeyDns',
        'nameservers' => 'NameServers',
        'queries' => 'Queries',
        'servers' => 'Servers',
        'sms' => 'Sms',
        'trademarks' => 'Trademarks',
        'transfers' => 'Transfers',
    ];

    /**
     * @param $method
     * @param $args
     * @return Api\Account|Api\Aftermarket|Api\Application|Api\Certificates|Api\Contacts|Api\Domains|Api\DynamicDns
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
     * @return Api\Account|Api\Aftermarket|Api\Application|Api\Certificates|Api\Contacts|Api\Domains|Api\DynamicDns
     */
    public function api($name)
    {
        if (!isset($this->classes[$name])) {
            throw new \InvalidArgumentException(sprintf('Undefined method called:"%s"', $name));
        }

        $class = '\\nickurt\\RrpProxy\\Api\\' . $this->classes[$name];

        return new $class($this);
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
            $this->soapClient = new \nickurt\RrpProxy\SoapClient\SoapClient([
                'location' => $this->getEndpointUrl()
            ]);
        }

        $this->soapClient->setOptions([
            'location' => $this->getEndpointUrl()
        ]);

        return $this->soapClient;
    }

    /**
     * @return mixed
     */
    public function getEndpointUrl()
    {
        return $this->endpoints[($this->getEnvironment() == 'otae') ? 'otae' : 'live'];
    }

    /**
     * @return mixed
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * @param $environment
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;
    }
}