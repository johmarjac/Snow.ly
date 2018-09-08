<?php

return [

    // Default Admin Account
    'admin' => [

        // Used for logging in into the admin backend
        'name' => env('SNOWLY_ADMIN_NAME', 'admin'),
        'pass' => env('SNOWLY_ADMIN_PASS', 'admin'),

        // This is the sub-domain where the admin area will be available
        'domain' => env('SNOWLY_ADMIN_DOMAIN', 'admin.snowly.dev'),

    ],

];
