<?php


return [

    'database' => [

        'dbname' => 'chatsay',

        'user' => 'root',

        'pass' => '',

        'connection' => 'mysql:host=localhost',

        'options' => [

            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];