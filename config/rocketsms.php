<?php

declare(strict_types=1);

return [
    'gateway' => env('ROCKETSMS_GATEWAY', 'https://api.rocketsms.by'),
    'username' => env('ROCKETSMS_USERNAME'),
    'password' => env('ROCKETSMS_PASSWORD'),
];
