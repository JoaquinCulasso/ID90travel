<?php

declare(strict_types=1);

namespace Id90travel\core\src\main\rest\hotel\model;

class AccommodationType
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

}