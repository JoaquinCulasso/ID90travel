<?php

declare(strict_types=1);

use Id90travel\web\controller\AirlineController;
use Id90travel\web\controller\AuthController;
use Id90travel\web\controller\HotelController;

return [
    'airlines' => [
        AirlineController::class =>
            [
                ['findAllAirlines', 'GET'],
                ['findAirlineById', 'GET']
            ]
    ],
    'auth' => [
        AuthController::class =>
            [
                ['userAuth', 'POST']
            ]
    ],
    'hotels' => [
        HotelController::class =>
            [
                ['findAllHotels', 'GET']
            ]
    ]
];

