<?php

declare(strict_types=1);


use function DI\get;
use Id90travel\core\src\main\rest\auth\contract\AuthClient;
use Id90travel\core\src\main\rest\hotel\contract\HotelClient;
use Id90travel\infra\src\main\restClient\auth\adapter\AuthRestClientImpl;
use Id90travel\infra\src\main\restClient\hotel\adapter\HotelRestClientImpl;
use Id90travel\core\src\main\rest\airline\contract\AirlineClient;
use Id90travel\infra\src\main\restClient\airline\adapter\AirlineRestClientImpl;
use Id90travel\infra\src\main\common\http\HttpRequest;
use Id90travel\infra\src\main\common\http\CurlRequest;


return [
    HttpRequest::class => get(CurlRequest::class),
    AirlineClient::class => get(AirlineRestClientImpl::class),
    AuthClient::class => get(AuthRestClientImpl::class),
    HotelClient::class => get(HotelRestClientImpl::class)
];
