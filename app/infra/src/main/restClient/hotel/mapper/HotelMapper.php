<?php

declare(strict_types=1);

namespace Id90travel\infra\src\main\restClient\hotel\mapper;

use Id90travel\core\src\main\common\exception\IdHotelDomainException;
use Id90travel\core\src\main\rest\hotel\model\Hotel;
use Id90travel\core\src\main\rest\hotel\model\HotelId;
use Id90travel\infra\src\main\common\exception\DtoToDomainException;
use Id90travel\infra\src\main\common\mapper\AbstractMapper;
use Id90travel\infra\src\main\restClient\auth\mapper\LocationMapper;
use Id90travel\infra\src\main\restClient\hotel\dto\HotelDTO;

class HotelMapper implements AbstractMapper
{

    private LocationMapper $locationMapper;
    private FeatureMapper $featureMapper;
    private AccommodationTypeMapper $accommodationTypeMapper;
    private DistanceToAirportMapper $distanceToAirportMapper;

    /**
     * @param LocationMapper $locationMapper
     * @param FeatureMapper $featureMapper
     * @param AccommodationTypeMapper $accommodationTypeMapper
     * @param DistanceToAirportMapper $distanceToAirportMapper
     */
    public function __construct(LocationMapper $locationMapper, FeatureMapper $featureMapper, AccommodationTypeMapper $accommodationTypeMapper, DistanceToAirportMapper $distanceToAirportMapper)
    {
        $this->locationMapper = $locationMapper;
        $this->featureMapper = $featureMapper;
        $this->accommodationTypeMapper = $accommodationTypeMapper;
        $this->distanceToAirportMapper = $distanceToAirportMapper;
    }


    /**
     * @throws IdHotelDomainException
     */
    function mapToDomain(object $T)
    {
        if ($T instanceof HotelDTO) {
            return new Hotel(
                new HotelId($T->getId()),
                $T->getName(),
                $this->locationMapper->mapToDomain($T->getLocation()),
                $T->getChain(),
                $T->getCheckin(),
                $T->getCheckout(),
                $T->getPromotions(),
                $this->featureMapper->mapToDomain($T->getFeature()),
                $T->getAmenities(),
                $T->getNights(),
                $T->getPosition(),
                $T->getId90(),
                $T->getDisplayableId(),
                $T->getStarRating(),
                $T->getReviewRating(),
                $T->getDisplayRate(),
                $T->getDisplayRateWithPromo(),
                $T->getTotal(),
                $T->getImage(),
                $T->getImages(),
                $T->getDescription(),
                $T->getLocationDescription(),
                $T->getDiscountPromotion(),
                $this->accommodationTypeMapper->mapToDomain($T->getAccommodationType()),
                $T->getNeighborhoodIds(),
                $T->getRetailRate(),
                $T->getSavingsAmount(),
                $T->getSavingsPercent(),
                $T->getOtherSitesPrices(),
                $T->getDistance(),
                $T->getDistanceToAirport(),
                $this->distanceToAirportMapper->mapToDomain($T->getDistanceToAirports()),
                $T->getNumberOfRooms(),
                $T->getTotalDiscountAmount(),
                $T->getSurcharges(),
                $T->getTaxesAndFees(),
                $T->getPaymentDate(),
                $T->getPaymentOption(),
                $T->getTokenStore(),
                $T->getSupplierSpecialRateType(),
                $T->getExperimentVariation(),
            );

        }
        throw new DtoToDomainException('Exception converting DTO to DOMAIN hotel ' . $T);
    }

    function mapToEntity(object $T)
    {
        // TODO: Implement mapToEntity() method.
    }

    function mapToDTO(object $T)
    {
        // TODO: Implement mapToEntity() method.
    }
}