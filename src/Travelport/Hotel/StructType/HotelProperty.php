<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelProperty StructType
 * Meta information extracted from the WSDL
 * - documentation: The hotel property
 * @subpackage Structs
 */
class HotelProperty extends AbstractStructBase
{
    /**
     * The HotelChain
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Hotel Chain Code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    protected string $HotelChain;
    /**
     * The HotelCode
     * Meta information extracted from the WSDL
     * - documentation: Unique hotel identifier for the channel
     * - base: xs:string
     * - maxLength: 32
     * - use: required
     * @var string
     */
    protected string $HotelCode;
    /**
     * The PropertyAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeUnstructuredAddress|null
     */
    protected ?\Travelport\Hotel\StructType\TypeUnstructuredAddress $PropertyAddress = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:PhoneNumber
     * @var \Travelport\Hotel\StructType\PhoneNumber[]
     */
    protected ?array $PhoneNumber = null;
    /**
     * The CoordinateLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:CoordinateLocation
     * @var \Travelport\Hotel\StructType\CoordinateLocation|null
     */
    protected ?\Travelport\Hotel\StructType\CoordinateLocation $CoordinateLocation = null;
    /**
     * The Distance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Distance
     * @var \Travelport\Hotel\StructType\Distance|null
     */
    protected ?\Travelport\Hotel\StructType\Distance $Distance = null;
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
     * The Amenities
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Amenities
     * @var \Travelport\Hotel\StructType\Amenities|null
     */
    protected ?\Travelport\Hotel\StructType\Amenities $Amenities = null;
    /**
     * The MarketingMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MarketingMessage
     * @var \Travelport\Hotel\StructType\MarketingMessage|null
     */
    protected ?\Travelport\Hotel\StructType\MarketingMessage $MarketingMessage = null;
    /**
     * The HotelLocation
     * Meta information extracted from the WSDL
     * - documentation: The location code for this entity. IATA code. | hotel location specified as IATA code
     * - base: xs:string
     * - maxLength: 6
     * - minLength: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $HotelLocation = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The VendorLocationKey
     * Meta information extracted from the WSDL
     * - documentation: The VendorLocationKey for this HotelProperty.
     * - use: optional
     * @var string|null
     */
    protected ?string $VendorLocationKey = null;
    /**
     * The HotelTransportation
     * Meta information extracted from the WSDL
     * - documentation: OTA Transporation code. Transportation available to hotel. | Refers to Open Travel Code
     * - base: xs:positiveInteger
     * - use: optional
     * @var int|null
     */
    protected ?int $HotelTransportation = null;
    /**
     * The ReserveRequirement
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ReserveRequirement = null;
    /**
     * The ParticipationLevel
     * Meta information extracted from the WSDL
     * - documentation: 2=Best Available Rate 1G, 1V, 4=Lowest Possible Rate 1G, 1V, 1P | Used for Character Strings, length 1.
     * - base: xs:string
     * - length: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $ParticipationLevel = null;
    /**
     * The Availability
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Availability = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The PreferredOption
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to indicate if the vendors responsible for the fare or rate being returned have been determined to be ‘preferred’ based on the associated policy settings.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $PreferredOption = null;
    /**
     * The MoreRates
     * Meta information extracted from the WSDL
     * - documentation: When true, more rates are available for this hotel property.Applicable only for HotelDetails and HotelSuperShopper. Supported Providers: 1G, 1V.
     * @var bool|null
     */
    protected ?bool $MoreRates = null;
    /**
     * The MoreRatesToken
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $MoreRatesToken = null;
    /**
     * The NetTransCommissionInd
     * Meta information extracted from the WSDL
     * - documentation: This attribute indicates whether hotel property is tracking through net trans commission indicator.
     * - use: optional
     * @var string|null
     */
    protected ?string $NetTransCommissionInd = null;
    /**
     * The NumOfRatePlans
     * Meta information extracted from the WSDL
     * - documentation: The specific number of RatePlanTypes for each property responded on the message, integer 1 - 999. Supported provider: HotelSuperShopper message only.
     * - use: optional
     * @var int|null
     */
    protected ?int $NumOfRatePlans = null;
    /**
     * Constructor method for HotelProperty
     * @uses HotelProperty::setHotelChain()
     * @uses HotelProperty::setHotelCode()
     * @uses HotelProperty::setPropertyAddress()
     * @uses HotelProperty::setPhoneNumber()
     * @uses HotelProperty::setCoordinateLocation()
     * @uses HotelProperty::setDistance()
     * @uses HotelProperty::setHotelRating()
     * @uses HotelProperty::setAmenities()
     * @uses HotelProperty::setMarketingMessage()
     * @uses HotelProperty::setHotelLocation()
     * @uses HotelProperty::setName()
     * @uses HotelProperty::setVendorLocationKey()
     * @uses HotelProperty::setHotelTransportation()
     * @uses HotelProperty::setReserveRequirement()
     * @uses HotelProperty::setParticipationLevel()
     * @uses HotelProperty::setAvailability()
     * @uses HotelProperty::setKey()
     * @uses HotelProperty::setPreferredOption()
     * @uses HotelProperty::setMoreRates()
     * @uses HotelProperty::setMoreRatesToken()
     * @uses HotelProperty::setNetTransCommissionInd()
     * @uses HotelProperty::setNumOfRatePlans()
     * @param string $hotelChain
     * @param string $hotelCode
     * @param \Travelport\Hotel\StructType\TypeUnstructuredAddress $propertyAddress
     * @param \Travelport\Hotel\StructType\PhoneNumber[] $phoneNumber
     * @param \Travelport\Hotel\StructType\CoordinateLocation $coordinateLocation
     * @param \Travelport\Hotel\StructType\Distance $distance
     * @param \Travelport\Hotel\StructType\HotelRating[] $hotelRating
     * @param \Travelport\Hotel\StructType\Amenities $amenities
     * @param \Travelport\Hotel\StructType\MarketingMessage $marketingMessage
     * @param string $hotelLocation
     * @param string $name
     * @param string $vendorLocationKey
     * @param int $hotelTransportation
     * @param string $reserveRequirement
     * @param string $participationLevel
     * @param string $availability
     * @param string $key
     * @param bool $preferredOption
     * @param bool $moreRates
     * @param string $moreRatesToken
     * @param string $netTransCommissionInd
     * @param int $numOfRatePlans
     */
    public function __construct(string $hotelChain, string $hotelCode, ?\Travelport\Hotel\StructType\TypeUnstructuredAddress $propertyAddress = null, ?array $phoneNumber = null, ?\Travelport\Hotel\StructType\CoordinateLocation $coordinateLocation = null, ?\Travelport\Hotel\StructType\Distance $distance = null, ?array $hotelRating = null, ?\Travelport\Hotel\StructType\Amenities $amenities = null, ?\Travelport\Hotel\StructType\MarketingMessage $marketingMessage = null, ?string $hotelLocation = null, ?string $name = null, ?string $vendorLocationKey = null, ?int $hotelTransportation = null, ?string $reserveRequirement = null, ?string $participationLevel = null, ?string $availability = null, ?string $key = null, ?bool $preferredOption = null, ?bool $moreRates = null, ?string $moreRatesToken = null, ?string $netTransCommissionInd = null, ?int $numOfRatePlans = null)
    {
        $this
            ->setHotelChain($hotelChain)
            ->setHotelCode($hotelCode)
            ->setPropertyAddress($propertyAddress)
            ->setPhoneNumber($phoneNumber)
            ->setCoordinateLocation($coordinateLocation)
            ->setDistance($distance)
            ->setHotelRating($hotelRating)
            ->setAmenities($amenities)
            ->setMarketingMessage($marketingMessage)
            ->setHotelLocation($hotelLocation)
            ->setName($name)
            ->setVendorLocationKey($vendorLocationKey)
            ->setHotelTransportation($hotelTransportation)
            ->setReserveRequirement($reserveRequirement)
            ->setParticipationLevel($participationLevel)
            ->setAvailability($availability)
            ->setKey($key)
            ->setPreferredOption($preferredOption)
            ->setMoreRates($moreRates)
            ->setMoreRatesToken($moreRatesToken)
            ->setNetTransCommissionInd($netTransCommissionInd)
            ->setNumOfRatePlans($numOfRatePlans);
    }
    /**
     * Get HotelChain value
     * @return string
     */
    public function getHotelChain(): string
    {
        return $this->HotelChain;
    }
    /**
     * Set HotelChain value
     * @param string $hotelChain
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function setHotelChain(string $hotelChain): self
    {
        // validation for constraint: string
        if (!is_null($hotelChain) && !is_string($hotelChain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelChain, true), gettype($hotelChain)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($hotelChain) && mb_strlen((string) $hotelChain) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $hotelChain)), __LINE__);
        }
        $this->HotelChain = $hotelChain;
        
        return $this;
    }
    /**
     * Get HotelCode value
     * @return string
     */
    public function getHotelCode(): string
    {
        return $this->HotelCode;
    }
    /**
     * Set HotelCode value
     * @param string $hotelCode
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function setHotelCode(string $hotelCode): self
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelCode, true), gettype($hotelCode)), __LINE__);
        }
        // validation for constraint: maxLength(32)
        if (!is_null($hotelCode) && mb_strlen((string) $hotelCode) > 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 32', mb_strlen((string) $hotelCode)), __LINE__);
        }
        $this->HotelCode = $hotelCode;
        
        return $this;
    }
    /**
     * Get PropertyAddress value
     * @return \Travelport\Hotel\StructType\TypeUnstructuredAddress|null
     */
    public function getPropertyAddress(): ?\Travelport\Hotel\StructType\TypeUnstructuredAddress
    {
        return $this->PropertyAddress;
    }
    /**
     * Set PropertyAddress value
     * @param \Travelport\Hotel\StructType\TypeUnstructuredAddress $propertyAddress
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function setPropertyAddress(?\Travelport\Hotel\StructType\TypeUnstructuredAddress $propertyAddress = null): self
    {
        $this->PropertyAddress = $propertyAddress;
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\Hotel\StructType\PhoneNumber[]
     */
    public function getPhoneNumber(): ?array
    {
        return $this->PhoneNumber;
    }
    /**
     * This method is responsible for validating the values passed to the setPhoneNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhoneNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhoneNumberForArrayConstraintsFromSetPhoneNumber(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelPropertyPhoneNumberItem) {
            // validation for constraint: itemType
            if (!$hotelPropertyPhoneNumberItem instanceof \Travelport\Hotel\StructType\PhoneNumber) {
                $invalidValues[] = is_object($hotelPropertyPhoneNumberItem) ? get_class($hotelPropertyPhoneNumberItem) : sprintf('%s(%s)', gettype($hotelPropertyPhoneNumberItem), var_export($hotelPropertyPhoneNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PhoneNumber property can only contain items of type \Travelport\Hotel\StructType\PhoneNumber, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PhoneNumber value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\PhoneNumber[] $phoneNumber
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function setPhoneNumber(?array $phoneNumber = null): self
    {
        // validation for constraint: array
        if ('' !== ($phoneNumberArrayErrorMessage = self::validatePhoneNumberForArrayConstraintsFromSetPhoneNumber($phoneNumber))) {
            throw new InvalidArgumentException($phoneNumberArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($phoneNumber) && count($phoneNumber) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Add item to PhoneNumber value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\PhoneNumber $item
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function addToPhoneNumber(\Travelport\Hotel\StructType\PhoneNumber $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\PhoneNumber) {
            throw new InvalidArgumentException(sprintf('The PhoneNumber property can only contain items of type \Travelport\Hotel\StructType\PhoneNumber, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PhoneNumber) && count($this->PhoneNumber) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PhoneNumber)), __LINE__);
        }
        $this->PhoneNumber[] = $item;
        
        return $this;
    }
    /**
     * Get CoordinateLocation value
     * @return \Travelport\Hotel\StructType\CoordinateLocation|null
     */
    public function getCoordinateLocation(): ?\Travelport\Hotel\StructType\CoordinateLocation
    {
        return $this->CoordinateLocation;
    }
    /**
     * Set CoordinateLocation value
     * @param \Travelport\Hotel\StructType\CoordinateLocation $coordinateLocation
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function setCoordinateLocation(?\Travelport\Hotel\StructType\CoordinateLocation $coordinateLocation = null): self
    {
        $this->CoordinateLocation = $coordinateLocation;
        
        return $this;
    }
    /**
     * Get Distance value
     * @return \Travelport\Hotel\StructType\Distance|null
     */
    public function getDistance(): ?\Travelport\Hotel\StructType\Distance
    {
        return $this->Distance;
    }
    /**
     * Set Distance value
     * @param \Travelport\Hotel\StructType\Distance $distance
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function setDistance(?\Travelport\Hotel\StructType\Distance $distance = null): self
    {
        $this->Distance = $distance;
        
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
        foreach ($values as $hotelPropertyHotelRatingItem) {
            // validation for constraint: itemType
            if (!$hotelPropertyHotelRatingItem instanceof \Travelport\Hotel\StructType\HotelRating) {
                $invalidValues[] = is_object($hotelPropertyHotelRatingItem) ? get_class($hotelPropertyHotelRatingItem) : sprintf('%s(%s)', gettype($hotelPropertyHotelRatingItem), var_export($hotelPropertyHotelRatingItem, true));
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
     * @return \Travelport\Hotel\StructType\HotelProperty
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
     * @return \Travelport\Hotel\StructType\HotelProperty
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
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function setAmenities(?\Travelport\Hotel\StructType\Amenities $amenities = null): self
    {
        $this->Amenities = $amenities;
        
        return $this;
    }
    /**
     * Get MarketingMessage value
     * @return \Travelport\Hotel\StructType\MarketingMessage|null
     */
    public function getMarketingMessage(): ?\Travelport\Hotel\StructType\MarketingMessage
    {
        return $this->MarketingMessage;
    }
    /**
     * Set MarketingMessage value
     * @param \Travelport\Hotel\StructType\MarketingMessage $marketingMessage
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function setMarketingMessage(?\Travelport\Hotel\StructType\MarketingMessage $marketingMessage = null): self
    {
        $this->MarketingMessage = $marketingMessage;
        
        return $this;
    }
    /**
     * Get HotelLocation value
     * @return string|null
     */
    public function getHotelLocation(): ?string
    {
        return $this->HotelLocation;
    }
    /**
     * Set HotelLocation value
     * @param string $hotelLocation
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function setHotelLocation(?string $hotelLocation = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelLocation) && !is_string($hotelLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelLocation, true), gettype($hotelLocation)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($hotelLocation) && mb_strlen((string) $hotelLocation) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen((string) $hotelLocation)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($hotelLocation) && mb_strlen((string) $hotelLocation) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $hotelLocation)), __LINE__);
        }
        $this->HotelLocation = $hotelLocation;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get VendorLocationKey value
     * @return string|null
     */
    public function getVendorLocationKey(): ?string
    {
        return $this->VendorLocationKey;
    }
    /**
     * Set VendorLocationKey value
     * @param string $vendorLocationKey
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function setVendorLocationKey(?string $vendorLocationKey = null): self
    {
        // validation for constraint: string
        if (!is_null($vendorLocationKey) && !is_string($vendorLocationKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendorLocationKey, true), gettype($vendorLocationKey)), __LINE__);
        }
        $this->VendorLocationKey = $vendorLocationKey;
        
        return $this;
    }
    /**
     * Get HotelTransportation value
     * @return int|null
     */
    public function getHotelTransportation(): ?int
    {
        return $this->HotelTransportation;
    }
    /**
     * Set HotelTransportation value
     * @param int $hotelTransportation
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function setHotelTransportation(?int $hotelTransportation = null): self
    {
        // validation for constraint: int
        if (!is_null($hotelTransportation) && !(is_int($hotelTransportation) || ctype_digit($hotelTransportation))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hotelTransportation, true), gettype($hotelTransportation)), __LINE__);
        }
        $this->HotelTransportation = $hotelTransportation;
        
        return $this;
    }
    /**
     * Get ReserveRequirement value
     * @return string|null
     */
    public function getReserveRequirement(): ?string
    {
        return $this->ReserveRequirement;
    }
    /**
     * Set ReserveRequirement value
     * @uses \Travelport\Hotel\EnumType\TypeReserveRequirement::valueIsValid()
     * @uses \Travelport\Hotel\EnumType\TypeReserveRequirement::getValidValues()
     * @throws InvalidArgumentException
     * @param string $reserveRequirement
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function setReserveRequirement(?string $reserveRequirement = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Hotel\EnumType\TypeReserveRequirement::valueIsValid($reserveRequirement)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Hotel\EnumType\TypeReserveRequirement', is_array($reserveRequirement) ? implode(', ', $reserveRequirement) : var_export($reserveRequirement, true), implode(', ', \Travelport\Hotel\EnumType\TypeReserveRequirement::getValidValues())), __LINE__);
        }
        $this->ReserveRequirement = $reserveRequirement;
        
        return $this;
    }
    /**
     * Get ParticipationLevel value
     * @return string|null
     */
    public function getParticipationLevel(): ?string
    {
        return $this->ParticipationLevel;
    }
    /**
     * Set ParticipationLevel value
     * @param string $participationLevel
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function setParticipationLevel(?string $participationLevel = null): self
    {
        // validation for constraint: string
        if (!is_null($participationLevel) && !is_string($participationLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($participationLevel, true), gettype($participationLevel)), __LINE__);
        }
        // validation for constraint: length(1)
        if (!is_null($participationLevel) && mb_strlen((string) $participationLevel) !== 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 1', mb_strlen((string) $participationLevel)), __LINE__);
        }
        $this->ParticipationLevel = $participationLevel;
        
        return $this;
    }
    /**
     * Get Availability value
     * @return string|null
     */
    public function getAvailability(): ?string
    {
        return $this->Availability;
    }
    /**
     * Set Availability value
     * @uses \Travelport\Hotel\EnumType\TypeHotelAvailability::valueIsValid()
     * @uses \Travelport\Hotel\EnumType\TypeHotelAvailability::getValidValues()
     * @throws InvalidArgumentException
     * @param string $availability
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function setAvailability(?string $availability = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Hotel\EnumType\TypeHotelAvailability::valueIsValid($availability)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Hotel\EnumType\TypeHotelAvailability', is_array($availability) ? implode(', ', $availability) : var_export($availability, true), implode(', ', \Travelport\Hotel\EnumType\TypeHotelAvailability::getValidValues())), __LINE__);
        }
        $this->Availability = $availability;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get PreferredOption value
     * @return bool|null
     */
    public function getPreferredOption(): ?bool
    {
        return $this->PreferredOption;
    }
    /**
     * Set PreferredOption value
     * @param bool $preferredOption
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function setPreferredOption(?bool $preferredOption = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preferredOption) && !is_bool($preferredOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preferredOption, true), gettype($preferredOption)), __LINE__);
        }
        $this->PreferredOption = $preferredOption;
        
        return $this;
    }
    /**
     * Get MoreRates value
     * @return bool|null
     */
    public function getMoreRates(): ?bool
    {
        return $this->MoreRates;
    }
    /**
     * Set MoreRates value
     * @param bool $moreRates
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function setMoreRates(?bool $moreRates = null): self
    {
        // validation for constraint: boolean
        if (!is_null($moreRates) && !is_bool($moreRates)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($moreRates, true), gettype($moreRates)), __LINE__);
        }
        $this->MoreRates = $moreRates;
        
        return $this;
    }
    /**
     * Get MoreRatesToken value
     * @return string|null
     */
    public function getMoreRatesToken(): ?string
    {
        return $this->MoreRatesToken;
    }
    /**
     * Set MoreRatesToken value
     * @param string $moreRatesToken
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function setMoreRatesToken(?string $moreRatesToken = null): self
    {
        // validation for constraint: string
        if (!is_null($moreRatesToken) && !is_string($moreRatesToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($moreRatesToken, true), gettype($moreRatesToken)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($moreRatesToken) && mb_strlen((string) $moreRatesToken) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $moreRatesToken)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($moreRatesToken) && mb_strlen((string) $moreRatesToken) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $moreRatesToken)), __LINE__);
        }
        $this->MoreRatesToken = $moreRatesToken;
        
        return $this;
    }
    /**
     * Get NetTransCommissionInd value
     * @return string|null
     */
    public function getNetTransCommissionInd(): ?string
    {
        return $this->NetTransCommissionInd;
    }
    /**
     * Set NetTransCommissionInd value
     * @uses \Travelport\Hotel\EnumType\TypeNetTransCommission::valueIsValid()
     * @uses \Travelport\Hotel\EnumType\TypeNetTransCommission::getValidValues()
     * @throws InvalidArgumentException
     * @param string $netTransCommissionInd
     * @return \Travelport\Hotel\StructType\HotelProperty
     */
    public function setNetTransCommissionInd(?string $netTransCommissionInd = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Hotel\EnumType\TypeNetTransCommission::valueIsValid($netTransCommissionInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Hotel\EnumType\TypeNetTransCommission', is_array($netTransCommissionInd) ? implode(', ', $netTransCommissionInd) : var_export($netTransCommissionInd, true), implode(', ', \Travelport\Hotel\EnumType\TypeNetTransCommission::getValidValues())), __LINE__);
        }
        $this->NetTransCommissionInd = $netTransCommissionInd;
        
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
     * @return \Travelport\Hotel\StructType\HotelProperty
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
}
