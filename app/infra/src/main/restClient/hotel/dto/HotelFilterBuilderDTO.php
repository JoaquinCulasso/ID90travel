<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\restClient\hotel\dto;

class HotelFilterBuilderDTO
{
    private HotelFilterDTO $hotelFilterDTO;

    public function __construct(int $guests, string $checkin, string $checkout, string $destination)
    {
         $this->hotelFilterDTO = new HotelFilterDTO($guests, $checkin, $checkout, $destination);
    }

    /**
     * @param int $guests
     */
    public function setGuests(int $guests)
    {
        $this->hotelFilterDTO->setGuests($guests);
        return $this;
    }

    /**
     * @param string $checkin
     */
    public function setCheckin(string $checkin)
    {
        $this->hotelFilterDTO->setCheckin($checkin);
        return $this;
    }

    /**
     * @param string $checkout
     */
    public function setCheckout(string $checkout)
    {
        $this->hotelFilterDTO->setCheckout($checkout);
        return $this;
    }

    /**
     * @param string $destination
     */
    public function setDestination(string $destination)
    {
        $this->hotelFilterDTO->setDestination($destination);
        return $this;
    }

    /**
     * @param string $keyword
     */
    public function setKeyword(string $keyword)
    {
        $this->hotelFilterDTO->setKeyword($keyword);
        return $this;
    }

    /**
     * @param int $rooms
     */
    public function setRooms(int $rooms)
    {
        $this->hotelFilterDTO->setRooms($rooms);
        return $this;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude)
    {
        $this->hotelFilterDTO->setLongitude($longitude);
        return $this;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude(float $latitude)
    {
        $this->hotelFilterDTO->setLatitude($latitude);
        return $this;
    }

    /**
     * @param string $sort_criteria
     */
    public function setSortCriteria(string $sort_criteria)
    {
        $this->hotelFilterDTO->setSortCriteria($sort_criteria);
        return $this;
    }

    /**
     * @param string $sort_order
     */
    public function setSortOrder(string $sort_order)
    {
        $this->hotelFilterDTO->setSortOrder($sort_order);
        return $this;
    }

    /**
     * @param int $per_page
     */
    public function setPerPage(int $per_page)
    {
        $this->hotelFilterDTO->setPerPage($per_page);
        return $this;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page)
    {
        $this->hotelFilterDTO->setPage($page);
        return $this;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency)
    {
        $this->hotelFilterDTO->setCurrency($currency);
        return $this;
    }

    /**
     * @param float $price_low
     */
    public function setPriceLow(float $price_low)
    {
        $this->hotelFilterDTO->setPriceLow($price_low);
        return $this;
    }

    /**
     * @param float $price_high
     */
    public function setPriceHigh(float $price_high)
    {
        $this->hotelFilterDTO->setPriceHigh($price_high);
        return $this;
    }

    public function build(): HotelFilterDTO
    {
        return $this->hotelFilterDTO;
    }


}