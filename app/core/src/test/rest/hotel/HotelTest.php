<?php

declare(strict_types=1);

namespace Id90travel\core\src\test\rest\hotel;

use Id90travel\core\src\main\common\exception\HotelsNotFoundException;
use Id90travel\core\src\main\rest\hotel\contract\HotelClient;
use Id90travel\core\src\main\rest\hotel\model\HotelFilter;
use Id90travel\core\src\main\rest\hotel\service\ConsultHotel;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class HotelTest extends TestCase
{

    /**
     * @test
     * @throws HotelsNotFoundException
     */
    public function findAllHotelsNotFound()
    {
        $hotelClientMock = $this->getHotelClientMock();
        $hotelFilter = $this->getHotelFilterMock();
        /** @noinspection PhpParamsInspection */
        $consultHotel = new ConsultHotel($hotelClientMock);
        $this->expectException(HotelsNotFoundException::class);
        $this->expectExceptionMessage("Hotels not found");
        /** @noinspection PhpParamsInspection */
        $consultHotel->findAllHotels($hotelFilter);
    }

    /**
     * @test
     * @throws HotelsNotFoundException
     */
    public function findAllHotelsSuccess()
    {
        $hotelClientMock = $this->getHotelClientMock();
        $hotelClientMock->method('findAllHotels')->willReturn(json_decode(file_get_contents(APP_DIRECTORY . "/core/src/test/resource/json/findAllHotelsResponse.json"), true));
        $hotelFilter = $this->getHotelFilterMock();
        /** @noinspection PhpParamsInspection */
        $consultHotel = new ConsultHotel($hotelClientMock);
        /** @noinspection PhpParamsInspection */
        $hotels = $consultHotel->findAllHotels($hotelFilter);
        $this->assertNotEmpty($hotels, 'Array of hotel is empty');
        $this->assertCount(25, $hotels, "The item number is different");
        $this->assertStringContainsString('Aloft  Cancun [HBDPKG]', json_encode($hotels), 'Not exists Aloft  Cancun [HBDPKG]');
        $this->assertStringContainsString('Krystal Grand Cancun [PCNPKG]', json_encode($hotels), 'Not exists Krystal Grand Cancun [PCNPKG]');
    }


    /**
     * @return MockObject
     */
    private function getHotelClientMock(): MockObject
    {
        return $this->createMock(HotelClient::class);
    }

    /**
     * @return MockObject
     */
    private function getHotelFilterMock(): MockObject
    {
        return $this->createMock(HotelFilter::class);
    }
}