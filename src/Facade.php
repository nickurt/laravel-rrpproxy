<?php

namespace nickurt\RrpProxy;

class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'RrpProxy';
    }
}
