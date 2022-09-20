<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\restClient\hotel\dto;

class FeatureDTO
{

    private int $booking_count;
    private string $latest_booking_date;
    private int $viewing_count;
    private string $latest_viewing_date;
    private float $conversion_score;
    private float $ranking_score;
    private float $revenue_score;
    private float $geography_score;
    private int $best_seller_rank;
    private string $id;

    /**
     * @param int $booking_count
     * @param string $latest_booking_date
     * @param int $viewing_count
     * @param string $latest_viewing_date
     * @param float $conversion_score
     * @param float $ranking_score
     * @param float $revenue_score
     * @param float $geography_score
     * @param int $best_seller_rank
     * @param string $id
     */
    public function __construct(int $booking_count, string $latest_booking_date, int $viewing_count, string $latest_viewing_date, float $conversion_score, float $ranking_score, float $revenue_score, float $geography_score, int $best_seller_rank, string $id)
    {
        $this->booking_count = $booking_count;
        $this->latest_booking_date = $latest_booking_date;
        $this->viewing_count = $viewing_count;
        $this->latest_viewing_date = $latest_viewing_date;
        $this->conversion_score = $conversion_score;
        $this->ranking_score = $ranking_score;
        $this->revenue_score = $revenue_score;
        $this->geography_score = $geography_score;
        $this->best_seller_rank = $best_seller_rank;
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getBookingCount(): int
    {
        return $this->booking_count;
    }

    /**
     * @param int $booking_count
     */
    public function setBookingCount(int $booking_count): void
    {
        $this->booking_count = $booking_count;
    }

    /**
     * @return string
     */
    public function getLatestBookingDate(): string
    {
        return $this->latest_booking_date;
    }

    /**
     * @param string $latest_booking_date
     */
    public function setLatestBookingDate(string $latest_booking_date): void
    {
        $this->latest_booking_date = $latest_booking_date;
    }

    /**
     * @return int
     */
    public function getViewingCount(): int
    {
        return $this->viewing_count;
    }

    /**
     * @param int $viewing_count
     */
    public function setViewingCount(int $viewing_count): void
    {
        $this->viewing_count = $viewing_count;
    }

    /**
     * @return string
     */
    public function getLatestViewingDate(): string
    {
        return $this->latest_viewing_date;
    }

    /**
     * @param string $latest_viewing_date
     */
    public function setLatestViewingDate(string $latest_viewing_date): void
    {
        $this->latest_viewing_date = $latest_viewing_date;
    }

    /**
     * @return float
     */
    public function getConversionScore(): float
    {
        return $this->conversion_score;
    }

    /**
     * @param float $conversion_score
     */
    public function setConversionScore(float $conversion_score): void
    {
        $this->conversion_score = $conversion_score;
    }

    /**
     * @return float
     */
    public function getRankingScore(): float
    {
        return $this->ranking_score;
    }

    /**
     * @param float $ranking_score
     */
    public function setRankingScore(float $ranking_score): void
    {
        $this->ranking_score = $ranking_score;
    }

    /**
     * @return float
     */
    public function getRevenueScore(): float
    {
        return $this->revenue_score;
    }

    /**
     * @param float $revenue_score
     */
    public function setRevenueScore(float $revenue_score): void
    {
        $this->revenue_score = $revenue_score;
    }

    /**
     * @return float
     */
    public function getGeographyScore(): float
    {
        return $this->geography_score;
    }

    /**
     * @param float $geography_score
     */
    public function setGeographyScore(float $geography_score): void
    {
        $this->geography_score = $geography_score;
    }

    /**
     * @return int
     */
    public function getBestSellerRank(): int
    {
        return $this->best_seller_rank;
    }

    /**
     * @param int $best_seller_rank
     */
    public function setBestSellerRank(int $best_seller_rank): void
    {
        $this->best_seller_rank = $best_seller_rank;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param $json
     * @return FeatureDTO
     */
    public static function fromJson($json): FeatureDTO
    {
        return new self(
            array_key_exists('booking_count', $json) ? $json['booking_count'] : 0,
            array_key_exists('latest_booking_date', $json) ? $json['latest_booking_date'] : '',
            array_key_exists('viewing_count', $json) ? $json['viewing_count'] : 0,
            array_key_exists('latest_viewing_date', $json) ? $json['latest_viewing_date'] : '',
            array_key_exists('conversion_score', $json)  ? $json['conversion_score'] : 0,
            $json['ranking_score'],
            $json['revenue_score'],
            $json['geography_score'],
            (int)empty($json['best_seller_rank']),
            array_key_exists('id', $json) ? $json['id'] : ''
        );
    }


}