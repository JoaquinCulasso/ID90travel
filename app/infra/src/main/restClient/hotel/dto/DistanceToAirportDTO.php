<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\restClient\hotel\dto;

class DistanceToAirportDTO
{
    private float $cun;
    private float $czm;


    /**
     * @param float $cun
     * @param float $czm
     */
    public function __construct(float $cun, float $czm)
    {
        $this->cun = $cun;
        $this->czm = $czm;
    }

    /**
     * @return float
     */
    public function getCun(): float
    {
        return $this->cun;
    }

    /**
     * @param float $cun
     */
    public function setCun(float $cun): void
    {
        $this->cun = $cun;
    }

    /**
     * @return float
     */
    public function getCzm(): float
    {
        return $this->czm;
    }

    /**
     * @param float $czm
     */
    public function setCzm(float $czm): void
    {
        $this->czm = $czm;
    }

    public static function fromJson($json): DistanceToAirportDTO
    {
        return new self(
            array_key_exists('CUN', $json) ? $json['CUN'] : 0,
            array_key_exists('CZM', $json) ? $json['CZM'] : 0
        );
    }

}