<?php

namespace nickurt\RrpProxy\Api;

class Domains extends Operator
{
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
    public function statusDomain($params)
    {
        return $this->client->request(array_merge(
            ['command' => 'StatusDomain'], $params
        ));
    }
}