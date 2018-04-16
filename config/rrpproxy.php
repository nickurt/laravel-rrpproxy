<?php

return [

    'default' => env('RRPPROXY_CONNECTION', 'default'),

    'connections' => [

        'default' => [
            'host' => env('RRPPROXY_DEFAULT_HOST'),
            'username' => env('RRPPROXY_DEFAULT_USERNAME'),
            'password' => env('RRPPROXY_DEFAULT_PASSWORD'),
        ],

    ],

];