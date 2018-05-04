<?php

namespace nickurt\RrpProxy\Api;

class Servers extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     */
    public function addServer($params)
    {
        return $this->request(array_merge(
            ['command' => 'AddServer'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function deleteServer($params)
    {
        return $this->request(array_merge(
            ['command' => 'DeleteServer'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function modifyServer($params)
    {
        return $this->request(array_merge(
            ['command' => 'ModifyServer'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryServerList($params)
    {
        return $this->request(array_merge(
            ['command' => 'QueryServerList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function renewServer($params)
    {
        return $this->request(array_merge(
            ['command' => 'RenewServer'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusServer($params)
    {
        return $this->request(array_merge(
            ['command' => 'StatusServer'], $params
        ));
    }
}