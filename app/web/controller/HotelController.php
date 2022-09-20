<?php

declare(strict_types=1);

namespace Id90travel\web\controller;

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
//int    $guests, string $checkin, string $checkout, string $destination, string $keyword, int $rooms, float $longitude, float $latitude,
//string $sort_criteria, string $sort_order, int $per_page, int $page, string $currency, float $price_low, float $price_high
    public function findAllHotels($json): array
    {

        $hotelFilter = $this->buildHotelFilter($json);

//        $hotelFilter = $this->buildHotelFilter($guests, $checkin, $checkout, $destination, $keyword, $rooms, $longitude, $latitude,
//            $sort_criteria, $sort_order, $per_page, $page, $currency, $price_low, $price_high);

        $hotels = $this->consultHotel->findAllHotels($hotelFilter);

        $hotelDTOS = array();
        foreach ($hotels as $hotel) {
            $hotelDTOS[] = HotelDTO::fromDomain($hotel);
        }
        return $hotelDTOS;
    }

//int    $guests, string $checkin, string $checkout, string $destination, string $keyword, int $rooms, float $longitude, float $latitude,
//string $sort_criteria, string $sort_order, int $per_page, int $page, string $currency, float $price_low, float $price_high
    private function buildHotelFilter($json): HotelFilter
    {
        $guests = empty($json['guests']) ? throw new Exception() : (int) $json['guests'];
        $checkin = empty($json['checkin']) ? throw new \Exception() : $json['checkin'];
        $checkout = empty($json['checkout']) ? throw new \Exception() : $json['checkout'];
        $destination = empty($json['destination']) ? throw new \Exception() : $json['destination'];
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