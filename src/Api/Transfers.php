<?php

namespace nickurt\RrpProxy\Api;

class Transfers extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     */
    public function activateTransfer($params)
    {
        return $this->request(array_merge(
            ['command' => 'ActivateTransfer'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function checkDomainTransfer($params)
    {
        return $this->request(array_merge(
            ['command' => 'CheckDomainTransfer'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryForeignTransferList($params)
    {
        return $this->request(array_merge(
            ['command' => 'QueryForeignTransferList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryTransferList($params)
    {
        return $this->request(array_merge(
            ['command' => 'QueryTransferList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function setAuthCode($params)
    {
        return $this->request(array_merge(
            ['command' => 'SetAuthCode'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusDomainTransfer($params)
    {
        return $this->request(array_merge(
            ['command' => 'StatusDomainTransfer'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function transferDomain($params)
    {
        return $this->request(array_merge(
            ['command' => 'TransferDomain'], $params
        ));
    }
}