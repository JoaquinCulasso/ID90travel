<?php

namespace Id90travel\infra\src\main\restClient\hotel\dto;

class AccommodationTypeDTO
{
    private int $id;
    private string $type;

    /**
     * @param int $id
     * @param string $type
     */
    public function __construct(int $id, string $type)
    {
        $this->id = $id;
        $this->type = $type;
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
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param $json
     * @return AccommodationTypeDTO
     */
    public static function fromJson($json): AccommodationTypeDTO
    {
        return new self(
            $json['id'] ?? 0,
            $json['type'] ?? ''
        );

    }


}