<?php

namespace nickurt\RrpProxy\SoapClient;

interface SoapClientInterface
{
    /**
     * @return array
     */
    public function getOptions();

    /**
     * @param $body
     * @return mixed
     */
    public function request($body);

    /**
     * @param array $options
     */
    public function setOptions(array $options);
}
