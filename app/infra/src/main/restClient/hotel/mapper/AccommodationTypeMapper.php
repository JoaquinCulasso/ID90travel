<?php

namespace Id90travel\infra\src\main\restClient\hotel\mapper;

use Id90travel\core\src\main\rest\hotel\model\AccommodationType;
use Id90travel\infra\src\main\common\exception\DtoToDomainException;
use Id90travel\infra\src\main\common\mapper\AbstractMapper;
use Id90travel\infra\src\main\restClient\hotel\dto\AccommodationTypeDTO;

class AccommodationTypeMapper implements AbstractMapper
{

    /**
     * @param object $T
     * @return AccommodationType
     */
    function mapToDomain(object $T): AccommodationType
    {
        if ($T instanceof AccommodationTypeDTO) {
            return new AccommodationType(
                $T->getId(),
                $T->getType()
            );
        }
        throw new DtoToDomainException('Exception converting DTO to DOMAIN accommodation type ' . $T);
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