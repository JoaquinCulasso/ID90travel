<?php

declare(strict_types=1);

use Id90travel\web\controller\AirlineController;
use Id90travel\web\controller\AuthController;
use Id90travel\web\controller\HotelController;

return [
    '/findAllAirlines' => AirlineController::class,
    '/authUser' => AuthController::class,
    '/findAllHotels' => HotelController::class
];
