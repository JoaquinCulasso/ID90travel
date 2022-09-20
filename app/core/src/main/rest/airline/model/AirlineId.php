<?php

declare(strict_types=1);

namespace Id90travel\core\src\main\rest\airline\model;

use Id90travel\core\src\main\common\exception\IdAirlineDomainException;

class AirlineId
{
    private int $id;

    /**
     * @param int $id
     * @throws IdAirlineDomainException
     */
    public function __construct(int $id)
    {
        if($id < 0) {
            throw new IdAirlineDomainException('Airline id is invalid ' . $id);
        }
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @throws IdAirlineDomainException
     */
    public function setId(int $id): void
    {
        if($id < 0) {
            throw new IdAirlineDomainException('Airline id is invalid ' . $id);
        }

        $this->id = $id;
    }
}