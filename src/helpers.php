<?php

use nickurt\RrpProxy\RrpProxy;

if (! function_exists('rrpproxy')) {
    function rrpproxy()
    {
        return app(RrpProxy::class);
    }
}