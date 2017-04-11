<?php

return [
    // Database configuration
    'database' => [
        'host'     => 'localhost',
        'username' => 'phalcon',
        'password' => 'secret',
        'dbname'   => 'phalcondb',
    ],

    // Application configuration
    'application' => [
        'cacheDir'       => APPLICATION_PATH . '/cache/data/',
        'logsDir'        => APPLICATION_PATH . '/logs/',
        'baseUri'        => '/',
        'viewsDir'       => APPLICATION_PATH . '/Resources/views/',
    ],

    // The Volt Engine configuration
    'volt' => [
        'cacheDir'          => APPLICATION_PATH . '/cache/volt/',
        'compiledSeparator' => '_',
    ],

    // Mailer configuration
    'mailer' => [
        'driver'     => 'smtp',
        'host'       => 'smtp.gmail.com',
        'port'       => 465,
        'encryption' => 'ssl',
        'username'   => 'email address',
        'password'   => 'password',
        'from'       => [
            'email' => 'email address',
            'name'  => 'some name'
        ]
    ]
];
