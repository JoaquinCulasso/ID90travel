<?php

declare(strict_types=1);

namespace Id90travel\core\src\main\rest\hotel\model;

use Id90travel\core\src\main\common\exception\IdHotelDomainException;

class HotelId
{

    private string $id;

    /**
     * @param string $id
     * @throws IdHotelDomainException
     */
    public function __construct(string $id)
    {
        if(empty($id)) {
            throw new IdHotelDomainException('Hotel id is invalid ' . $id);
        }
        $this->id = $id;
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
     * @throws IdHotelDomainException
     */
    public function setId(string $id): void
    {
        if(empty($id)) {
            throw new IdHotelDomainException('Hotel id is invalid ' . $id);
        }

        $this->id = $id;
    }
}