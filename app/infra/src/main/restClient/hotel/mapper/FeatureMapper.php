<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\restClient\hotel\mapper;

use Id90travel\core\src\main\rest\hotel\model\Feature;
use Id90travel\infra\src\main\common\exception\DtoToDomainException;
use Id90travel\infra\src\main\common\mapper\AbstractMapper;
use Id90travel\infra\src\main\restClient\hotel\dto\FeatureDTO;

class FeatureMapper implements AbstractMapper
{

    function mapToDomain(object $T)
    {
        if ($T instanceof FeatureDTO) {
            return new Feature(
                $T->getBookingCount(),
                $T->getLatestBookingDate(),
                $T->getViewingCount(),
                $T->getLatestViewingDate(),
                $T->getConversionScore(),
                $T->getRankingScore(),
                $T->getRevenueScore(),
                $T->getGeographyScore(),
                $T->getBestSellerRank(),
                $T->getId()
            );
        }
        throw new DtoToDomainException('Exception converting DTO to DOMAIN feature ' . $T);
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