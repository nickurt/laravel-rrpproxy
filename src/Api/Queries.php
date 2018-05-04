<?php

namespace nickurt\RrpProxy\Api;

class Queries extends Operator
{
    /**
     * @param $params
     * @return mixed
     */
    public function generateList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'GenerateList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryCommandSyntax($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryCommandSyntax'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryDomainPinLockList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryDomainPinLockList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryJobList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryJobList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryMonitoringList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryMonitoringList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryObjectLogList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryObjectLogList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryOwnerChangeList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryOwnerChangeList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryPriceScaleList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryPriceScaleList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryPromotionList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryPromotionList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryPromotionRegistrarList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryPromotionRegistrarList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryRegistrarCommentList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryRegistrarCommentList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryRegistrarList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryRegistrarList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryTrusteeLogList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryTrusteeLogList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryZonePriceList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryZonePriceList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusObjectLog($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'StatusObjectLog'], $params
        ));
    }
}