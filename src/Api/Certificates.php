<?php

namespace nickurt\RrpProxy\Api;

class Certificates extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     */
    public function addCertificate($params)
    {
        return $this->request(array_merge(
            ['command' => 'AddCertificate'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function checkCertificate($params)
    {
        return $this->request(array_merge(
            ['command' => 'CheckCertificate'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function deleteCertificate($params)
    {
        return $this->request(array_merge(
            ['command' => 'DeleteCertificate'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function getCertificateInfo($params)
    {
        return $this->request(array_merge(
            ['command' => 'GetCertificateInfo'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function modifyCertificate($params)
    {
        return $this->request(array_merge(
            ['command' => 'ModifyCertificate'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryCertificateList($params)
    {
        return $this->request(array_merge(
            ['command' => 'QueryCertificateList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function reissueCertificate($params)
    {
        return $this->request(array_merge(
            ['command' => 'ReissueCertificate'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function renewCertificate($params)
    {
        return $this->request(array_merge(
            ['command' => 'RenewCertificate'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusCertificate($params)
    {
        return $this->request(array_merge(
            ['command' => 'StatusCertificate'], $params
        ));
    }
}