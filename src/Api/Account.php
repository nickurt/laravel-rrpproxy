<?php

namespace nickurt\RrpProxy\Api;

class Account extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     */
    public function activateAppendix($params)
    {
        return $this->request(array_merge(
            ['command' => 'ActivateAppendix'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function modifyRegistrar($params)
    {
        return $this->request(array_merge(
            ['command' => 'ModifyRegistrar'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function modifyRegistrarCurrency($params)
    {
        return $this->request(array_merge(
            ['command' => 'ModifyRegistrarCurrency'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function pushObject($params)
    {
        return $this->request(array_merge(
            ['command' => 'PushObject'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryAppendixList($params)
    {
        return $this->request(array_merge(
            ['command' => 'QueryAppendixList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryRegistrarStatisticList($params)
    {
        return $this->request(array_merge(
            ['command' => 'QueryRegistrarStatisticList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusAccount($params)
    {
        return $this->request(array_merge(
            ['command' => 'StatusAccount'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusRegistrar($params)
    {
        return $this->request(array_merge(
            ['command' => 'StatusRegistrar'], $params
        ));
    }
}