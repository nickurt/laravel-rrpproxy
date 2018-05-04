<?php

namespace nickurt\RrpProxy\Api;

class Hosting extends Operator
{
    /**
     * @param $params
     * @return mixed
     */
    public function addWebhost($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'AddWebhost'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function addWebspace($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'AddWebspace'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function deleteWebhost($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'DeleteWebhost'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function deleteWebspace($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'DeleteWebspace'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function modifyPhpIni($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'ModifyPHPIni'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function modifyWebhostAutocert($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'ModifyWebhost: AUTOCERT'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function modifyWebhostSsl($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'ModifyWebhost: SSL'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function modifyWebspace($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'ModifyWebspace'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function modifyWhost($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'ModifyWhost'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryPhpIni($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryPHPIni'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryWebhostList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryWebhostList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryWebspaceList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryWebspaceList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function renewWebspace($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'RenewWebspace'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusWebhost($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'StatusWebhost'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusWebspace($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'StatusWebspace'], $params
        ));
    }
}