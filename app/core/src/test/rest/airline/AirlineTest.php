<?php

declare(strict_types=1);

namespace Id90travel\core\src\test\rest\airline;

use Id90travel\core\src\main\common\exception\AirlinesNotFoundException;
use Id90travel\core\src\main\rest\airline\contract\AirlineClient;
use Id90travel\core\src\main\rest\airline\service\ConsultAirline;
use PHPUnit\Framework\MockObject\MockObject;
use \PHPUnit\Framework\TestCase;

class AirlineTest extends TestCase
{

    /**
     * @test
     * @throws AirlinesNotFoundException
     */
    public function findAllAirlinesNotFound()
    {
        $airClientMock = $this->getAirlineClientMock();
        /** @noinspection PhpParamsInspection */
        $consultAirlines = new ConsultAirline($airClientMock);

        $this->expectException(AirlinesNotFoundException::class);
        $consultAirlines->findAllAirlines();
    }

    /**
     * @test
     * @throws AirlinesNotFoundException
     */
    public function findAllAirlinesSuccess()
    {
        $airClientMock = $this->getAirlineClientMock();
        $airClientMock->method('findAllAirlines')->willReturn(json_decode(file_get_contents(APP_DIRECTORY . "/core/src/test/resource/json/findAllAirlineResponse.json"), true));
        /** @noinspection PhpParamsInspection */
        $consultAirlines = new ConsultAirline($airClientMock);
        $airlines = $consultAirlines->findAllAirlines();
        $this->assertNotEmpty($airlines, 'Array of airlines is empty');
        $this->assertCount(883, $airlines, 'The item number is different');
        $this->assertStringContainsString('AMERICAN AIRLINES (AA)', json_encode($airlines), 'Not exists AMERICAN AIRLINES (AA)');
        $this->assertStringContainsString('AIR AUSTRAL (UU)', json_encode($airlines), 'Not exists AIR AUSTRAL (UU)');
        $this->assertStringContainsString('VIRGIN ATLANTIC AIRWAYS (VS)', json_encode($airlines), 'Not exists VIRGIN ATLANTIC AIRWAYS (VS)');
    }

    /**
     * @return MockObject
     */
    private function getAirlineClientMock(): MockObject
    {
        return $this->createMock(AirlineClient::class);
    }

}