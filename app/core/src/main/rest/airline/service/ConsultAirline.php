<?php

declare(strict_types=1);

namespace Id90travel\core\src\main\rest\airline\service;

use Id90travel\core\src\main\common\exception\AirlinesNotFoundException;
use Id90travel\core\src\main\rest\airline\contract\AirlineClient;
use Id90travel\core\src\main\rest\airline\model\Airline;

/**
 * Use case consult airlines
 */
class ConsultAirline
{

    private AirlineClient $airlineClient;

    /**
     * @param AirlineClient $airlineClient
     */
    public function __construct(AirlineClient $airlineClient)
    {
        $this->airlineClient = $airlineClient;
    }

    /**
     * @return Airline[]
     * @throws AirlinesNotFoundException
     */
    public function findAllAirlines(): array
    {
        $airlines = $this->airlineClient->findAllAirlines();
        if (empty($airlines)) {
            throw new AirlinesNotFoundException("Airlines not found");
        }

        return $airlines;
    }


}