<?php

namespace nickurt\RrpProxy\Api;

class Base
{
    /**
     * @var
     */
    protected $username;

    /**
     * @var
     */
    protected $password;

    /**
     * @return Contacts
     */
    public function contacts()
    {
        return new \nickurt\RrpProxy\Api\Contacts($this);
    }

    /**
     * @return Domains
     */
    public function domains()
    {
        return new \nickurt\RrpProxy\Api\Domains($this);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function request($params)
    {
        $client = new \SoapClient(NULL, [
            "location" => "https://api.rrpproxy.net:8082/soap",
            "uri" => "urn:Api",
            "style" => SOAP_RPC,
            "use" => SOAP_ENCODED,
        ]);

        $result = $client->__call("xcall",
            [array_merge([
                "s_login" => $this->username,
                "s_pw" => $this->password,
            ], $params)], ["uri" => "urn:Api", "soapaction" => "urn:Api#xcall"]
        );

        return $result;
    }

    /**
     * @param $username
     * @param $password
     */
    public function setCredentials($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }
}