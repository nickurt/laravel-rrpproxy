<?php

namespace nickurt\RrpProxy\Api;

class Contacts extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     */
    public function addContact($params)
    {
        return $this->request(array_merge(
            ['command' => 'AddContact'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function checkContact($params)
    {
        return $this->request(array_merge(
            ['command' => 'CheckContact'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function checkContacts($params)
    {
        return $this->request(array_merge(
            ['command' => 'CheckContacts'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function cloneContact($params)
    {
        return $this->request(array_merge(
            ['command' => 'CloneContact'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function deleteContact($params)
    {
        return $this->request(array_merge(
            ['command' => 'DeleteContact'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function modifyContact($params)
    {
        return $this->request(array_merge(
            ['command' => 'ModifyContact'], $params
        ));
    }

    /**
     * @return mixed
     */
    public function queryContactList()
    {
        return $this->request(['command' => 'QueryContactList']);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function restoreContact($params)
    {
        return $this->request(array_merge(
            ['command' => 'RestoreContact'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusContact($params)
    {
        return $this->request(array_merge(
            ['command' => 'StatusContact'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusOwnerChange($params)
    {
        return $this->request(array_merge(
            ['command' => 'StatusOwnerChange'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusUnsyncRegistryContact($params)
    {
        return $this->request(array_merge(
            ['command' => 'StatusUnsyncRegistryContact'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function transferContact($params)
    {
        return $this->request(array_merge(
            ['command' => 'TransferContact'], $params
        ));
    }
}