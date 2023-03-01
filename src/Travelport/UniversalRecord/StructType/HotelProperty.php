<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $HotelChain;
    /**
     * The HotelCode
     * Meta information extracted from the WSDL
     * - documentation: Unique hotel identifier for the channel
     * - base: xs:string
     * - maxLength: 32
     * - use: required
     * @var string
     */
    public string $HotelCode;
    /**
     * The PropertyAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeUnstructuredAddress|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeUnstructuredAddress $PropertyAddress = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:PhoneNumber
     * @var \Travelport\UniversalRecord\StructType\PhoneNumber[]
     */
    public ?array $PhoneNumber = null;
    /**
     * The CoordinateLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:CoordinateLocation
     * @var \Travelport\UniversalRecord\StructType\CoordinateLocation|null
     */
    public ?\Travelport\UniversalRecord\StructType\CoordinateLocation $CoordinateLocation = null;
    /**
     * The Distance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Distance
     * @var \Travelport\UniversalRecord\StructType\Distance|null
     */
    public ?\Travelport\UniversalRecord\StructType\Distance $Distance = null;
    /**
     * The HotelRating
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelRating
     * @var \Travelport\UniversalRecord\StructType\HotelRating[]
     */
    public ?array $HotelRating = null;
    /**
     * The Amenities
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Amenities
     * @var \Travelport\UniversalRecord\StructType\Amenities|null
     */
    public ?\Travelport\UniversalRecord\StructType\Amenities $Amenities = null;
    /**
     * The MarketingMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MarketingMessage
     * @var \Travelport\UniversalRecord\StructType\MarketingMessage|null
     */
    public ?\Travelport\UniversalRecord\StructType\MarketingMessage $MarketingMessage = null;
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
    public ?string $HotelLocation = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Name = null;
    /**
     * The VendorLocationKey
     * Meta information extracted from the WSDL
     * - documentation: The VendorLocationKey for this HotelProperty.
     * - use: optional
     * @var string|null
     */
    public ?string $VendorLocationKey = null;
    /**
     * The HotelTransportation
     * Meta information extracted from the WSDL
     * - documentation: OTA Transporation code. Transportation available to hotel. | Refers to Open Travel Code
     * - base: xs:positiveInteger
     * - use: optional
     * @var int|null
     */
    public ?int $HotelTransportation = null;
    /**
     * The ReserveRequirement
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $ReserveRequirement = null;
    /**
     * The ParticipationLevel
     * Meta information extracted from the WSDL
     * - documentation: 2=Best Available Rate 1G, 1V, 4=Lowest Possible Rate 1G, 1V, 1P | Used for Character Strings, length 1.
     * - base: xs:string
     * - length: 1
     * - use: optional
     * @var string|null
     */
    public ?string $ParticipationLevel = null;
    /**
     * The Availability
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Availability = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The PreferredOption
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to indicate if the vendors responsible for the fare or rate being returned have been determined to be ‘preferred’ based on the associated policy settings.
     * - use: optional
     * @var bool|null
     */
    public ?bool $PreferredOption = null;
    /**
     * The MoreRates
     * Meta information extracted from the WSDL
     * - documentation: When true, more rates are available for this hotel property.Applicable only for HotelDetails and HotelSuperShopper. Supported Providers: 1G, 1V.
     * @var bool|null
     */
    public ?bool $MoreRates = null;
    /**
     * The MoreRatesToken
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $MoreRatesToken = null;
    /**
     * The NetTransCommissionInd
     * Meta information extracted from the WSDL
     * - documentation: This attribute indicates whether hotel property is tracking through net trans commission indicator.
     * - use: optional
     * @var string|null
     */
    public ?string $NetTransCommissionInd = null;
    /**
     * The NumOfRatePlans
     * Meta information extracted from the WSDL
     * - documentation: The specific number of RatePlanTypes for each property responded on the message, integer 1 - 999. Supported provider: HotelSuperShopper message only.
     * - use: optional
     * @var int|null
     */
    public ?int $NumOfRatePlans = null;
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
     * @param \Travelport\UniversalRecord\StructType\TypeUnstructuredAddress $propertyAddress
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber[] $phoneNumber
     * @param \Travelport\UniversalRecord\StructType\CoordinateLocation $coordinateLocation
     * @param \Travelport\UniversalRecord\StructType\Distance $distance
     * @param \Travelport\UniversalRecord\StructType\HotelRating[] $hotelRating
     * @param \Travelport\UniversalRecord\StructType\Amenities $amenities
     * @param \Travelport\UniversalRecord\StructType\MarketingMessage $marketingMessage
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
    public function __construct(string $hotelChain, string $hotelCode, ?\Travelport\UniversalRecord\StructType\TypeUnstructuredAddress $propertyAddress = null, ?array $phoneNumber = null, ?\Travelport\UniversalRecord\StructType\CoordinateLocation $coordinateLocation = null, ?\Travelport\UniversalRecord\StructType\Distance $distance = null, ?array $hotelRating = null, ?\Travelport\UniversalRecord\StructType\Amenities $amenities = null, ?\Travelport\UniversalRecord\StructType\MarketingMessage $marketingMessage = null, ?string $hotelLocation = null, ?string $name = null, ?string $vendorLocationKey = null, ?int $hotelTransportation = null, ?string $reserveRequirement = null, ?string $participationLevel = null, ?string $availability = null, ?string $key = null, ?bool $preferredOption = null, ?bool $moreRates = null, ?string $moreRatesToken = null, ?string $netTransCommissionInd = null, ?int $numOfRatePlans = null)
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
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setHotelChain(string $hotelChain): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setHotelCode(string $hotelCode): self
    {
        $this->HotelCode = $hotelCode;
        
        return $this;
    }
    /**
     * Get PropertyAddress value
     * @return \Travelport\UniversalRecord\StructType\TypeUnstructuredAddress|null
     */
    public function getPropertyAddress(): ?\Travelport\UniversalRecord\StructType\TypeUnstructuredAddress
    {
        return $this->PropertyAddress;
    }
    /**
     * Set PropertyAddress value
     * @param \Travelport\UniversalRecord\StructType\TypeUnstructuredAddress $propertyAddress
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setPropertyAddress(?\Travelport\UniversalRecord\StructType\TypeUnstructuredAddress $propertyAddress = null): self
    {
        $this->PropertyAddress = $propertyAddress;
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\UniversalRecord\StructType\PhoneNumber[]
     */
    public function getPhoneNumber(): ?array
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber[] $phoneNumber
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setPhoneNumber(?array $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Add item to PhoneNumber value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber $item
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function addToPhoneNumber(\Travelport\UniversalRecord\StructType\PhoneNumber $item): self
    {
        $this->PhoneNumber[] = $item;
        
        return $this;
    }
    /**
     * Get CoordinateLocation value
     * @return \Travelport\UniversalRecord\StructType\CoordinateLocation|null
     */
    public function getCoordinateLocation(): ?\Travelport\UniversalRecord\StructType\CoordinateLocation
    {
        return $this->CoordinateLocation;
    }
    /**
     * Set CoordinateLocation value
     * @param \Travelport\UniversalRecord\StructType\CoordinateLocation $coordinateLocation
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setCoordinateLocation(?\Travelport\UniversalRecord\StructType\CoordinateLocation $coordinateLocation = null): self
    {
        $this->CoordinateLocation = $coordinateLocation;
        
        return $this;
    }
    /**
     * Get Distance value
     * @return \Travelport\UniversalRecord\StructType\Distance|null
     */
    public function getDistance(): ?\Travelport\UniversalRecord\StructType\Distance
    {
        return $this->Distance;
    }
    /**
     * Set Distance value
     * @param \Travelport\UniversalRecord\StructType\Distance $distance
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setDistance(?\Travelport\UniversalRecord\StructType\Distance $distance = null): self
    {
        $this->Distance = $distance;
        
        return $this;
    }
    /**
     * Get HotelRating value
     * @return \Travelport\UniversalRecord\StructType\HotelRating[]
     */
    public function getHotelRating(): ?array
    {
        return $this->HotelRating;
    }
    /**
     * Set HotelRating value
     * @param \Travelport\UniversalRecord\StructType\HotelRating[] $hotelRating
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setHotelRating(?array $hotelRating = null): self
    {
        $this->HotelRating = $hotelRating;
        
        return $this;
    }
    /**
     * Add item to HotelRating value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelRating $item
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function addToHotelRating(\Travelport\UniversalRecord\StructType\HotelRating $item): self
    {
        $this->HotelRating[] = $item;
        
        return $this;
    }
    /**
     * Get Amenities value
     * @return \Travelport\UniversalRecord\StructType\Amenities|null
     */
    public function getAmenities(): ?\Travelport\UniversalRecord\StructType\Amenities
    {
        return $this->Amenities;
    }
    /**
     * Set Amenities value
     * @param \Travelport\UniversalRecord\StructType\Amenities $amenities
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setAmenities(?\Travelport\UniversalRecord\StructType\Amenities $amenities = null): self
    {
        $this->Amenities = $amenities;
        
        return $this;
    }
    /**
     * Get MarketingMessage value
     * @return \Travelport\UniversalRecord\StructType\MarketingMessage|null
     */
    public function getMarketingMessage(): ?\Travelport\UniversalRecord\StructType\MarketingMessage
    {
        return $this->MarketingMessage;
    }
    /**
     * Set MarketingMessage value
     * @param \Travelport\UniversalRecord\StructType\MarketingMessage $marketingMessage
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setMarketingMessage(?\Travelport\UniversalRecord\StructType\MarketingMessage $marketingMessage = null): self
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
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setHotelLocation(?string $hotelLocation = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setName(?string $name = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setVendorLocationKey(?string $vendorLocationKey = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setHotelTransportation(?int $hotelTransportation = null): self
    {
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
     * @param string $reserveRequirement
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setReserveRequirement(?string $reserveRequirement = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setParticipationLevel(?string $participationLevel = null): self
    {
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
     * @param string $availability
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setAvailability(?string $availability = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setKey(?string $key = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setPreferredOption(?bool $preferredOption = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setMoreRates(?bool $moreRates = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setMoreRatesToken(?string $moreRatesToken = null): self
    {
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
     * @param string $netTransCommissionInd
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setNetTransCommissionInd(?string $netTransCommissionInd = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\HotelProperty
     */
    public function setNumOfRatePlans(?int $numOfRatePlans = null): self
    {
        $this->NumOfRatePlans = $numOfRatePlans;
        
        return $this;
    }
}
