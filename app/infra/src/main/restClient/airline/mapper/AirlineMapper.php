<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\restClient\airline\mapper;

use Id90travel\core\src\main\common\exception\IdAirlineDomainException;
use Id90travel\infra\src\main\common\exception\DomainToDtoException;
use Id90travel\infra\src\main\common\exception\DtoToDomainException;
use Id90travel\infra\src\main\common\mapper\AbstractMapper;
use Id90travel\core\src\main\rest\airline\model\Airline;
use Id90travel\core\src\main\rest\airline\model\AirlineId;
use Id90travel\infra\src\main\restClient\airline\dto\AirlineDTO;

class AirlineMapper implements AbstractMapper
{

    /**
     * @param object $T
     * @return Airline
     * @throws DtoToDomainException
     * @throws IdAirlineDomainException
     */
    function mapToDomain(object $T): Airline
    {
        if ($T instanceof AirlineDTO) {
            return new Airline(
                new AirlineId($T->getId()),
                $T->getName(),
                $T->getCode(),
                $T->isSignInAvailable(),
                $T->isSignUpAvailable(),
                $T->getDisplayName(),
                $T->isIsCommercial(),
                $T->isEmployeeNumberRequired(),
                $T->isPartner(),
                $T->getLang(),
                $T->getCurrency(),
                $T->getEmailDomains(),
                $T->getAirlineBlogUri(),
                $T->getWhiteLabelUrl());
        }
        throw new DtoToDomainException('Exception converting DTO to DOMAIN airline ' . $T);
    }

    function mapToEntity(object $T)
    {
        // TODO: Implement mapToEntity() method.
    }

    /**
     * @param object $T
     * @return AirlineDTO
     * @throws DomainToDtoException
     */
    function mapToDTO(object $T): AirlineDTO
    {
        if ($T instanceof Airline) {
            return new AirlineDTO(
                $T->getId()->getId(),
                $T->getName(),
                $T->getCode(),
                $T->isSignInAvailable(),
                $T->isSignUpAvailable(),
                $T->getDisplayName(),
                $T->isIsCommercial(),
                $T->isEmployeeNumberRequired(),
                $T->isPartner(),
                $T->getLang(),
                $T->getCurrency(),
                $T->getEmailDomains(),
                $T->getAirlineBlogUri(),
                $T->getWhiteLabelUrl());
        }
        throw new DomainToDtoException('Exception converting DOMAIN to DTO airline ' . $T);
    }
}