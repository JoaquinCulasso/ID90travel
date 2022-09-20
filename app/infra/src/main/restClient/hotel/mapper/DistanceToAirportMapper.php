<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\restClient\hotel\mapper;

use Id90travel\core\src\main\rest\hotel\model\DistanceToAirport;
use Id90travel\infra\src\main\common\exception\DtoToDomainException;
use Id90travel\infra\src\main\common\mapper\AbstractMapper;
use Id90travel\infra\src\main\restClient\hotel\dto\DistanceToAirportDTO;

class DistanceToAirportMapper implements AbstractMapper
{

    /**
     * @param object $T
     * @return DistanceToAirport
     */
    function mapToDomain(object $T): DistanceToAirport
    {
        if ($T instanceof DistanceToAirportDTO) {
            return new DistanceToAirport(
                $T->getCun(),
                $T->getCzm()
            );
        }
        throw new DtoToDomainException('Exception converting DTO to DOMAIN distance to airport ' . $T);
    }

    function mapToEntity(object $T)
    {
        // TODO: Implement mapToEntity() method.
    }

    function mapToDTO(object $T)
    {
        // TODO: Implement mapToDTO() method.
    }
}