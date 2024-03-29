<?php

declare(strict_types=1);

namespace Id90travel\core\src\main\rest\hotel\model;

class Hotel
{
    private HotelId $id;
    private string $name;
    private Location $location;
    private string $chain;
    private string $checkin;
    private string $checkout;
    private array $promotions;
    private Feature $feature;
    private array $amenities;
    private int $nights;
    private int $position;
    private string $id90;
    private string $displayable_id;
    private float $star_rating;
    private float $review_rating;
    private float $display_rate;
    private string $display_rate_with_promo;
    private float $total;
    private string $image;
    private array $images;
    private string $description;
    private string $location_description;
    private string $discount_promotion;
    private AccommodationType $accommodation_type;
    private array $neighborhood_ids;
    private float $retail_rate;
    private float $savings_amount;
    private float $savings_percent;
    private array $other_sites_prices;
    private float $distance;
    private string $distance_to_airport;
    private DistanceToAirport $distance_to_airports;
    private int $number_of_rooms;
    private string $total_discount_amount;
    private array $surcharges;
    private float $taxes_and_fees;
    private string $payment_date;
    private string $payment_option;
    private string $token_store;
    private string $supplier_special_rate_type;
    private string $experiment_variation;

    /**
     * @param HotelId $id
     * @param string $name
     * @param Location $location
     * @param string $chain
     * @param string $checkin
     * @param string $checkout
     * @param array $promotions
     * @param Feature $feature
     * @param array $amenities
     * @param int $nights
     * @param int $position
     * @param string $id90
     * @param string $displayable_id
     * @param float $star_rating
     * @param float $review_rating
     * @param float $display_rate
     * @param string $display_rate_with_promo
     * @param float $total
     * @param string $image
     * @param array $images
     * @param string $description
     * @param string $location_description
     * @param string $discount_promotion
     * @param AccommodationType $accommodation_type
     * @param array $neighborhood_ids
     * @param float $retail_rate
     * @param float $savings_amount
     * @param float $savings_percent
     * @param array $other_sites_prices
     * @param float $distance
     * @param string $distance_to_airport
     * @param DistanceToAirport $distance_to_airports
     * @param int $number_of_rooms
     * @param string $total_discount_amount
     * @param array $surcharges
     * @param float $taxes_and_fees
     * @param string $payment_date
     * @param string $payment_option
     * @param string $token_store
     * @param string $supplier_special_rate_type
     * @param string $experiment_variation
     */
    public function __construct(HotelId $id, string $name, Location $location, string $chain, string $checkin, string $checkout, array $promotions, Feature $feature, array $amenities, int $nights, int $position, string $id90, string $displayable_id, float $star_rating, float $review_rating, float $display_rate, string $display_rate_with_promo, float $total, string $image, array $images, string $description, string $location_description, string $discount_promotion, AccommodationType $accommodation_type, array $neighborhood_ids, float $retail_rate, float $savings_amount, float $savings_percent, array $other_sites_prices, float $distance, string $distance_to_airport, DistanceToAirport $distance_to_airports, int $number_of_rooms, string $total_discount_amount, array $surcharges, float $taxes_and_fees, string $payment_date, string $payment_option, string $token_store, string $supplier_special_rate_type, string $experiment_variation)
    {
        $this->id = $id;
        $this->name = $name;
        $this->location = $location;
        $this->chain = $chain;
        $this->checkin = $checkin;
        $this->checkout = $checkout;
        $this->promotions = $promotions;
        $this->feature = $feature;
        $this->amenities = $amenities;
        $this->nights = $nights;
        $this->position = $position;
        $this->id90 = $id90;
        $this->displayable_id = $displayable_id;
        $this->star_rating = $star_rating;
        $this->review_rating = $review_rating;
        $this->display_rate = $display_rate;
        $this->display_rate_with_promo = $display_rate_with_promo;
        $this->total = $total;
        $this->image = $image;
        $this->images = $images;
        $this->description = $description;
        $this->location_description = $location_description;
        $this->discount_promotion = $discount_promotion;
        $this->accommodation_type = $accommodation_type;
        $this->neighborhood_ids = $neighborhood_ids;
        $this->retail_rate = $retail_rate;
        $this->savings_amount = $savings_amount;
        $this->savings_percent = $savings_percent;
        $this->other_sites_prices = $other_sites_prices;
        $this->distance = $distance;
        $this->distance_to_airport = $distance_to_airport;
        $this->distance_to_airports = $distance_to_airports;
        $this->number_of_rooms = $number_of_rooms;
        $this->total_discount_amount = $total_discount_amount;
        $this->surcharges = $surcharges;
        $this->taxes_and_fees = $taxes_and_fees;
        $this->payment_date = $payment_date;
        $this->payment_option = $payment_option;
        $this->token_store = $token_store;
        $this->supplier_special_rate_type = $supplier_special_rate_type;
        $this->experiment_variation = $experiment_variation;
    }

