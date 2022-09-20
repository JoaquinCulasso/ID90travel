<?php

declare(strict_types=1);

namespace Id90travel\core\src\main\rest\hotel\model;

class Rating
{
    private Property $property;
    private Guest $guest;

    /**
     * @param Property $property
     * @param Guest $guest
     */
    public function __construct(Property $property, Guest $guest)
    {
        $this->property = $property;
        $this->guest = $guest;
    }

    /**
     * @return Property
     */
    public function getProperty(): Property
    {
        return $this->property;
    }

    /**
     * @param Property $property
     */
    public function setProperty(Property $property): void
    {
        $this->property = $property;
    }

    /**
     * @return Guest
     */
    public function getGuest(): Guest
    {
        return $this->guest;
    }

    /**
     * @param Guest $guest
     */
    public function setGuest(Guest $guest): void
    {
        $this->guest = $guest;
    }

}