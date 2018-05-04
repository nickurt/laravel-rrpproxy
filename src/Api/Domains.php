<?php

namespace nickurt\RrpProxy\Api;

class Domains extends Operator
{
    /**
     * @param $params
     * @return mixed
     */
    public function activateClaimsNotice($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'ActivateClaimsNotice'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function addDomain($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'AddDomain'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function checkClaims($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'CheckClaims'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function checkDomain($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'CheckDomain'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function checkDomains($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'CheckDomains'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function deleteDomain($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'DeleteDomain'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function domainPrice($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'DomainPrice'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function getZone($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'GetZone'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function getZoneInfo($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'GetZoneInfo'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function modifyDomain($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'ModifyDomain'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function parkDomain($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'ParkDomain'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function pushDomain($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'PushDomain'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryActiveServiceList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryActiveServiceList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryClaimsNoticeList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryClaimsNoticeList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryDomainExpireList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryDomainExpireList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryDomainHistoryList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryDomainHistoryList'], $params
        ));
    }

    /**
     * @return mixed
     */
    public function queryDomainList()
    {
        return $this->client->request(['command' => 'QueryDomainList']);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryDomainListByContact($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryDomainListByContact'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryDomainRenewList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryDomainRenewList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryIDNTagList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryIDNTagList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryRegisteredPremiumDomainList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryRegisteredPremiumDomainList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryTrusteeDomainList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryTrusteeDomainList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function renewDomain($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'RenewDomain'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function requestDomainPin($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'RequestDomainPin'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function resendNotification($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'ResendNotification'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function restoreDomain($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'RestoreDomain'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function setDomainPinLock($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'SetDomainPinLock'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function setDomainRenewalMode($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'SetDomainRenewalMode'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function setDomainTransferMode($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'SetDomainTransferMode'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusClaimsNotice($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'StatusClaimsNotice'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusDomain($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'StatusDomain'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusDomainHistory($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'StatusDomainHistory'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function tradeDomain($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'TradeDomain'], $params
        ));
    }
}