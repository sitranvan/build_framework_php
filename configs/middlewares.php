<?php

use App\Middlewares\AuthMiddleware;
use App\Middlewares\GuestMiddleware;

$guestRoutes = [
    'className' => GuestMiddleware::class,
    'routes' => [
        '/', 'dang-nhap', 'dang-ky'
    ],
];

$authRoutes = [
    'className' => AuthMiddleware::class,
    'routes' => [
        'san-pham'
    ],
];
