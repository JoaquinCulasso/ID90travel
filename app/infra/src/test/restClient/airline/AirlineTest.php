<?php

declare(strict_types=1);

namespace Id90travel\infra\src\test\restClient\airline;

use Id90travel\core\src\main\common\exception\IdAirlineDomainException;
use Id90travel\infra\src\main\common\http\HttpRequest;
use Id90travel\infra\src\main\restClient\airline\contract\AirlineRestClient;
use Id90travel\infra\src\main\restClient\airline\adapter\AirlineRestClientImpl;
use Id90travel\infra\src\main\restClient\airline\mapper\AirlineMapper;
use PHPUnit\Framework\MockObject\MockObject;
use \PHPUnit\Framework\TestCase;

class AirlineTest extends TestCase
{

    private static AirlineMapper $airlineMapper;

    /**
     * @test
     * @throws IdAirlineDomainException
     */
    public function findAllAirlinesSuccess()
    {
        $airlineMapper = $this->getAirlineMapper();

        $curlHttpRequestMock = $this->getCurlRequestMock();
        /** @noinspection PhpParamsInspection */
        $airlineRestClientMock = new AirlineRestClient($curlHttpRequestMock);
        $curlHttpRequestMock->method('execute')->willReturn(file_get_contents(APP_DIRECTORY . '/infra/src/test/resource/json/findAllAirlineResponse.json'));
        /** @noinspection PhpParamsInspection */
        $airlineRestClientImpl = new AirlineRestClientImpl($airlineRestClientMock, $airlineMapper);
        $airlines = $airlineRestClientImpl->findAllAirlines();
        $this->assertNotEmpty($airlines, 'Array of airlines is empty');
        $this->assertCount(883, $airlines, 'The item number is different');

//        $airlinesDTOs = array();
//        foreach ($airlines as $value) {
//            $airlinesDTOs[] =  $airlineMapper->mapToDTO($value);
//        }
//        $encode = json_encode($airlinesDTOs);
//        $this->assertStringContainsString('AMERICAN AIRLINES (AA)', json_encode($airlinesDTOs), 'Not exists AMERICAN AIRLINES (AA)');
//        $this->assertStringContainsString('AIR AUSTRAL (UU)', json_encode($airlinesDTOs), 'Not exists AIR AUSTRAL (UU)');
//        $this->assertStringContainsString('VIRGIN ATLANTIC AIRWAYS (VS)', json_encode($airlinesDTOs), 'Not exists VIRGIN ATLANTIC AIRWAYS (VS)');
    }

    /**
     * @test
     */
    public function findAllAirlinesDomainException()
    {
        $airlineMapper = $this->getAirlineMapper();

        $curlHttpRequestMock = $this->getCurlRequestMock();
        /** @noinspection PhpParamsInspection */
        $airlineRestClientMock = new AirlineRestClient($curlHttpRequestMock);
        $curlHttpRequestMock->method('execute')->willReturn(file_get_contents(APP_DIRECTORY . '/infra/src/test/resource/json/findAllAirlineInvalidResponse.json'));
        /** @noinspection PhpParamsInspection */
        $airlineRestClientImpl = new AirlineRestClientImpl($airlineRestClientMock, $airlineMapper);
        $this->expectException(IdAirlineDomainException::class);
        $airlineRestClientImpl->findAllAirlines();
    }


    /**
     * @return MockObject
     */
    private function getAirlineRestClientMock(): MockObject
    {
        return $this->createMock(AirlineRestClient::class);
    }

    /**
     * @return MockObject
     */
    private function getAirlineClientRestMock(): MockObject
    {
        return $this->createMock(AirlineRestClient::class);
    }

    /**
     * @return MockObject
     */
    private function getCurlRequestMock(): MockObject
    {
        return $this->createMock(HttpRequest::class);
    }

    /**
     * @return AirlineMapper
     */
    private function getAirlineMapper(): AirlineMapper
    {
        if (!isset($this::$airlineMapper)) {
            return $this::$airlineMapper = new AirlineMapper();
        }
        return $this::$airlineMapper;
    }

}