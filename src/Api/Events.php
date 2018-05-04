<?php

namespace nickurt\RrpProxy\Api;

class Events extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     */
    public function deleteEvent($params)
    {
        return $this->request(array_merge(
            ['command' => 'DeleteEvent'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function queryEventList($params)
    {
        return $this->request(array_merge(
            ['command' => 'QueryEventList'], $params
        ));
    }

    /**
     * @param $params
     * @return mixed
     */
    public function statusEvent($params)
    {
        return $this->request(array_merge(
            ['command' => 'StatusEvent'], $params
        ));
    }
}