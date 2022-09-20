<?php

namespace Id90travel\web\dto;

class AirlineLoginDTO implements \JsonSerializable
{

    private string $display_name;

    /**
     * @param string $display_name
     */
    public function __construct(string $display_name)
    {
        $this->display_name = $display_name;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->display_name;
    }

    public function jsonSerialize(): mixed
    {
        return [
            'airline' => $this->display_name
        ];
    }
}