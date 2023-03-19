<?php

declare(strict_types=1);

namespace Id90travel\web\controller;

use Exception;
use Id90travel\core\src\main\common\exception\HotelsNotFoundException;
use Id90travel\core\src\main\rest\hotel\model\HotelFilter;
use Id90travel\core\src\main\rest\hotel\model\HotelFilterBuilder;
use Id90travel\core\src\main\rest\hotel\service\ConsultHotel;
use Id90travel\infra\src\main\restClient\hotel\dto\HotelDTO;

class HotelController
{

    private ConsultHotel $consultHotel;

    /**
     * @param ConsultHotel $consultHotel
     */
    public function __construct(ConsultHotel $consultHotel)
    {
        $this->consultHotel = $consultHotel;
    }

    /**
     * @throws HotelsNotFoundException
     * @throws Exception
     */
    public function findAllHotels($json)
    {
        $hotelFilter = $this->buildHotelFilter($json);
        $hotels = $this->consultHotel->findAllHotels($hotelFilter);
        $hotelDTOS = array();
        foreach ($hotels as $hotel) {
            $hotelDTOS[] = HotelDTO::fromDomain($hotel);
        }

        header('Content-Type: application/json; charset=utf-8');
        http_response_code(200);
        echo json_encode($hotelDTOS);
        exit();
    }

    /**
     * @throws Exception
     */
    private function buildHotelFilter($json): HotelFilter
    {
        $guests = (int)$json['guests'][0] ?? throw new Exception();
        $checkin = $json['checkin'] ?? throw new Exception();
        $checkout = $json['checkout'] ?? throw new Exception();
        $destination = $json['destination'] ?? throw new Exception();
        $builder = new HotelFilterBuilder($guests, $checkin, $checkout, $destination);
        if (!empty($keyword)) $builder->setKeyword($keyword);
        if (!empty($rooms)) $builder->setRooms($rooms);
        if (!empty($longitude)) $builder->setLongitude($longitude);
        if (!empty($latitude)) $builder->setLatitude($latitude);
        if (!empty($sort_criteria)) $builder->setSortCriteria($sort_criteria);
        if (!empty($sort_order)) $builder->setSortOrder($sort_order);
        if (!empty($per_page)) $builder->setPerPage($per_page);
        if (!empty($page)) $builder->setPage($page);
        if (!empty($currency)) $builder->setCurrency($currency);
        if (!empty($price_low)) $builder->setPriceLow($price_low);
        if (!empty($price_high)) $builder->setPriceHigh($price_high);
        return $builder->build();
    }


}