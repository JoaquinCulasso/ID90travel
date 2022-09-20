<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\restClient\hotel\adapter;

use Id90travel\core\src\main\common\exception\IdHotelDomainException;
use Id90travel\core\src\main\rest\hotel\contract\HotelClient;
use Id90travel\core\src\main\rest\hotel\model\Hotel;
use Id90travel\core\src\main\rest\hotel\model\HotelFilter;
use Id90travel\infra\src\main\common\exception\DomainToDtoException;
use Id90travel\infra\src\main\restClient\hotel\contract\HotelRestClient;
use Id90travel\infra\src\main\restClient\hotel\mapper\HotelFilterMapper;
use Id90travel\infra\src\main\restClient\hotel\mapper\HotelMapper;

class HotelRestClientImpl implements HotelClient
{

    private HotelRestClient $hotelRestClient;
    private HotelMapper $hotelMapper;
    private HotelFilterMapper $hotelFilterMapper;


    /**
     * @param HotelRestClient $hotelRestClient
     * @param HotelMapper $hotelMapper
     * @param HotelFilterMapper $hotelFilterMapper
     */
    public function __construct(HotelRestClient $hotelRestClient, HotelMapper $hotelMapper, HotelFilterMapper $hotelFilterMapper)
    {
        $this->hotelRestClient = $hotelRestClient;
        $this->hotelMapper = $hotelMapper;
        $this->hotelFilterMapper = $hotelFilterMapper;
    }


    /**
     * @param HotelFilter $hotelFilter
     * @return Hotel[]
     * @throws DomainToDtoException
     * @throws IdHotelDomainException
     */
    function findAllHotels(HotelFilter $hotelFilter): array
    {

        if($hotelFilter->getGuests() < 1 || $hotelFilter->getGuests() > 4){
            throw new \DomainException("number guest error, between 1 and 4");
        }

        $hotelDTOS = $this->hotelRestClient->findAllHotels($this->hotelFilterMapper->mapToDTO($hotelFilter));
        $hotels = array();
        foreach ($hotelDTOS as $hotel) {
            $hotels[] = $this->hotelMapper->mapToDomain($hotel);
        }
        return $hotels;
    }

}