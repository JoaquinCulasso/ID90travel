<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\restClient\airline\adapter;

use Id90travel\core\src\main\common\exception\IdAirlineDomainException;
use Id90travel\core\src\main\rest\airline\contract\AirlineClient;
use Id90travel\core\src\main\rest\airline\model\Airline;
use Id90travel\infra\src\main\restClient\airline\contract\AirlineRestClient;
use Id90travel\infra\src\main\restClient\airline\mapper\AirlineMapper;

class AirlineRestClientImpl implements AirlineClient
{

    private AirlineRestClient $airlineRestClient;
    private AirlineMapper $airlineMapper;

    /**
     * @param AirlineRestClient $airlineRestClient
     * @param AirlineMapper $airlineMapper
     */
    public function __construct(AirlineRestClient $airlineRestClient, AirlineMapper $airlineMapper)
    {
        $this->airlineRestClient = $airlineRestClient;
        $this->airlineMapper = $airlineMapper;
    }


    /**
     * @return Airline[]
     * @throws IdAirlineDomainException
     */
    function findAllAirlines(): array
    {

        $airlinesDTOS = $this->airlineRestClient->findAllAirlines();
        $airlines = array();
        foreach ($airlinesDTOS as $airlineDTO) {
            $airlines[] = $this->airlineMapper->mapToDomain($airlineDTO);
        }

        return $airlines;
    }
}