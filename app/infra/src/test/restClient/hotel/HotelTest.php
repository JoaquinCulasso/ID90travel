<?php

declare(strict_types=1);

namespace Id90travel\infra\src\test\restClient\hotel;

use Id90travel\core\src\main\rest\hotel\model\HotelFilterBuilder;
use Id90travel\infra\src\main\common\http\CurlRequest;
use Id90travel\infra\src\main\common\http\HttpRequest;
use Id90travel\infra\src\main\restClient\auth\mapper\LocationMapper;
use Id90travel\infra\src\main\restClient\hotel\adapter\HotelRestClientImpl;
use Id90travel\infra\src\main\restClient\hotel\contract\HotelRestClient;
use Id90travel\infra\src\main\restClient\hotel\mapper\AccommodationTypeMapper;
use Id90travel\infra\src\main\restClient\hotel\mapper\DistanceToAirportMapper;
use Id90travel\infra\src\main\restClient\hotel\mapper\FeatureMapper;
use Id90travel\infra\src\main\restClient\hotel\mapper\HotelFilterMapper;
use Id90travel\infra\src\main\restClient\hotel\mapper\HotelMapper;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class HotelTest extends TestCase
{
    private static HotelFilterMapper $hotelFilterMapper;
    private static HotelMapper $hotelMapper;
    private static LocationMapper $locationMapper;
    private static FeatureMapper $featureMapper;
    private static DistanceToAirportMapper $distanceToAirportMapper;
    private static AccommodationTypeMapper $accommodationTypeMapper;

    /**
     * @test
     */
    public function findAllHotels()
    {
        $locationMapper = $this->getLocationMapper();
        $featureMapper = $this->getFeatureMapper();
        $distanceToAirportMapper = $this->getDistanceToAirportMapper();
        $accommodationTypeMapper = $this->getAccommodationTypeMapper();
        $hotelFilterMapper = $this->getHotelFilterMapper();
        $hotelMapper = $this->getHotelMapper($locationMapper, $featureMapper, $accommodationTypeMapper, $distanceToAirportMapper);
        $curlHttpRequestMock = $this->getCurlRequestMock();
        /** @noinspection PhpParamsInspection */
        $hotelRestClientMock = new HotelRestClient(new CurlRequest());
        $hotelRestClientImplMock = new HotelRestClientImpl($hotelRestClientMock, $hotelMapper, $hotelFilterMapper);
        $builder = new HotelFilterBuilder(2, "2020-10-24", "2020-10-25", "cancun");
        $hotels = $hotelRestClientImplMock->findAllHotels($builder->build());
        $this->assertNotEmpty($hotels);

    }

    /**
     * @return MockObject
     */
    private function getCurlRequestMock(): MockObject
    {
        return $this->createMock(HttpRequest::class);
    }

    /**
     * @return AccommodationTypeMapper
     */
    private function getAccommodationTypeMapper(): AccommodationTypeMapper
    {
        if (!isset($this::$accommodationTypeMapper)) {
            return $this::$accommodationTypeMapper = new AccommodationTypeMapper();
        }
        return $this::$accommodationTypeMapper;
    }


    /**
     * @return DistanceToAirportMapper
     */
    private function getDistanceToAirportMapper(): DistanceToAirportMapper
    {
        if (!isset($this::$distanceToAirportMapper)) {
            return $this::$distanceToAirportMapper = new DistanceToAirportMapper();
        }
        return $this::$distanceToAirportMapper;
    }


    /**
     * @return FeatureMapper
     */
    private function getFeatureMapper(): FeatureMapper
    {
        if (!isset($this::$featureMapper)) {
            return $this::$featureMapper = new FeatureMapper();
        }
        return $this::$featureMapper;
    }


    /**
     * @return LocationMapper
     */
    private function getLocationMapper(): LocationMapper
    {
        if (!isset($this::$locationMapper)) {
            return $this::$locationMapper = new LocationMapper();
        }
        return $this::$locationMapper;
    }


    /**
     * @return HotelFilterMapper
     */
    private function getHotelFilterMapper(): HotelFilterMapper
    {
        if (!isset($this::$hotelFilterMapper)) {
            return $this::$hotelFilterMapper = new HotelFilterMapper();
        }
        return $this::$hotelFilterMapper;
    }

    /**
     * @param LocationMapper $locationMapper
     * @param FeatureMapper $featureMapper
     * @param AccommodationTypeMapper $accommodationTypeMapper
     * @param DistanceToAirportMapper $distanceToAirportMapper
     * @return HotelMapper
     */
    private function getHotelMapper(LocationMapper $locationMapper, FeatureMapper $featureMapper, AccommodationTypeMapper $accommodationTypeMapper, DistanceToAirportMapper $distanceToAirportMapper): HotelMapper
    {
        if (!isset($this::$hotelMapper)) {
            return $this::$hotelMapper = new HotelMapper($locationMapper, $featureMapper, $accommodationTypeMapper, $distanceToAirportMapper);
        }
        return $this::$hotelMapper;
    }

}