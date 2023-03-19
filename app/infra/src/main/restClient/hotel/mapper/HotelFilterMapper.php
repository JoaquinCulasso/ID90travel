<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\restClient\hotel\mapper;

use Id90travel\core\src\main\rest\hotel\model\HotelFilter;
use Id90travel\infra\src\main\common\exception\DomainToDtoException;
use Id90travel\infra\src\main\common\mapper\AbstractMapper;
use Id90travel\infra\src\main\restClient\hotel\dto\HotelFilterBuilderDTO;
use Id90travel\infra\src\main\restClient\hotel\dto\HotelFilterDTO;

class HotelFilterMapper implements AbstractMapper
{

    function mapToDomain(object $T)
    {
        // TODO: Implement mapToDomain() method.
    }

    function mapToEntity(object $T)
    {
        // TODO: Implement mapToEntity() method.
    }

    /**
     * @throws DomainToDtoException
     */
    function mapToDTO(object $T): HotelFilterDTO
    {
        if ($T instanceof HotelFilter) {
            $builder = new HotelFilterBuilderDTO(
                $T->getGuests(),
                $T->getCheckin(),
                $T->getCheckout(),
                $T->getDestination(),
            );

            if (!empty($T->getKeyword())) $builder->setKeyword($T->getKeyword());
            if (!empty($T->getRooms())) $builder->setRooms($T->getRooms());
            if (!empty($T->getLongitude())) $builder->setLongitude($T->getLongitude());
            if (!empty($T->getLatitude())) $builder->setLatitude($T->getLatitude());
            if (!empty($T->getSortCriteria())) $builder->setSortCriteria($T->getSortCriteria());
            if (!empty($T->getSortOrder())) $builder->setSortOrder($T->getSortOrder());
            if (!empty($T->getPerPage())) $builder->setPerPage($T->getPerPage());
            if (!empty($T->getPage())) $builder->setPage($T->getPage());
            if (!empty($T->getCurrency())) $builder->setCurrency($T->getCurrency());
            if (!empty($T->getPriceLow())) $builder->setPriceLow($T->getPriceLow());
            if (!empty($T->getPriceHigh())) $builder->setPriceHigh($T->getPriceHigh());

            return $builder->build();
        }
        throw new DomainToDtoException('Exception converting DOMAIN to DTO hotel filter ' . $T, 500);
    }

}