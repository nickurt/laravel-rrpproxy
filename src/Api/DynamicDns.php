<?php

namespace nickurt\RrpProxy\Api;

class DynamicDns extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     */
    public function addDynamicDns($params)
    {
        return $this->request(array_merge(
            ['command' => 'AddDynamicDNS'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function deleteDynamicDns($params)
    {
        return $this->request(array_merge(
            ['command' => 'DeleteDynamicDNS'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function modifyDynamicDns($params)
    {
        return $this->request(array_merge(
            ['command' => 'ModifyDynamicDNS'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryDynamicDNSList($params)
    {
        return $this->request(array_merge(
            ['command' => 'QueryDynamicDNSList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusDynamicDns($params)
    {
        return $this->request(array_merge(
            ['command' => 'StatusDynamicDNS'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function updateDynamicDns($params)
    {
        return $this->request(array_merge(
            ['command' => 'UpdateDynamicDNS'], $params
        ));
    }
}