    /**
     * @return HotelId
     */
    public function getId(): HotelId
    {
        return $this->id;
    }

    /**
     * @param HotelId $id
     */
    public function setId(HotelId $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @param Location $location
     */
    public function setLocation(Location $location): void
    {
        $this->location = $location;
    }

    /**
     * @return string
     */
    public function getChain(): string
    {
        return $this->chain;
    }

    /**
     * @param string $chain
     */
    public function setChain(string $chain): void
    {
        $this->chain = $chain;
    }

    /**
     * @return string
     */
    public function getCheckin(): string
    {
        return $this->checkin;
    }

    /**
     * @param string $checkin
     */
    public function setCheckin(string $checkin): void
    {
        $this->checkin = $checkin;
    }

    /**
     * @return string
     */
    public function getCheckout(): string
    {
        return $this->checkout;
    }

    /**
     * @param string $checkout
     */
    public function setCheckout(string $checkout): void
    {
        $this->checkout = $checkout;
    }

    /**
     * @return array
     */
    public function getPromotions(): array
    {
        return $this->promotions;
    }

    /**
     * @param array $promotions
     */
    public function setPromotions(array $promotions): void
    {
        $this->promotions = $promotions;
    }

    /**
     * @return Feature
     */
    public function getFeature(): Feature
    {
        return $this->feature;
    }

    /**
     * @param Feature $feature
     */
    public function setFeature(Feature $feature): void
    {
        $this->feature = $feature;
    }

    /**
     * @return array
     */
    public function getAmenities(): array
    {
        return $this->amenities;
    }

    /**
     * @param array $amenities
     */
    public function setAmenities(array $amenities): void
    {
        $this->amenities = $amenities;
    }

    /**
     * @return int
     */
    public function getNights(): int
    {
        return $this->nights;
    }

    /**
     * @param int $nights
     */
    public function setNights(int $nights): void
    {
        $this->nights = $nights;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function setPosition(int $position): void
    {
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getId90(): string
    {
        return $this->id90;
    }

    /**
     * @param string $id90
     */
    public function setId90(string $id90): void
    {
        $this->id90 = $id90;
    }

    /**
     * @return string
     */
    public function getDisplayableId(): string
    {
        return $this->displayable_id;
    }

    /**
     * @param string $displayable_id
     */
    public function setDisplayableId(string $displayable_id): void
    {
        $this->displayable_id = $displayable_id;
    }

    /**
     * @return float
     */
    public function getStarRating(): float
    {
        return $this->star_rating;
    }

    /**
     * @param float $star_rating
     */
    public function setStarRating(float $star_rating): void
    {
        $this->star_rating = $star_rating;
    }

    /**
     * @return float
     */
    public function getReviewRating(): float
    {
        return $this->review_rating;
    }

    /**
     * @param float $review_rating
     */
    public function setReviewRating(float $review_rating): void
    {
        $this->review_rating = $review_rating;
    }

    /**
     * @return float
     */
    public function getDisplayRate(): float
    {
        return $this->display_rate;
    }

    /**
     * @param float $display_rate
     */
    public function setDisplayRate(float $display_rate): void
    {
        $this->display_rate = $display_rate;
    }

    /**
     * @return string
     */
    public function getDisplayRateWithPromo(): string
    {
        return $this->display_rate_with_promo;
    }

    /**
     * @param string $display_rate_with_promo
     */
    public function setDisplayRateWithPromo(string $display_rate_with_promo): void
    {
        $this->display_rate_with_promo = $display_rate_with_promo;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @param float $total
     */
    public function setTotal(float $total): void
    {
        $this->total = $total;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return array
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @param array $images
     */
    public function setImages(array $images): void
    {
        $this->images = $images;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getLocationDescription(): string
    {
        return $this->location_description;
    }

    /**
     * @param string $location_description
     */
    public function setLocationDescription(string $location_description): void
    {
        $this->location_description = $location_description;
    }

    /**
     * @return string
     */
    public function getDiscountPromotion(): string
    {
        return $this->discount_promotion;
    }

    /**
     * @param string $discount_promotion
     */
    public function setDiscountPromotion(string $discount_promotion): void
    {
        $this->discount_promotion = $discount_promotion;
    }

    /**
     * @return AccommodationType
     */
    public function getAccommodationType(): AccommodationType
    {
        return $this->accommodation_type;
    }

    /**
     * @param AccommodationType $accommodation_type
     */
    public function setAccommodationType(AccommodationType $accommodation_type): void
    {
        $this->accommodation_type = $accommodation_type;
    }

    /**
     * @return array
     */
    public function getNeighborhoodIds(): array
    {
        return $this->neighborhood_ids;
    }

    /**
     * @param array $neighborhood_ids
     */
    public function setNeighborhoodIds(array $neighborhood_ids): void
    {
        $this->neighborhood_ids = $neighborhood_ids;
    }

    /**
     * @return float
     */
    public function getRetailRate(): float
    {
        return $this->retail_rate;
    }

    /**
     * @param float $retail_rate
     */
    public function setRetailRate(float $retail_rate): void
    {
        $this->retail_rate = $retail_rate;
    }

    /**
     * @return float
     */
    public function getSavingsAmount(): float
    {
        return $this->savings_amount;
    }

    /**
     * @param float $savings_amount
     */
    public function setSavingsAmount(float $savings_amount): void
    {
        $this->savings_amount = $savings_amount;
    }

    /**
     * @return float
     */
    public function getSavingsPercent(): float
    {
        return $this->savings_percent;
    }

    /**
     * @param float $savings_percent
     */
    public function setSavingsPercent(float $savings_percent): void
    {
        $this->savings_percent = $savings_percent;
    }

    /**
     * @return array
     */
    public function getOtherSitesPrices(): array
    {
        return $this->other_sites_prices;
    }

    /**
     * @param array $other_sites_prices
     */
    public function setOtherSitesPrices(array $other_sites_prices): void
    {
        $this->other_sites_prices = $other_sites_prices;
    }

    /**
     * @return float
     */
    public function getDistance(): float
    {
        return $this->distance;
    }

    /**
     * @param float $distance
     */
    public function setDistance(float $distance): void
    {
        $this->distance = $distance;
    }

    /**
     * @return string
     */
    public function getDistanceToAirport(): string
    {
        return $this->distance_to_airport;
    }

    /**
     * @param string $distance_to_airport
     */
    public function setDistanceToAirport(string $distance_to_airport): void
    {
        $this->distance_to_airport = $distance_to_airport;
    }

    /**
     * @return DistanceToAirport
     */
    public function getDistanceToAirports(): DistanceToAirport
    {
        return $this->distance_to_airports;
    }

    /**
     * @param DistanceToAirport $distance_to_airports
     */
    public function setDistanceToAirports(DistanceToAirport $distance_to_airports): void
    {
        $this->distance_to_airports = $distance_to_airports;
    }

    /**
     * @return int
     */
    public function getNumberOfRooms(): int
    {
        return $this->number_of_rooms;
    }

    /**
     * @param int $number_of_rooms
     */
    public function setNumberOfRooms(int $number_of_rooms): void
    {
        $this->number_of_rooms = $number_of_rooms;
    }

    /**
     * @return string
     */
    public function getTotalDiscountAmount(): string
    {
        return $this->total_discount_amount;
    }

    /**
     * @param string $total_discount_amount
     */
    public function setTotalDiscountAmount(string $total_discount_amount): void
    {
        $this->total_discount_amount = $total_discount_amount;
    }

    /**
     * @return array
     */
    public function getSurcharges(): array
    {
        return $this->surcharges;
    }

    /**
     * @param array $surcharges
     */
    public function setSurcharges(array $surcharges): void
    {
        $this->surcharges = $surcharges;
    }

    /**
     * @return float
     */
    public function getTaxesAndFees(): float
    {
        return $this->taxes_and_fees;
    }

    /**
     * @param float $taxes_and_fees
     */
    public function setTaxesAndFees(float $taxes_and_fees): void
    {
        $this->taxes_and_fees = $taxes_and_fees;
    }

    /**
     * @return string
     */
    public function getPaymentDate(): string
    {
        return $this->payment_date;
    }

    /**
     * @param string $payment_date
     */
    public function setPaymentDate(string $payment_date): void
    {
        $this->payment_date = $payment_date;
    }

    /**
     * @return string
     */
    public function getPaymentOption(): string
    {
        return $this->payment_option;
    }

    /**
     * @param string $payment_option
     */
    public function setPaymentOption(string $payment_option): void
    {
        $this->payment_option = $payment_option;
    }

    /**
     * @return string
     */
    public function getTokenStore(): string
    {
        return $this->token_store;
    }

    /**
     * @param string $token_store
     */
    public function setTokenStore(string $token_store): void
    {
        $this->token_store = $token_store;
    }

    /**
     * @return string
     */
    public function getSupplierSpecialRateType(): string
    {
        return $this->supplier_special_rate_type;
    }

    /**
     * @param string $supplier_special_rate_type
     */
    public function setSupplierSpecialRateType(string $supplier_special_rate_type): void
    {
        $this->supplier_special_rate_type = $supplier_special_rate_type;
    }

    /**
     * @return string
     */
    public function getExperimentVariation(): string
    {
        return $this->experiment_variation;
    }

    /**
     * @param string $experiment_variation
     */
    public function setExperimentVariation(string $experiment_variation): void
    {
        $this->experiment_variation = $experiment_variation;
    }


}