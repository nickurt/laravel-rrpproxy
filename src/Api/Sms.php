<?php

namespace nickurt\RrpProxy\Api;

class Sms extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     */
    public function chargeMobileAccount($params)
    {
        return $this->request(array_merge(
            ['command' => 'ChargeMobileAccount'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function createMobileAccount($params)
    {
        return $this->request(array_merge(
            ['command' => 'CreateMobileAccount'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryMobileAccountList($params)
    {
        return $this->request(array_merge(
            ['command' => 'QueryMobileAccountList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function querySMSList($params)
    {
        return $this->request(array_merge(
            ['command' => 'QuerySMSList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function sendSMS($params)
    {
        return $this->request(array_merge(
            ['command' => 'SendSMS'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusMobileAccount($params)
    {
        return $this->request(array_merge(
            ['command' => 'StatusMobileAccount'], $params
        ));
    }
}