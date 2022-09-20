<?php

declare(strict_types=1);

namespace Id90travel\core\src\main\rest\hotel\model;

class OverallRating
{

    private string $type;
    private int $value;
    private string $provider;

    /**
     * @param string $type
     * @param int $value
     * @param string $provider
     */
    public function __construct(string $type, int $value, string $provider)
    {
        $this->type = $type;
        $this->value = $value;
        $this->provider = $provider;
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
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(int $value): void
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getProvider(): string
    {
        return $this->provider;
    }

    /**
     * @param string $provider
     */
    public function setProvider(string $provider): void
    {
        $this->provider = $provider;
    }

}