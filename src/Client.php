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
        switch ($name) {
            case 'account':
                $api = new \nickurt\RrpProxy\Api\Account($this);
                break;
            case 'aftermarket':
                $api = new \nickurt\RrpProxy\Api\Aftermarket($this);
                break;
            case 'application':
                $api = new \nickurt\RrpProxy\Api\Application($this);
                break;
            case 'certificates':
                $api = new \nickurt\RrpProxy\Api\Certificates($this);
                break;
            case 'contacts':
                $api = new \nickurt\RrpProxy\Api\Contacts($this);
                break;
            case 'domains':
                $api = new \nickurt\RrpProxy\Api\Domains($this);
                break;
            case 'dynamicdns':
                $api = new \nickurt\RrpProxy\Api\DynamicDns($this);
                break;
            case 'events':
                $api = new \nickurt\RrpProxy\Api\Events($this);
                break;
            case 'finances':
                $api = new \nickurt\RrpProxy\Api\Finances($this);
                break;
            case 'hosting':
                $api = new \nickurt\RrpProxy\Api\Hosting($this);
                break;
            case 'keydns':
                $api = new \nickurt\RrpProxy\Api\KeyDns($this);
                break;
            case 'nameservers':
                $api = new \nickurt\RrpProxy\Api\NameServers($this);
                break;
            case 'queries':
                $api = new \nickurt\RrpProxy\Api\Queries($this);
                break;
            case 'servers':
                $api = new \nickurt\RrpProxy\Api\Servers($this);
                break;
            case 'sms':
                $api = new \nickurt\RrpProxy\Api\Sms($this);
                break;
            case 'trademarks':
                $api = new \nickurt\RrpProxy\Api\Trademarks($this);
                break;
            case 'transfers':
                $api = new \nickurt\RrpProxy\Api\Transfers($this);
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