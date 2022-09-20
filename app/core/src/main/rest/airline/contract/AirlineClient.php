<?php

declare(strict_types=1);

namespace Id90travel\core\src\main\rest\airline\contract;

use Id90travel\core\src\main\rest\airline\model\Airline;

interface AirlineClient
{

    /**
     * @return Airline[]
     */
    function findAllAirlines(): array;
}