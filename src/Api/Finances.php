<?php

namespace nickurt\RrpProxy\Api;

class Finances extends Operator
{
    /**
     * @param $params
     * @return mixed
     */
    public function chargeCreditcard($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'ChargeCreditcard'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function convertCurrency($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'ConvertCurrency'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryAccountingList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryAccountingList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryAvailablePromotionList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryAvailablePromotionList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryExchangeRates($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryExchangeRates'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryPremiumDomainList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryPremiumDomainList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryPriceHistoryList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryPriceHistoryList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryServiceList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryServiceList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryUpcomingAccountingList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryUpcomingAccountingList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryZoneList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryZoneList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function servicePrice($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'ServicePrice'], $params
        ));
    }
}