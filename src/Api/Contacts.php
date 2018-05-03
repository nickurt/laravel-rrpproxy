<?php

namespace nickurt\RrpProxy\Api;

class Contacts extends Operator
{
    /**
     * @return mixed
     */
    public function queryContactList()
    {
        return $this->client->request(['command' => 'QueryContactList']);
    }
}