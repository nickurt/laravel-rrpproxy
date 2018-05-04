<?php

namespace nickurt\RrpProxy\Api;

class Aftermarket extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     */
    public function addAftermarketAccount($params)
    {
        return $this->request(array_merge(
            ['command' => 'AddAftermarketAccount'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function addAftermarketDomain($params)
    {
        return $this->request(array_merge(
            ['command' => 'AddAftermarketDomain'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function aftermarketBid($params)
    {
        return $this->request(array_merge(
            ['command' => 'AftermarketBid'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function buyDomain($params)
    {
        return $this->request(array_merge(
            ['command' => 'BuyDomain'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function deleteAftermarketAccount($params)
    {
        return $this->request(array_merge(
            ['command' => 'DeleteAftermarketAccount'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function deleteAftermarketDomain($params)
    {
        return $this->request(array_merge(
            ['command' => 'DeleteAftermarketDomain'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function modifyAftermarketAccount($params)
    {
        return $this->request(array_merge(
            ['command' => 'ModifyAftermarketAccount'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function modifyAftermarketDomain($params)
    {
        return $this->request(array_merge(
            ['command' => 'ModifyAftermarketDomain'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryAftermarketAccountList($params)
    {
        return $this->request(array_merge(
            ['command' => 'QueryAftermarketAccountList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryAftermarketBid($params)
    {
        return $this->request(array_merge(
            ['command' => 'QueryAftermarketBid'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryAftermarketBidList($params)
    {
        return $this->request(array_merge(
            ['command' => 'QueryAftermarketBidList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryAftermarketDomainList($params)
    {
        return $this->request(array_merge(
            ['command' => 'QueryAftermarketDomainList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryAftermarketList($params)
    {
        return $this->request(array_merge(
            ['command' => 'QueryAftermarketList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function reserveDomain($params)
    {
        return $this->request(array_merge(
            ['command' => 'ReserveDomain'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusAftermarketAccount($params)
    {
        return $this->request(array_merge(
            ['command' => 'StatusAftermarketAccount'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusAftermarketDomain($params)
    {
        return $this->request(array_merge(
            ['command' => 'StatusAftermarketDomain'], $params
        ));
    }
}