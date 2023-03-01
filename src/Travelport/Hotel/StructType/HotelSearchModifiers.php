<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelSearchModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Search with corporate discount IDs or negotiated rate codes. 1G/1V allows a max of 4. 1P allows a max of 1 corporate discount ID and up to 30 negotiated rate codes. Support for this function is hotel supplier dependent. | Controls
 * and switches for the Hotel Search request
 * @subpackage Structs
 */
class HotelSearchModifiers extends AbstractStructBase
{
    /**
     * The PermittedChains
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\PermittedChains|null
     */
    public ?\Travelport\Hotel\StructType\PermittedChains $PermittedChains = null;
    /**
     * The ProhibitedChains
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\ProhibitedChains|null
     */
    public ?\Travelport\Hotel\StructType\ProhibitedChains $ProhibitedChains = null;
    /**
     * The PermittedProviders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PermittedProviders
     * @var \Travelport\Hotel\StructType\PermittedProviders|null
     */
    public ?\Travelport\Hotel\StructType\PermittedProviders $PermittedProviders = null;
    /**
     * The LoyaltyCard
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * - ref: common:LoyaltyCard
     * @var \Travelport\Hotel\StructType\LoyaltyCard[]
     */
    public ?array $LoyaltyCard = null;
    /**
     * The HotelName
     * Meta information extracted from the WSDL
     * - documentation: There can be at most one Hotel Name to be requested
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $HotelName = null;
    /**
     * The CorporateDiscountID
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:CorporateDiscountID
     * @var \Travelport\Hotel\StructType\CorporateDiscountID[]
     */
    public ?array $CorporateDiscountID = null;
    /**
     * The RateCategory
     * Meta information extracted from the WSDL
     * - documentation: Search for specific rate categories | Refers to Open Travel Code
     * - base: xs:positiveInteger
     * - maxOccurs: 8
     * - minOccurs: 0
     * @var int[]
     */
    public ?array $RateCategory = null;
    /**
     * The HotelRating
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelRating
     * @var \Travelport\Hotel\StructType\HotelRating[]
     */
    public ?array $HotelRating = null;
    /**
     * The SearchPriority
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: SearchPriority
     * @var \Travelport\Hotel\StructType\SearchPriority|null
     */
    public ?\Travelport\Hotel\StructType\SearchPriority $SearchPriority = null;
    /**
     * The HotelBedding
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * - ref: HotelBedding
     * @var \Travelport\Hotel\StructType\HotelBedding[]
     */
    public ?array $HotelBedding = null;
    /**
     * The Amenities
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\Amenities|null
     */
    public ?\Travelport\Hotel\StructType\Amenities $Amenities = null;
    /**
     * The NumberOfChildren
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: NumberOfChildren
     * @var \Travelport\Hotel\StructType\NumberOfChildren|null
     */
    public ?\Travelport\Hotel\StructType\NumberOfChildren $NumberOfChildren = null;
    /**
     * The HotelTransportation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\HotelTransportation|null
     */
    public ?\Travelport\Hotel\StructType\HotelTransportation $HotelTransportation = null;
    /**
     * The BookingGuestInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: BookingGuestInformation
     * @var \Travelport\Hotel\StructType\BookingGuestInformation|null
     */
    public ?\Travelport\Hotel\StructType\BookingGuestInformation $BookingGuestInformation = null;
    /**
     * The NumberOfAdults
     * Meta information extracted from the WSDL
     * - documentation: The total number of adult guests per booking. Defaults to ‘1’. Supported Providers: 1G, 1V, 1P.
     * - use: optional
     * @var int|null
     */
    public ?int $NumberOfAdults = null;
    /**
     * The NumberOfRooms
     * Meta information extracted from the WSDL
     * - documentation: The number of rooms per booking. Defaults to ‘1’. Supported Providers 1G, 1V, 1P.
     * - use: optional
     * @var int|null
     */
    public ?int $NumberOfRooms = null;
    /**
     * The IsRelaxed
     * Meta information extracted from the WSDL
     * - documentation: Default is true. If false, only the results matching all the criteria returned.
     * - use: optional
     * @var bool|null
     */
    public ?bool $IsRelaxed = null;
    /**
     * The PreferredCurrency
     * Meta information extracted from the WSDL
     * - documentation: Requested currency for target rate. | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    public ?string $PreferredCurrency = null;
    /**
     * The AvailableHotelsOnly
     * Meta information extracted from the WSDL
     * - documentation: Set to true to request only available hotels. Default is false and all results from the provider are returned.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AvailableHotelsOnly = null;
    /**
     * The MaxWait
     * Meta information extracted from the WSDL
     * - documentation: Maximum wait time in milliseconds for hotel search results. Supported provider:HotelSuperShopper message.
     * @var int|null
     */
    public ?int $MaxWait = null;
    /**
     * The AggregateResults
     * Meta information extracted from the WSDL
     * - documentation: Indicator to identify GDS property match required or not.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $AggregateResults = null;
    /**
     * The ReturnPropertyDescription
     * Meta information extracted from the WSDL
     * - documentation: Request hotel property description. Valid Values are "true" or "false". Default "false".
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnPropertyDescription = null;
    /**
     * The NumOfRatePlans
     * Meta information extracted from the WSDL
     * - documentation: The specific number of RatePlanTypes for each property responded on the message, integer 1 - 999. Supported provider: HotelSuperShopper message only.
     * - use: optional
     * @var int|null
     */
    public ?int $NumOfRatePlans = null;
    /**
     * The ReturnAmenities
     * Meta information extracted from the WSDL
     * - documentation: If hotel amenities are desired set as 'true', else default 'false' for no amenity support.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnAmenities = null;
    /**
     * Constructor method for HotelSearchModifiers
     * @uses HotelSearchModifiers::setPermittedChains()
     * @uses HotelSearchModifiers::setProhibitedChains()
     * @uses HotelSearchModifiers::setPermittedProviders()
     * @uses HotelSearchModifiers::setLoyaltyCard()
     * @uses HotelSearchModifiers::setHotelName()
     * @uses HotelSearchModifiers::setCorporateDiscountID()
     * @uses HotelSearchModifiers::setRateCategory()
     * @uses HotelSearchModifiers::setHotelRating()
     * @uses HotelSearchModifiers::setSearchPriority()
     * @uses HotelSearchModifiers::setHotelBedding()
     * @uses HotelSearchModifiers::setAmenities()
     * @uses HotelSearchModifiers::setNumberOfChildren()
     * @uses HotelSearchModifiers::setHotelTransportation()
     * @uses HotelSearchModifiers::setBookingGuestInformation()
     * @uses HotelSearchModifiers::setNumberOfAdults()
     * @uses HotelSearchModifiers::setNumberOfRooms()
     * @uses HotelSearchModifiers::setIsRelaxed()
     * @uses HotelSearchModifiers::setPreferredCurrency()
     * @uses HotelSearchModifiers::setAvailableHotelsOnly()
     * @uses HotelSearchModifiers::setMaxWait()
     * @uses HotelSearchModifiers::setAggregateResults()
     * @uses HotelSearchModifiers::setReturnPropertyDescription()
     * @uses HotelSearchModifiers::setNumOfRatePlans()
     * @uses HotelSearchModifiers::setReturnAmenities()
     * @param \Travelport\Hotel\StructType\PermittedChains $permittedChains
     * @param \Travelport\Hotel\StructType\ProhibitedChains $prohibitedChains
     * @param \Travelport\Hotel\StructType\PermittedProviders $permittedProviders
     * @param \Travelport\Hotel\StructType\LoyaltyCard[] $loyaltyCard
     * @param string $hotelName
     * @param \Travelport\Hotel\StructType\CorporateDiscountID[] $corporateDiscountID
     * @param int[] $rateCategory
     * @param \Travelport\Hotel\StructType\HotelRating[] $hotelRating
     * @param \Travelport\Hotel\StructType\SearchPriority $searchPriority
     * @param \Travelport\Hotel\StructType\HotelBedding[] $hotelBedding
     * @param \Travelport\Hotel\StructType\Amenities $amenities
     * @param \Travelport\Hotel\StructType\NumberOfChildren $numberOfChildren
     * @param \Travelport\Hotel\StructType\HotelTransportation $hotelTransportation
     * @param \Travelport\Hotel\StructType\BookingGuestInformation $bookingGuestInformation
     * @param int $numberOfAdults
     * @param int $numberOfRooms
     * @param bool $isRelaxed
     * @param string $preferredCurrency
     * @param bool $availableHotelsOnly
     * @param int $maxWait
     * @param bool $aggregateResults
     * @param bool $returnPropertyDescription
     * @param int $numOfRatePlans
     * @param bool $returnAmenities
     */
    public function __construct(?\Travelport\Hotel\StructType\PermittedChains $permittedChains = null, ?\Travelport\Hotel\StructType\ProhibitedChains $prohibitedChains = null, ?\Travelport\Hotel\StructType\PermittedProviders $permittedProviders = null, ?array $loyaltyCard = null, ?string $hotelName = null, ?array $corporateDiscountID = null, ?array $rateCategory = null, ?array $hotelRating = null, ?\Travelport\Hotel\StructType\SearchPriority $searchPriority = null, ?array $hotelBedding = null, ?\Travelport\Hotel\StructType\Amenities $amenities = null, ?\Travelport\Hotel\StructType\NumberOfChildren $numberOfChildren = null, ?\Travelport\Hotel\StructType\HotelTransportation $hotelTransportation = null, ?\Travelport\Hotel\StructType\BookingGuestInformation $bookingGuestInformation = null, ?int $numberOfAdults = null, ?int $numberOfRooms = null, ?bool $isRelaxed = null, ?string $preferredCurrency = null, ?bool $availableHotelsOnly = null, ?int $maxWait = null, ?bool $aggregateResults = false, ?bool $returnPropertyDescription = false, ?int $numOfRatePlans = null, ?bool $returnAmenities = false)
    {
        $this
            ->setPermittedChains($permittedChains)
            ->setProhibitedChains($prohibitedChains)
            ->setPermittedProviders($permittedProviders)
            ->setLoyaltyCard($loyaltyCard)
            ->setHotelName($hotelName)
            ->setCorporateDiscountID($corporateDiscountID)
            ->setRateCategory($rateCategory)
            ->setHotelRating($hotelRating)
            ->setSearchPriority($searchPriority)
            ->setHotelBedding($hotelBedding)
            ->setAmenities($amenities)
            ->setNumberOfChildren($numberOfChildren)
            ->setHotelTransportation($hotelTransportation)
            ->setBookingGuestInformation($bookingGuestInformation)
            ->setNumberOfAdults($numberOfAdults)
            ->setNumberOfRooms($numberOfRooms)
            ->setIsRelaxed($isRelaxed)
            ->setPreferredCurrency($preferredCurrency)
            ->setAvailableHotelsOnly($availableHotelsOnly)
            ->setMaxWait($maxWait)
            ->setAggregateResults($aggregateResults)
            ->setReturnPropertyDescription($returnPropertyDescription)
            ->setNumOfRatePlans($numOfRatePlans)
            ->setReturnAmenities($returnAmenities);
    }
    /**
     * Get PermittedChains value
     * @return \Travelport\Hotel\StructType\PermittedChains|null
     */
    public function getPermittedChains(): ?\Travelport\Hotel\StructType\PermittedChains
    {
        return $this->PermittedChains;
    }
    /**
     * Set PermittedChains value
     * @param \Travelport\Hotel\StructType\PermittedChains $permittedChains
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setPermittedChains(?\Travelport\Hotel\StructType\PermittedChains $permittedChains = null): self
    {
        $this->PermittedChains = $permittedChains;
        
        return $this;
    }
    /**
     * Get ProhibitedChains value
     * @return \Travelport\Hotel\StructType\ProhibitedChains|null
     */
    public function getProhibitedChains(): ?\Travelport\Hotel\StructType\ProhibitedChains
    {
        return $this->ProhibitedChains;
    }
    /**
     * Set ProhibitedChains value
     * @param \Travelport\Hotel\StructType\ProhibitedChains $prohibitedChains
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setProhibitedChains(?\Travelport\Hotel\StructType\ProhibitedChains $prohibitedChains = null): self
    {
        $this->ProhibitedChains = $prohibitedChains;
        
        return $this;
    }
    /**
     * Get PermittedProviders value
     * @return \Travelport\Hotel\StructType\PermittedProviders|null
     */
    public function getPermittedProviders(): ?\Travelport\Hotel\StructType\PermittedProviders
    {
        return $this->PermittedProviders;
    }
    /**
     * Set PermittedProviders value
     * @param \Travelport\Hotel\StructType\PermittedProviders $permittedProviders
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setPermittedProviders(?\Travelport\Hotel\StructType\PermittedProviders $permittedProviders = null): self
    {
        $this->PermittedProviders = $permittedProviders;
        
        return $this;
    }
    /**
     * Get LoyaltyCard value
     * @return \Travelport\Hotel\StructType\LoyaltyCard[]
     */
    public function getLoyaltyCard(): ?array
    {
        return $this->LoyaltyCard;
    }
    /**
     * Set LoyaltyCard value
     * @param \Travelport\Hotel\StructType\LoyaltyCard[] $loyaltyCard
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setLoyaltyCard(?array $loyaltyCard = null): self
    {
        $this->LoyaltyCard = $loyaltyCard;
        
        return $this;
    }
    /**
     * Add item to LoyaltyCard value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\LoyaltyCard $item
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function addToLoyaltyCard(\Travelport\Hotel\StructType\LoyaltyCard $item): self
    {
        $this->LoyaltyCard[] = $item;
        
        return $this;
    }
    /**
     * Get HotelName value
     * @return string|null
     */
    public function getHotelName(): ?string
    {
        return $this->HotelName;
    }
    /**
     * Set HotelName value
     * @param string $hotelName
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setHotelName(?string $hotelName = null): self
    {
        $this->HotelName = $hotelName;
        
        return $this;
    }
    /**
     * Get CorporateDiscountID value
     * @return \Travelport\Hotel\StructType\CorporateDiscountID[]
     */
    public function getCorporateDiscountID(): ?array
    {
        return $this->CorporateDiscountID;
    }
    /**
     * Set CorporateDiscountID value
     * @param \Travelport\Hotel\StructType\CorporateDiscountID[] $corporateDiscountID
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setCorporateDiscountID(?array $corporateDiscountID = null): self
    {
        $this->CorporateDiscountID = $corporateDiscountID;
        
        return $this;
    }
    /**
     * Add item to CorporateDiscountID value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\CorporateDiscountID $item
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function addToCorporateDiscountID(\Travelport\Hotel\StructType\CorporateDiscountID $item): self
    {
        $this->CorporateDiscountID[] = $item;
        
        return $this;
    }
    /**
     * Get RateCategory value
     * @return int[]
     */
    public function getRateCategory(): ?array
    {
        return $this->RateCategory;
    }
    /**
     * Set RateCategory value
     * @param int[] $rateCategory
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setRateCategory(?array $rateCategory = null): self
    {
        $this->RateCategory = $rateCategory;
        
        return $this;
    }
    /**
     * Add item to RateCategory value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function addToRateCategory(int $item): self
    {
        $this->RateCategory[] = $item;
        
        return $this;
    }
    /**
     * Get HotelRating value
     * @return \Travelport\Hotel\StructType\HotelRating[]
     */
    public function getHotelRating(): ?array
    {
        return $this->HotelRating;
    }
    /**
     * Set HotelRating value
     * @param \Travelport\Hotel\StructType\HotelRating[] $hotelRating
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setHotelRating(?array $hotelRating = null): self
    {
        $this->HotelRating = $hotelRating;
        
        return $this;
    }
    /**
     * Add item to HotelRating value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelRating $item
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function addToHotelRating(\Travelport\Hotel\StructType\HotelRating $item): self
    {
        $this->HotelRating[] = $item;
        
        return $this;
    }
    /**
     * Get SearchPriority value
     * @return \Travelport\Hotel\StructType\SearchPriority|null
     */
    public function getSearchPriority(): ?\Travelport\Hotel\StructType\SearchPriority
    {
        return $this->SearchPriority;
    }
    /**
     * Set SearchPriority value
     * @param \Travelport\Hotel\StructType\SearchPriority $searchPriority
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setSearchPriority(?\Travelport\Hotel\StructType\SearchPriority $searchPriority = null): self
    {
        $this->SearchPriority = $searchPriority;
        
        return $this;
    }
    /**
     * Get HotelBedding value
     * @return \Travelport\Hotel\StructType\HotelBedding[]
     */
    public function getHotelBedding(): ?array
    {
        return $this->HotelBedding;
    }
    /**
     * Set HotelBedding value
     * @param \Travelport\Hotel\StructType\HotelBedding[] $hotelBedding
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setHotelBedding(?array $hotelBedding = null): self
    {
        $this->HotelBedding = $hotelBedding;
        
        return $this;
    }
    /**
     * Add item to HotelBedding value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelBedding $item
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function addToHotelBedding(\Travelport\Hotel\StructType\HotelBedding $item): self
    {
        $this->HotelBedding[] = $item;
        
        return $this;
    }
    /**
     * Get Amenities value
     * @return \Travelport\Hotel\StructType\Amenities|null
     */
    public function getAmenities(): ?\Travelport\Hotel\StructType\Amenities
    {
        return $this->Amenities;
    }
    /**
     * Set Amenities value
     * @param \Travelport\Hotel\StructType\Amenities $amenities
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setAmenities(?\Travelport\Hotel\StructType\Amenities $amenities = null): self
    {
        $this->Amenities = $amenities;
        
        return $this;
    }
    /**
     * Get NumberOfChildren value
     * @return \Travelport\Hotel\StructType\NumberOfChildren|null
     */
    public function getNumberOfChildren(): ?\Travelport\Hotel\StructType\NumberOfChildren
    {
        return $this->NumberOfChildren;
    }
    /**
     * Set NumberOfChildren value
     * @param \Travelport\Hotel\StructType\NumberOfChildren $numberOfChildren
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setNumberOfChildren(?\Travelport\Hotel\StructType\NumberOfChildren $numberOfChildren = null): self
    {
        $this->NumberOfChildren = $numberOfChildren;
        
        return $this;
    }
    /**
     * Get HotelTransportation value
     * @return \Travelport\Hotel\StructType\HotelTransportation|null
     */
    public function getHotelTransportation(): ?\Travelport\Hotel\StructType\HotelTransportation
    {
        return $this->HotelTransportation;
    }
    /**
     * Set HotelTransportation value
     * @param \Travelport\Hotel\StructType\HotelTransportation $hotelTransportation
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setHotelTransportation(?\Travelport\Hotel\StructType\HotelTransportation $hotelTransportation = null): self
    {
        $this->HotelTransportation = $hotelTransportation;
        
        return $this;
    }
    /**
     * Get BookingGuestInformation value
     * @return \Travelport\Hotel\StructType\BookingGuestInformation|null
     */
    public function getBookingGuestInformation(): ?\Travelport\Hotel\StructType\BookingGuestInformation
    {
        return $this->BookingGuestInformation;
    }
    /**
     * Set BookingGuestInformation value
     * @param \Travelport\Hotel\StructType\BookingGuestInformation $bookingGuestInformation
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setBookingGuestInformation(?\Travelport\Hotel\StructType\BookingGuestInformation $bookingGuestInformation = null): self
    {
        $this->BookingGuestInformation = $bookingGuestInformation;
        
        return $this;
    }
    /**
     * Get NumberOfAdults value
     * @return int|null
     */
    public function getNumberOfAdults(): ?int
    {
        return $this->NumberOfAdults;
    }
    /**
     * Set NumberOfAdults value
     * @param int $numberOfAdults
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setNumberOfAdults(?int $numberOfAdults = null): self
    {
        $this->NumberOfAdults = $numberOfAdults;
        
        return $this;
    }
    /**
     * Get NumberOfRooms value
     * @return int|null
     */
    public function getNumberOfRooms(): ?int
    {
        return $this->NumberOfRooms;
    }
    /**
     * Set NumberOfRooms value
     * @param int $numberOfRooms
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setNumberOfRooms(?int $numberOfRooms = null): self
    {
        $this->NumberOfRooms = $numberOfRooms;
        
        return $this;
    }
    /**
     * Get IsRelaxed value
     * @return bool|null
     */
    public function getIsRelaxed(): ?bool
    {
        return $this->IsRelaxed;
    }
    /**
     * Set IsRelaxed value
     * @param bool $isRelaxed
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setIsRelaxed(?bool $isRelaxed = null): self
    {
        $this->IsRelaxed = $isRelaxed;
        
        return $this;
    }
    /**
     * Get PreferredCurrency value
     * @return string|null
     */
    public function getPreferredCurrency(): ?string
    {
        return $this->PreferredCurrency;
    }
    /**
     * Set PreferredCurrency value
     * @param string $preferredCurrency
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setPreferredCurrency(?string $preferredCurrency = null): self
    {
        $this->PreferredCurrency = $preferredCurrency;
        
        return $this;
    }
    /**
     * Get AvailableHotelsOnly value
     * @return bool|null
     */
    public function getAvailableHotelsOnly(): ?bool
    {
        return $this->AvailableHotelsOnly;
    }
    /**
     * Set AvailableHotelsOnly value
     * @param bool $availableHotelsOnly
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setAvailableHotelsOnly(?bool $availableHotelsOnly = null): self
    {
        $this->AvailableHotelsOnly = $availableHotelsOnly;
        
        return $this;
    }
    /**
     * Get MaxWait value
     * @return int|null
     */
    public function getMaxWait(): ?int
    {
        return $this->MaxWait;
    }
    /**
     * Set MaxWait value
     * @param int $maxWait
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setMaxWait(?int $maxWait = null): self
    {
        $this->MaxWait = $maxWait;
        
        return $this;
    }
    /**
     * Get AggregateResults value
     * @return bool|null
     */
    public function getAggregateResults(): ?bool
    {
        return $this->AggregateResults;
    }
    /**
     * Set AggregateResults value
     * @param bool $aggregateResults
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setAggregateResults(?bool $aggregateResults = false): self
    {
        $this->AggregateResults = $aggregateResults;
        
        return $this;
    }
    /**
     * Get ReturnPropertyDescription value
     * @return bool|null
     */
    public function getReturnPropertyDescription(): ?bool
    {
        return $this->ReturnPropertyDescription;
    }
    /**
     * Set ReturnPropertyDescription value
     * @param bool $returnPropertyDescription
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setReturnPropertyDescription(?bool $returnPropertyDescription = false): self
    {
        $this->ReturnPropertyDescription = $returnPropertyDescription;
        
        return $this;
    }
    /**
     * Get NumOfRatePlans value
     * @return int|null
     */
    public function getNumOfRatePlans(): ?int
    {
        return $this->NumOfRatePlans;
    }
    /**
     * Set NumOfRatePlans value
     * @param int $numOfRatePlans
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setNumOfRatePlans(?int $numOfRatePlans = null): self
    {
        $this->NumOfRatePlans = $numOfRatePlans;
        
        return $this;
    }
    /**
     * Get ReturnAmenities value
     * @return bool|null
     */
    public function getReturnAmenities(): ?bool
    {
        return $this->ReturnAmenities;
    }
    /**
     * Set ReturnAmenities value
     * @param bool $returnAmenities
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setReturnAmenities(?bool $returnAmenities = false): self
    {
        $this->ReturnAmenities = $returnAmenities;
        
        return $this;
    }
}
