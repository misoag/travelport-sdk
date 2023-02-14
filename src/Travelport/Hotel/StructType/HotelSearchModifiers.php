<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
    protected ?\Travelport\Hotel\StructType\PermittedChains $PermittedChains = null;
    /**
     * The ProhibitedChains
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\ProhibitedChains|null
     */
    protected ?\Travelport\Hotel\StructType\ProhibitedChains $ProhibitedChains = null;
    /**
     * The PermittedProviders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PermittedProviders
     * @var \Travelport\Hotel\StructType\PermittedProviders|null
     */
    protected ?\Travelport\Hotel\StructType\PermittedProviders $PermittedProviders = null;
    /**
     * The LoyaltyCard
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * - ref: common:LoyaltyCard
     * @var \Travelport\Hotel\StructType\LoyaltyCard[]
     */
    protected ?array $LoyaltyCard = null;
    /**
     * The HotelName
     * Meta information extracted from the WSDL
     * - documentation: There can be at most one Hotel Name to be requested
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $HotelName = null;
    /**
     * The CorporateDiscountID
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:CorporateDiscountID
     * @var \Travelport\Hotel\StructType\CorporateDiscountID[]
     */
    protected ?array $CorporateDiscountID = null;
    /**
     * The RateCategory
     * Meta information extracted from the WSDL
     * - documentation: Search for specific rate categories | Refers to Open Travel Code
     * - base: xs:positiveInteger
     * - maxOccurs: 8
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $RateCategory = null;
    /**
     * The HotelRating
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelRating
     * @var \Travelport\Hotel\StructType\HotelRating[]
     */
    protected ?array $HotelRating = null;
    /**
     * The SearchPriority
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: SearchPriority
     * @var \Travelport\Hotel\StructType\SearchPriority|null
     */
    protected ?\Travelport\Hotel\StructType\SearchPriority $SearchPriority = null;
    /**
     * The HotelBedding
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * - ref: HotelBedding
     * @var \Travelport\Hotel\StructType\HotelBedding[]
     */
    protected ?array $HotelBedding = null;
    /**
     * The Amenities
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\Amenities|null
     */
    protected ?\Travelport\Hotel\StructType\Amenities $Amenities = null;
    /**
     * The NumberOfChildren
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: NumberOfChildren
     * @var \Travelport\Hotel\StructType\NumberOfChildren|null
     */
    protected ?\Travelport\Hotel\StructType\NumberOfChildren $NumberOfChildren = null;
    /**
     * The HotelTransportation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\HotelTransportation|null
     */
    protected ?\Travelport\Hotel\StructType\HotelTransportation $HotelTransportation = null;
    /**
     * The BookingGuestInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: BookingGuestInformation
     * @var \Travelport\Hotel\StructType\BookingGuestInformation|null
     */
    protected ?\Travelport\Hotel\StructType\BookingGuestInformation $BookingGuestInformation = null;
    /**
     * The NumberOfAdults
     * Meta information extracted from the WSDL
     * - documentation: The total number of adult guests per booking. Defaults to ‘1’. Supported Providers: 1G, 1V, 1P.
     * - use: optional
     * @var int|null
     */
    protected ?int $NumberOfAdults = null;
    /**
     * The NumberOfRooms
     * Meta information extracted from the WSDL
     * - documentation: The number of rooms per booking. Defaults to ‘1’. Supported Providers 1G, 1V, 1P.
     * - use: optional
     * @var int|null
     */
    protected ?int $NumberOfRooms = null;
    /**
     * The IsRelaxed
     * Meta information extracted from the WSDL
     * - documentation: Default is true. If false, only the results matching all the criteria returned.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IsRelaxed = null;
    /**
     * The PreferredCurrency
     * Meta information extracted from the WSDL
     * - documentation: Requested currency for target rate. | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $PreferredCurrency = null;
    /**
     * The AvailableHotelsOnly
     * Meta information extracted from the WSDL
     * - documentation: Set to true to request only available hotels. Default is false and all results from the provider are returned.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AvailableHotelsOnly = null;
    /**
     * The MaxWait
     * Meta information extracted from the WSDL
     * - documentation: Maximum wait time in milliseconds for hotel search results. Supported provider:HotelSuperShopper message.
     * @var int|null
     */
    protected ?int $MaxWait = null;
    /**
     * The AggregateResults
     * Meta information extracted from the WSDL
     * - documentation: Indicator to identify GDS property match required or not.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AggregateResults = null;
    /**
     * The ReturnPropertyDescription
     * Meta information extracted from the WSDL
     * - documentation: Request hotel property description. Valid Values are "true" or "false". Default "false".
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReturnPropertyDescription = null;
    /**
     * The NumOfRatePlans
     * Meta information extracted from the WSDL
     * - documentation: The specific number of RatePlanTypes for each property responded on the message, integer 1 - 999. Supported provider: HotelSuperShopper message only.
     * - use: optional
     * @var int|null
     */
    protected ?int $NumOfRatePlans = null;
    /**
     * The ReturnAmenities
     * Meta information extracted from the WSDL
     * - documentation: If hotel amenities are desired set as 'true', else default 'false' for no amenity support.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReturnAmenities = null;
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
     * This method is responsible for validating the values passed to the setLoyaltyCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLoyaltyCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLoyaltyCardForArrayConstraintsFromSetLoyaltyCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelSearchModifiersLoyaltyCardItem) {
            // validation for constraint: itemType
            if (!$hotelSearchModifiersLoyaltyCardItem instanceof \Travelport\Hotel\StructType\LoyaltyCard) {
                $invalidValues[] = is_object($hotelSearchModifiersLoyaltyCardItem) ? get_class($hotelSearchModifiersLoyaltyCardItem) : sprintf('%s(%s)', gettype($hotelSearchModifiersLoyaltyCardItem), var_export($hotelSearchModifiersLoyaltyCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LoyaltyCard property can only contain items of type \Travelport\Hotel\StructType\LoyaltyCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LoyaltyCard value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\LoyaltyCard[] $loyaltyCard
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setLoyaltyCard(?array $loyaltyCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($loyaltyCardArrayErrorMessage = self::validateLoyaltyCardForArrayConstraintsFromSetLoyaltyCard($loyaltyCard))) {
            throw new InvalidArgumentException($loyaltyCardArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($loyaltyCard) && count($loyaltyCard) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 4', count($loyaltyCard)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\LoyaltyCard) {
            throw new InvalidArgumentException(sprintf('The LoyaltyCard property can only contain items of type \Travelport\Hotel\StructType\LoyaltyCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($this->LoyaltyCard) && count($this->LoyaltyCard) >= 4) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 4', count($this->LoyaltyCard)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($hotelName) && !is_string($hotelName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelName, true), gettype($hotelName)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setCorporateDiscountID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCorporateDiscountID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCorporateDiscountIDForArrayConstraintsFromSetCorporateDiscountID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelSearchModifiersCorporateDiscountIDItem) {
            // validation for constraint: itemType
            if (!$hotelSearchModifiersCorporateDiscountIDItem instanceof \Travelport\Hotel\StructType\CorporateDiscountID) {
                $invalidValues[] = is_object($hotelSearchModifiersCorporateDiscountIDItem) ? get_class($hotelSearchModifiersCorporateDiscountIDItem) : sprintf('%s(%s)', gettype($hotelSearchModifiersCorporateDiscountIDItem), var_export($hotelSearchModifiersCorporateDiscountIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CorporateDiscountID property can only contain items of type \Travelport\Hotel\StructType\CorporateDiscountID, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CorporateDiscountID value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\CorporateDiscountID[] $corporateDiscountID
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setCorporateDiscountID(?array $corporateDiscountID = null): self
    {
        // validation for constraint: array
        if ('' !== ($corporateDiscountIDArrayErrorMessage = self::validateCorporateDiscountIDForArrayConstraintsFromSetCorporateDiscountID($corporateDiscountID))) {
            throw new InvalidArgumentException($corporateDiscountIDArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($corporateDiscountID) && count($corporateDiscountID) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($corporateDiscountID)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\CorporateDiscountID) {
            throw new InvalidArgumentException(sprintf('The CorporateDiscountID property can only contain items of type \Travelport\Hotel\StructType\CorporateDiscountID, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CorporateDiscountID) && count($this->CorporateDiscountID) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CorporateDiscountID)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setRateCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRateCategory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRateCategoryForArrayConstraintsFromSetRateCategory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelSearchModifiersRateCategoryItem) {
            // validation for constraint: itemType
            if (!(is_int($hotelSearchModifiersRateCategoryItem) || ctype_digit($hotelSearchModifiersRateCategoryItem))) {
                $invalidValues[] = is_object($hotelSearchModifiersRateCategoryItem) ? get_class($hotelSearchModifiersRateCategoryItem) : sprintf('%s(%s)', gettype($hotelSearchModifiersRateCategoryItem), var_export($hotelSearchModifiersRateCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RateCategory property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RateCategory value
     * @throws InvalidArgumentException
     * @param int[] $rateCategory
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setRateCategory(?array $rateCategory = null): self
    {
        // validation for constraint: array
        if ('' !== ($rateCategoryArrayErrorMessage = self::validateRateCategoryForArrayConstraintsFromSetRateCategory($rateCategory))) {
            throw new InvalidArgumentException($rateCategoryArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(8)
        if (is_array($rateCategory) && count($rateCategory) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 8', count($rateCategory)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The RateCategory property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(8)
        if (is_array($this->RateCategory) && count($this->RateCategory) >= 8) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 8', count($this->RateCategory)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setHotelRating method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelRating method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelRatingForArrayConstraintsFromSetHotelRating(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelSearchModifiersHotelRatingItem) {
            // validation for constraint: itemType
            if (!$hotelSearchModifiersHotelRatingItem instanceof \Travelport\Hotel\StructType\HotelRating) {
                $invalidValues[] = is_object($hotelSearchModifiersHotelRatingItem) ? get_class($hotelSearchModifiersHotelRatingItem) : sprintf('%s(%s)', gettype($hotelSearchModifiersHotelRatingItem), var_export($hotelSearchModifiersHotelRatingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelRating property can only contain items of type \Travelport\Hotel\StructType\HotelRating, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelRating value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelRating[] $hotelRating
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setHotelRating(?array $hotelRating = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelRatingArrayErrorMessage = self::validateHotelRatingForArrayConstraintsFromSetHotelRating($hotelRating))) {
            throw new InvalidArgumentException($hotelRatingArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelRating) && count($hotelRating) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelRating)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\HotelRating) {
            throw new InvalidArgumentException(sprintf('The HotelRating property can only contain items of type \Travelport\Hotel\StructType\HotelRating, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelRating) && count($this->HotelRating) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelRating)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setHotelBedding method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelBedding method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelBeddingForArrayConstraintsFromSetHotelBedding(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelSearchModifiersHotelBeddingItem) {
            // validation for constraint: itemType
            if (!$hotelSearchModifiersHotelBeddingItem instanceof \Travelport\Hotel\StructType\HotelBedding) {
                $invalidValues[] = is_object($hotelSearchModifiersHotelBeddingItem) ? get_class($hotelSearchModifiersHotelBeddingItem) : sprintf('%s(%s)', gettype($hotelSearchModifiersHotelBeddingItem), var_export($hotelSearchModifiersHotelBeddingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelBedding property can only contain items of type \Travelport\Hotel\StructType\HotelBedding, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelBedding value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelBedding[] $hotelBedding
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers
     */
    public function setHotelBedding(?array $hotelBedding = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelBeddingArrayErrorMessage = self::validateHotelBeddingForArrayConstraintsFromSetHotelBedding($hotelBedding))) {
            throw new InvalidArgumentException($hotelBeddingArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($hotelBedding) && count($hotelBedding) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 4', count($hotelBedding)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\HotelBedding) {
            throw new InvalidArgumentException(sprintf('The HotelBedding property can only contain items of type \Travelport\Hotel\StructType\HotelBedding, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($this->HotelBedding) && count($this->HotelBedding) >= 4) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 4', count($this->HotelBedding)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($numberOfAdults) && !(is_int($numberOfAdults) || ctype_digit($numberOfAdults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfAdults, true), gettype($numberOfAdults)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($numberOfRooms) && !(is_int($numberOfRooms) || ctype_digit($numberOfRooms))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfRooms, true), gettype($numberOfRooms)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($isRelaxed) && !is_bool($isRelaxed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRelaxed, true), gettype($isRelaxed)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($preferredCurrency) && !is_string($preferredCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($preferredCurrency, true), gettype($preferredCurrency)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($preferredCurrency) && mb_strlen((string) $preferredCurrency) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $preferredCurrency)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($availableHotelsOnly) && !is_bool($availableHotelsOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($availableHotelsOnly, true), gettype($availableHotelsOnly)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($maxWait) && !(is_int($maxWait) || ctype_digit($maxWait))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxWait, true), gettype($maxWait)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($aggregateResults) && !is_bool($aggregateResults)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($aggregateResults, true), gettype($aggregateResults)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($returnPropertyDescription) && !is_bool($returnPropertyDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnPropertyDescription, true), gettype($returnPropertyDescription)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($numOfRatePlans) && !(is_int($numOfRatePlans) || ctype_digit($numOfRatePlans))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numOfRatePlans, true), gettype($numOfRatePlans)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($returnAmenities) && !is_bool($returnAmenities)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnAmenities, true), gettype($returnAmenities)), __LINE__);
        }
        $this->ReturnAmenities = $returnAmenities;
        
        return $this;
    }
}
