<?php

declare(strict_types=1);

namespace Id90travel\core\src\main\rest\hotel\model;

class Location
{
    private string $city;
    private string $country;
    private string $state;
    private string $region;
    private float $latitude;
    private float $longitude;
    private string $description;

    /**
     * @param string $city
     * @param string $country
     * @param string $state
     * @param string $region
     * @param float $latitude
     * @param float $longitude
     * @param string $description
     */
    public function __construct(string $city, string $country, string $state, string $region, float $latitude, float $longitude, string $description)
    {
        $this->city = $city;
        $this->country = $country;
        $this->state = $state;
        $this->region = $region;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }

    /**
     * @param string $region
     */
    public function setRegion(string $region): void
    {
        $this->region = $region;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

}