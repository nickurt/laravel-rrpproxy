<?php

namespace nickurt\RrpProxy\Api;

class NameServers extends Operator
{
    /**
     * @param $params
     * @return mixed
     */
    public function addNameserver($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'AddNameserver'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function checkNameserver($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'CheckNameserver'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function deleteNameserver($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'DeleteNameserver'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function modifyNameserver($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'ModifyNameserver'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryNameserverList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryNameserverList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusNameserver($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'StatusNameserver'], $params
        ));
    }
}