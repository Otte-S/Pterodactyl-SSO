<?php

return [
    'secret' => env('SSO_SECRET'),
    'token' => [
        'length' => 48,
        'lifetime' => 60
    ],
];
