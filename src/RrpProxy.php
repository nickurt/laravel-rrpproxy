<?php

namespace nickurt\RrpProxy;

class RrpProxy
{
    /**
     * @var
     */
    protected $app;

    /**
     * @var array
     */
    protected $connections = [];

    /**
     * @var
     */
    protected $client;

    /**
     * Plesk constructor.
     * @param $app
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

	/**
	 * @return Api\Account
	 */
	public function account() { return new Api\Account($this->client); }

	/**
	 * @return Api\Aftermarket
	 */
	public function aftermarket() { return new Api\Aftermarket($this->client); }

	/**
	 * @return Api\Application
	 */
	public function application() { return new Api\Application($this->client); }

	/**
	 * @return Api\Certificates
	 */
	public function certificates() { return new Api\Certificates($this->client); }

	/**
	 * @return Api\Contacts
	 */
	public function contacts() { return new Api\Contacts($this->client); }

	/**
	 * @return Api\Domains
	 */
	public function domains() { return new Api\Domains($this->client); }

	/**
	 * @return Api\DynamicDns
	 */
	public function dynamicdns() { return new Api\DynamicDns($this->client); }

	/**
	 * @return Api\Events
	 */
	public function events() { return new Api\Events($this->client); }

	/**
	 * @return Api\Finances
	 */
	public function finances() { return new Api\Finances($this->client); }

	/**
	 * @return Api\Hosting
	 */
	public function hosting() { return new Api\Hosting($this->client); }

	/**
	 * @return Api\KeyDns
	 */
	public function keydns() { return new Api\KeyDns($this->client); }

	/**
	 * @return Api\NameServers
	 */
	public function nameservers() { return new Api\NameServers($this->client); }

	/**
	 * @return Api\Queries
	 */
	public function queries() { return new Api\Queries($this->client); }

	/**
	 * @return Api\Servers
	 */
	public function servers() { return new Api\Servers($this->client); }

	/**
	 * @return Api\Sms
	 */
	public function sms() { return new Api\Sms($this->client); }

	/**
	 * @return Api\Trademarks
	 */
	public function trademarks() { return new Api\Trademarks($this->client); }

	/**
	 * @return Api\Transfers
	 */
	public function transfers() { return new Api\Transfers($this->client); }

    /**
     * @param $method
     * @param $args
     * @return mixed
     */
    public function __call($method, $args)
    {
        return call_user_func_array([$this->client, $method], $args);
    }

    /**
     * @param null $name
     * @return mixed|Api\Client
     */
    public function connection($name = null)
    {
        $name = $name ?: $this->getDefaultConnection();

        return $this->connections[$name] = $this->get($name);
    }

    /**
     * @return mixed
     */
    public function getDefaultConnection()
    {
        return $this->app['config']['rrpproxy.default'];
    }

    /**
     * @param $name
     * @return mixed|Api\Client
     */
    protected function get($name)
    {
        return $this->connections[$name] ?? $this->resolve($name);
    }

    /**
     * @param $name
     * @return Api\Client
     */
    protected function resolve($name)
    {
        $config = $this->getConfig($name);

        $this->client = new \nickurt\RrpProxy\Client();
        $this->client->setCredentials(
            $config['username'],
            $config['password']
        );
        $this->client->setEnvironment(isset($config['otae']) ? 'otae' : 'live');

        return $this->client;
    }

    /**
     * @param $name
     * @return mixed
     */
    protected function getConfig($name)
    {
        return $this->app['config']["rrpproxy.connections.{$name}"];
    }
}
