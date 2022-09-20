<?php

declare(strict_types=1);

namespace Id90travel\core\src\main\rest\hotel\service;

use Id90travel\core\src\main\common\exception\HotelsNotFoundException;
use Id90travel\core\src\main\rest\hotel\contract\HotelClient;
use Id90travel\core\src\main\rest\hotel\model\Hotel;
use Id90travel\core\src\main\rest\hotel\model\HotelFilter;

/**
 * Use case consult hotels
 */
class ConsultHotel
{

    private HotelClient $hotelClient;

    /**
     * @param HotelClient $hotelClient
     */
    public function __construct(HotelClient $hotelClient)
    {
        $this->hotelClient = $hotelClient;
    }

    /**
     * @param HotelFilter $hotelFilter
     * @return Hotel[]
     * @throws HotelsNotFoundException
     */
    public function findAllHotels(HotelFilter $hotelFilter) : array
    {
        $hotels = $this->hotelClient->findAllHotels($hotelFilter);
        if(empty($hotels)){
            throw new HotelsNotFoundException('Hotels not found');
        }
        return $hotels;


    }


}