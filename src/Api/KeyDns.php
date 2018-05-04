<?php

namespace nickurt\RrpProxy\Api;

class KeyDns extends Operator
{
    /**
     * @param $params
     * @return mixed
     */
    public function addDnsZone($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'AddDNSZone'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function addMailFwd($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'AddMailFwd'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function addWebFwd($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'AddWebFwd'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function checkDnsZone($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'CheckDNSZone'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function deleteDnsZone($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'DeleteDNSZone'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function deleteMailFwd($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'DeleteMailFwd'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function deleteWebFwd($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'DeleteWebFwd'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function exportDnsZone($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'ExportDNSZone'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function getDnsZone($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'GetDNSZone'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function importDnsZone($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'ImportDNSZone'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function modifyDnsZone($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'ModifyDNSZone'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryDnsZoneList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryDNSZoneList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryDnsZoneRRList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryDNSZoneRRList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryDnsZoneSubdomainList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryDNSZoneSubdomainList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryMailFwdList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryMailFwdList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryWebFwdList($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'QueryWebFwdList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusDnsZone($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'StatusDNSZone'], $params
        ));
    }
}