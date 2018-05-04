<?php

namespace nickurt\RrpProxy\Api;

class Trademarks extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     */
    public function addTrademark($params)
    {
        return $this->request(array_merge(
            ['command' => 'AddTrademark'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function deleteTrademark($params)
    {
        return $this->request(array_merge(
            ['command' => 'DeleteTrademark'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function getTrademarkLabels($params)
    {
        return $this->request(array_merge(
            ['command' => 'GetTrademarkLabels'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function modifyTrademark($params)
    {
        return $this->request(array_merge(
            ['command' => 'ModifyTrademark'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryTrademarkList($params)
    {
        return $this->request(array_merge(
            ['command' => 'QueryTrademarkList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function renewTrademark($params)
    {
        return $this->request(array_merge(
            ['command' => 'RenewTrademark'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function setTrademarkRenewalmode($params)
    {
        return $this->request(array_merge(
            ['command' => 'SetTrademarkRenewalmode'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusTrademark($params)
    {
        return $this->request(array_merge(
            ['command' => 'StatusTrademark'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function transferTrademark($params)
    {
        return $this->request(array_merge(
            ['command' => 'TransferTrademark'], $params
        ));
    }
}