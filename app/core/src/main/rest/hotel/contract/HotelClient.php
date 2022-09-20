<?php

declare(strict_types=1);

namespace Id90travel\core\src\main\rest\hotel\contract;

use Id90travel\core\src\main\rest\hotel\model\Hotel;
use Id90travel\core\src\main\rest\hotel\model\HotelFilter;

interface HotelClient
{

    /**
     * @param HotelFilter $hotelFilter
     * @return Hotel[]
     */
    function findAllHotels(HotelFilter $hotelFilter) : array;

}