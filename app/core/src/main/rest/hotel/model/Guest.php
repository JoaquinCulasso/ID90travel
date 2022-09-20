<?php

declare(strict_types=1);

namespace Id90travel\core\src\main\rest\hotel\model;

class Guest
{
    private OverallRating $overallRating;
    public array $ratings; //"ratings": [{"count": 199,"overall": 7.3,"overallCategory": "very_good","provider": "ID90"}]

    /**
     * @param OverallRating $overallRating
     * @param array $ratings
     */
    public function __construct(OverallRating $overallRating, array $ratings)
    {
        $this->overallRating = $overallRating;
        $this->ratings = $ratings;
    }

    /**
     * @return OverallRating
     */
    public function getOverallRating(): OverallRating
    {
        return $this->overallRating;
    }

    /**
     * @param OverallRating $overallRating
     */
    public function setOverallRating(OverallRating $overallRating): void
    {
        $this->overallRating = $overallRating;
    }

    /**
     * @return array
     */
    public function getRatings(): array
    {
        return $this->ratings;
    }

    /**
     * @param array $ratings
     */
    public function setRatings(array $ratings): void
    {
        $this->ratings = $ratings;
    }

}