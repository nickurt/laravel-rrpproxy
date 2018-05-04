<?php

namespace nickurt\RrpProxy\Api;

class Application extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     */
    public function addDomainApplication($params)
    {
        return $this->request(array_merge(
            ['command' => 'AddDomainApplication'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function deleteDomainApplication($params)
    {
        return $this->request(array_merge(
            ['command' => 'DeleteDomainApplication'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function modifyDomainApplication($params)
    {
        return $this->request(array_merge(
            ['command' => 'ModifyDomainApplication'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryApplicationList($params)
    {
        return $this->request(array_merge(
            ['command' => 'QueryApplicationList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryDomainApplicationList($params)
    {
        return $this->request(array_merge(
            ['command' => 'QueryDomainApplicationList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusDomainApplication($params)
    {
        return $this->request(array_merge(
            ['command' => 'StatusDomainApplication'], $params
        ));
    }
}