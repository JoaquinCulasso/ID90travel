<?php

declare(strict_types=1);

namespace Id90travel\core\src\main\rest\hotel\model;

class HotelFilter
{
    private int $guests;
    private string $checkin;
    private string $checkout;
    private string $destination;
    private string $keyword;
    private int $rooms;
    private float $longitude;
    private float $latitude;
    private string $sort_criteria;
    private string $sort_order;
    private int $per_page;
    private int $page;
    private string $currency;
    private float $price_low;
    private float $price_high;

    /**
     * @param int $guests
     * @param string $checkin
     * @param string $checkout
     * @param string $destination
     */
    public function __construct(int $guests, string $checkin, string $checkout, string $destination)
    {
        $this->guests = $guests;
        $this->checkin = $checkin;
        $this->checkout = $checkout;
        $this->destination = $destination;
    }

    /**
     * @return int
     */
    public function getGuests(): int
    {
        return $this->guests;
    }

    /**
     * @param int $guests
     */
    public function setGuests(int $guests): void
    {
        $this->guests = $guests;
    }

    /**
     * @return string
     */
    public function getCheckin(): string
    {
        return $this->checkin;
    }

    /**
     * @param string $checkin
     */
    public function setCheckin(string $checkin): void
    {
        $this->checkin = $checkin;
    }

    /**
     * @return string
     */
    public function getCheckout(): string
    {
        return $this->checkout;
    }

    /**
     * @param string $checkout
     */
    public function setCheckout(string $checkout): void
    {
        $this->checkout = $checkout;
    }

    /**
     * @return string
     */
    public function getDestination(): string
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     */
    public function setDestination(string $destination): void
    {
        $this->destination = $destination;
    }

    /**
     * @return string
     */
    public function getKeyword(): string
    {
        return $this->keyword ?? '';
    }

    /**
     * @param string $keyword
     */
    public function setKeyword(string $keyword): void
    {
        $this->keyword = $keyword;
    }

    /**
     * @return int
     */
    public function getRooms(): int
    {
        return $this->rooms ?? 0;
    }

    /**
     * @param int $rooms
     */
    public function setRooms(int $rooms): void
    {
        $this->rooms = $rooms;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude ?? 0;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude ?? 0;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return string
     */
    public function getSortCriteria(): string
    {
        return $this->sort_criteria ?? '';
    }

    /**
     * @param string $sort_criteria
     */
    public function setSortCriteria(string $sort_criteria): void
    {
        $this->sort_criteria = $sort_criteria;
    }

    /**
     * @return string
     */
    public function getSortOrder(): string
    {
        return $this->sort_order ?? '';
    }

    /**
     * @param string $sort_order
     */
    public function setSortOrder(string $sort_order): void
    {
        $this->sort_order = $sort_order;
    }

    /**
     * @return int
     */
    public function getPerPage(): int
    {
        return $this->per_page ?? 0;
    }

    /**
     * @param int $per_page
     */
    public function setPerPage(int $per_page): void
    {
        $this->per_page = $per_page;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page ?? 0;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency ?? '';
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return float
     */
    public function getPriceLow(): float
    {
        return $this->price_low ?? 0;
    }

    /**
     * @param float $price_low
     */
    public function setPriceLow(float $price_low): void
    {
        $this->price_low = $price_low;
    }

    /**
     * @return float
     */
    public function getPriceHigh(): float
    {
        return $this->price_high ?? 0;
    }

    /**
     * @param float $price_high
     */
    public function setPriceHigh(float $price_high): void
    {
        $this->price_high = $price_high;
    }

}