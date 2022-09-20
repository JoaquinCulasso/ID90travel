<?php

declare(strict_types=1);

namespace Id90travel\core\src\main\rest\hotel\model;

class HotelFilterBuilder
{

    private HotelFilter $hotelFilter;

    /**
     * @param int $guests
     * @param string $checkin
     * @param string $checkout
     * @param string $destination
     */
    public function __construct(int $guests, string $checkin, string $checkout, string $destination)
    {
        $this->hotelFilter = new HotelFilter($guests, $checkin, $checkout, $destination);
    }

    /**
     * @param int $guests
     */
    public function setGuests(int $guests)
    {
        $this->hotelFilter->setGuests($guests);
        return $this;
    }

    /**
     * @param string $checkin
     */
    public function setCheckin(string $checkin)
    {
        $this->hotelFilter->setCheckin($checkin);
        return $this;
    }

    /**
     * @param string $checkout
     */
    public function setCheckout(string $checkout)
    {
        $this->hotelFilter->setCheckout($checkout);
        return $this;
    }

    /**
     * @param string $destination
     */
    public function setDestination(string $destination)
    {
        $this->hotelFilter->setDestination($destination);
        return $this;
    }

    /**
     * @param mixed $keyword
     */
    public function setKeyword($keyword)
    {
        $this->hotelFilter->setKeyword($keyword);
        return $this;
    }

    /**
     * @param int $rooms
     */
    public function setRooms(int $rooms)
    {
        $this->hotelFilter->setRooms($rooms);
        return $this;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->hotelFilter->setLongitude($longitude);
        return $this;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->hotelFilter->setLatitude($latitude);
        return $this;
    }

    /**
     * @param string $sort_criteria
     */
    public function setSortCriteria(string $sort_criteria)
    {
        $this->hotelFilter->setSortCriteria($sort_criteria);
        return $this;
    }

    /**
     * @param string $sort_order
     */
    public function setSortOrder(string $sort_order)
    {
        $this->hotelFilter->setSortOrder($sort_order);
        return $this;
    }

    /**
     * @param int $per_page
     */
    public function setPerPage(int $per_page)
    {
        $this->hotelFilter->setPerPage($per_page);
        return $this;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page)
    {
        $this->hotelFilter->setPage($page);
        return $this;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency)
    {
        $this->hotelFilter->setCurrency($currency);
        return $this;
    }

    /**
     * @param mixed $price_low
     */
    public function setPriceLow($price_low)
    {
        $this->hotelFilter->setPriceLow($price_low);
        return $this;
    }

    /**
     * @param mixed $price_high
     */
    public function setPriceHigh($price_high)
    {
        $this->hotelFilter->setPriceHigh($price_high);
        return $this;
    }


    public function build(): HotelFilter
    {
        return $this->hotelFilter;
    }


}