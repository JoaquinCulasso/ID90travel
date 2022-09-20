<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\restClient\auth\mapper;

use Id90travel\core\src\main\rest\hotel\model\Location;
use Id90travel\infra\src\main\common\exception\DtoToDomainException;
use Id90travel\infra\src\main\common\mapper\AbstractMapper;
use Id90travel\infra\src\main\restClient\hotel\dto\LocationDTO;

class LocationMapper implements AbstractMapper
{

    /**
     * @param object $T
     * @return Location
     */
    function mapToDomain(object $T): Location
    {
        if ($T instanceof LocationDTO) {
            return new Location(
                $T->getCity(),
                $T->getCountry(),
                $T->getState(),
                $T->getRegion(),
                $T->getLatitude(),
                $T->getLongitude(),
                $T->getDescription()
            );
        }
        throw new DtoToDomainException('Exception converting DTO to DOMAIN location ' . $T);
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