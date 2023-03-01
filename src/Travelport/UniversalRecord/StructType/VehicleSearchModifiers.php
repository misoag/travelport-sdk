<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleSearchModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Use to specify Driver's age. Supported Providers: 1P. | Allows vehicle search with Special equipment by specifying special equipment type. e.g. “BikeRack”. Not supported by all vendors. 1P only. | Supported Providers: 1P. Only
 * type IataNumber is valid. | Search Car by reference point | Controls and switches for the Vehicle Search request
 * @subpackage Structs
 */
class VehicleSearchModifiers extends AbstractStructBase
{
    /**
     * The PermittedVendors
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\PermittedVendors|null
     */
    public ?\Travelport\UniversalRecord\StructType\PermittedVendors $PermittedVendors = null;
    /**
     * The ProhibitedVendors
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ProhibitedVendors|null
     */
    public ?\Travelport\UniversalRecord\StructType\ProhibitedVendors $ProhibitedVendors = null;
    /**
     * The VehicleModifier
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: VehicleModifier
     * @var \Travelport\UniversalRecord\StructType\VehicleModifier[]
     */
    public ?array $VehicleModifier = null;
    /**
     * The VehicleType
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: VehicleType
     * @var \Travelport\UniversalRecord\StructType\VehicleType[]
     */
    public ?array $VehicleType = null;
    /**
     * The RateModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RateModifiers
     * @var \Travelport\UniversalRecord\StructType\RateModifiers[]
     */
    public ?array $RateModifiers = null;
    /**
     * The RateHostIndicator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeRateHostIndicator|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeRateHostIndicator $RateHostIndicator = null;
    /**
     * The LoyaltyCard
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:LoyaltyCard
     * @var \Travelport\UniversalRecord\StructType\LoyaltyCard[]
     */
    public ?array $LoyaltyCard = null;
    /**
     * The ReferencePoint
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - minOccurs: 0
     * - ref: common:ReferencePoint
     * @var string|null
     */
    public ?string $ReferencePoint = null;
    /**
     * The BookingSource
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:BookingSource
     * @var \Travelport\UniversalRecord\StructType\BookingSource|null
     */
    public ?\Travelport\UniversalRecord\StructType\BookingSource $BookingSource = null;
    /**
     * The SpecialEquipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: common:SpecialEquipment
     * @var \Travelport\UniversalRecord\StructType\SpecialEquipment[]
     */
    public ?array $SpecialEquipment = null;
    /**
     * The SearchDistance
     * Meta information extracted from the WSDL
     * - documentation: Distance from search location. Supported for standard car search. Providers: 1g/1v
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeVehicleSearchDistance|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeVehicleSearchDistance $SearchDistance = null;
    /**
     * The Policy
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Policy
     * @var \Travelport\UniversalRecord\StructType\TypeKeyword[]
     */
    public ?array $Policy = null;
    /**
     * The DriverInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: DriverInfo
     * @var \Travelport\UniversalRecord\StructType\DriverInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\DriverInfo $DriverInfo = null;
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
     * The PreferredCurrency
     * Meta information extracted from the WSDL
     * - documentation: Alternate currency | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    public ?string $PreferredCurrency = null;
    /**
     * The UnlimitedMileage
     * Meta information extracted from the WSDL
     * - documentation: Set to true to search for rates with unlimited mileage.Defaults to false.
     * - use: optional
     * @var bool|null
     */
    public ?bool $UnlimitedMileage = null;
    /**
     * The RateCategory
     * Meta information extracted from the WSDL
     * - documentation: The category of this rate (Best, etc)
     * - use: optional
     * @var string|null
     */
    public ?string $RateCategory = null;
    /**
     * The RateGuaranteed
     * Meta information extracted from the WSDL
     * - documentation: Guarantee indicator for vehicle rate.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $RateGuaranteed = null;
    /**
     * The RatePeriod
     * Meta information extracted from the WSDL
     * - documentation: The period for the rate code (daily, weekly, etc)
     * - use: optional
     * @var string|null
     */
    public ?string $RatePeriod = null;
    /**
     * The SellableRatesOnly
     * Meta information extracted from the WSDL
     * - documentation: Set to true to search for sellable rates only. Default is to search for all rates. Providers: 1p
     * - use: optional
     * @var bool|null
     */
    public ?bool $SellableRatesOnly = null;
    /**
     * The ReturnSourceCurrency
     * Meta information extracted from the WSDL
     * - documentation: Set to true to return the rate details in Vendor filed currency. Defaults to false. Supported Providers: 1G,1V.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnSourceCurrency = null;
    /**
     * Constructor method for VehicleSearchModifiers
     * @uses VehicleSearchModifiers::setPermittedVendors()
     * @uses VehicleSearchModifiers::setProhibitedVendors()
     * @uses VehicleSearchModifiers::setVehicleModifier()
     * @uses VehicleSearchModifiers::setVehicleType()
     * @uses VehicleSearchModifiers::setRateModifiers()
     * @uses VehicleSearchModifiers::setRateHostIndicator()
     * @uses VehicleSearchModifiers::setLoyaltyCard()
     * @uses VehicleSearchModifiers::setReferencePoint()
     * @uses VehicleSearchModifiers::setBookingSource()
     * @uses VehicleSearchModifiers::setSpecialEquipment()
     * @uses VehicleSearchModifiers::setSearchDistance()
     * @uses VehicleSearchModifiers::setPolicy()
     * @uses VehicleSearchModifiers::setDriverInfo()
     * @uses VehicleSearchModifiers::setKey()
     * @uses VehicleSearchModifiers::setPreferredCurrency()
     * @uses VehicleSearchModifiers::setUnlimitedMileage()
     * @uses VehicleSearchModifiers::setRateCategory()
     * @uses VehicleSearchModifiers::setRateGuaranteed()
     * @uses VehicleSearchModifiers::setRatePeriod()
     * @uses VehicleSearchModifiers::setSellableRatesOnly()
     * @uses VehicleSearchModifiers::setReturnSourceCurrency()
     * @param \Travelport\UniversalRecord\StructType\PermittedVendors $permittedVendors
     * @param \Travelport\UniversalRecord\StructType\ProhibitedVendors $prohibitedVendors
     * @param \Travelport\UniversalRecord\StructType\VehicleModifier[] $vehicleModifier
     * @param \Travelport\UniversalRecord\StructType\VehicleType[] $vehicleType
     * @param \Travelport\UniversalRecord\StructType\RateModifiers[] $rateModifiers
     * @param \Travelport\UniversalRecord\StructType\TypeRateHostIndicator $rateHostIndicator
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCard[] $loyaltyCard
     * @param string $referencePoint
     * @param \Travelport\UniversalRecord\StructType\BookingSource $bookingSource
     * @param \Travelport\UniversalRecord\StructType\SpecialEquipment[] $specialEquipment
     * @param \Travelport\UniversalRecord\StructType\TypeVehicleSearchDistance $searchDistance
     * @param \Travelport\UniversalRecord\StructType\TypeKeyword[] $policy
     * @param \Travelport\UniversalRecord\StructType\DriverInfo $driverInfo
     * @param string $key
     * @param string $preferredCurrency
     * @param bool $unlimitedMileage
     * @param string $rateCategory
     * @param bool $rateGuaranteed
     * @param string $ratePeriod
     * @param bool $sellableRatesOnly
     * @param bool $returnSourceCurrency
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\PermittedVendors $permittedVendors = null, ?\Travelport\UniversalRecord\StructType\ProhibitedVendors $prohibitedVendors = null, ?array $vehicleModifier = null, ?array $vehicleType = null, ?array $rateModifiers = null, ?\Travelport\UniversalRecord\StructType\TypeRateHostIndicator $rateHostIndicator = null, ?array $loyaltyCard = null, ?string $referencePoint = null, ?\Travelport\UniversalRecord\StructType\BookingSource $bookingSource = null, ?array $specialEquipment = null, ?\Travelport\UniversalRecord\StructType\TypeVehicleSearchDistance $searchDistance = null, ?array $policy = null, ?\Travelport\UniversalRecord\StructType\DriverInfo $driverInfo = null, ?string $key = null, ?string $preferredCurrency = null, ?bool $unlimitedMileage = null, ?string $rateCategory = null, ?bool $rateGuaranteed = false, ?string $ratePeriod = null, ?bool $sellableRatesOnly = null, ?bool $returnSourceCurrency = false)
    {
        $this
            ->setPermittedVendors($permittedVendors)
            ->setProhibitedVendors($prohibitedVendors)
            ->setVehicleModifier($vehicleModifier)
            ->setVehicleType($vehicleType)
            ->setRateModifiers($rateModifiers)
            ->setRateHostIndicator($rateHostIndicator)
            ->setLoyaltyCard($loyaltyCard)
            ->setReferencePoint($referencePoint)
            ->setBookingSource($bookingSource)
            ->setSpecialEquipment($specialEquipment)
            ->setSearchDistance($searchDistance)
            ->setPolicy($policy)
            ->setDriverInfo($driverInfo)
            ->setKey($key)
            ->setPreferredCurrency($preferredCurrency)
            ->setUnlimitedMileage($unlimitedMileage)
            ->setRateCategory($rateCategory)
            ->setRateGuaranteed($rateGuaranteed)
            ->setRatePeriod($ratePeriod)
            ->setSellableRatesOnly($sellableRatesOnly)
            ->setReturnSourceCurrency($returnSourceCurrency);
    }
    /**
     * Get PermittedVendors value
     * @return \Travelport\UniversalRecord\StructType\PermittedVendors|null
     */
    public function getPermittedVendors(): ?\Travelport\UniversalRecord\StructType\PermittedVendors
    {
        return $this->PermittedVendors;
    }
    /**
     * Set PermittedVendors value
     * @param \Travelport\UniversalRecord\StructType\PermittedVendors $permittedVendors
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setPermittedVendors(?\Travelport\UniversalRecord\StructType\PermittedVendors $permittedVendors = null): self
    {
        $this->PermittedVendors = $permittedVendors;
        
        return $this;
    }
    /**
     * Get ProhibitedVendors value
     * @return \Travelport\UniversalRecord\StructType\ProhibitedVendors|null
     */
    public function getProhibitedVendors(): ?\Travelport\UniversalRecord\StructType\ProhibitedVendors
    {
        return $this->ProhibitedVendors;
    }
    /**
     * Set ProhibitedVendors value
     * @param \Travelport\UniversalRecord\StructType\ProhibitedVendors $prohibitedVendors
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setProhibitedVendors(?\Travelport\UniversalRecord\StructType\ProhibitedVendors $prohibitedVendors = null): self
    {
        $this->ProhibitedVendors = $prohibitedVendors;
        
        return $this;
    }
    /**
     * Get VehicleModifier value
     * @return \Travelport\UniversalRecord\StructType\VehicleModifier[]
     */
    public function getVehicleModifier(): ?array
    {
        return $this->VehicleModifier;
    }
    /**
     * Set VehicleModifier value
     * @param \Travelport\UniversalRecord\StructType\VehicleModifier[] $vehicleModifier
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setVehicleModifier(?array $vehicleModifier = null): self
    {
        $this->VehicleModifier = $vehicleModifier;
        
        return $this;
    }
    /**
     * Add item to VehicleModifier value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleModifier $item
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function addToVehicleModifier(\Travelport\UniversalRecord\StructType\VehicleModifier $item): self
    {
        $this->VehicleModifier[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleType value
     * @return \Travelport\UniversalRecord\StructType\VehicleType[]
     */
    public function getVehicleType(): ?array
    {
        return $this->VehicleType;
    }
    /**
     * Set VehicleType value
     * @param \Travelport\UniversalRecord\StructType\VehicleType[] $vehicleType
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setVehicleType(?array $vehicleType = null): self
    {
        $this->VehicleType = $vehicleType;
        
        return $this;
    }
    /**
     * Add item to VehicleType value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleType $item
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function addToVehicleType(\Travelport\UniversalRecord\StructType\VehicleType $item): self
    {
        $this->VehicleType[] = $item;
        
        return $this;
    }
    /**
     * Get RateModifiers value
     * @return \Travelport\UniversalRecord\StructType\RateModifiers[]
     */
    public function getRateModifiers(): ?array
    {
        return $this->RateModifiers;
    }
    /**
     * Set RateModifiers value
     * @param \Travelport\UniversalRecord\StructType\RateModifiers[] $rateModifiers
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setRateModifiers(?array $rateModifiers = null): self
    {
        $this->RateModifiers = $rateModifiers;
        
        return $this;
    }
    /**
     * Add item to RateModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RateModifiers $item
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function addToRateModifiers(\Travelport\UniversalRecord\StructType\RateModifiers $item): self
    {
        $this->RateModifiers[] = $item;
        
        return $this;
    }
    /**
     * Get RateHostIndicator value
     * @return \Travelport\UniversalRecord\StructType\TypeRateHostIndicator|null
     */
    public function getRateHostIndicator(): ?\Travelport\UniversalRecord\StructType\TypeRateHostIndicator
    {
        return $this->RateHostIndicator;
    }
    /**
     * Set RateHostIndicator value
     * @param \Travelport\UniversalRecord\StructType\TypeRateHostIndicator $rateHostIndicator
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setRateHostIndicator(?\Travelport\UniversalRecord\StructType\TypeRateHostIndicator $rateHostIndicator = null): self
    {
        $this->RateHostIndicator = $rateHostIndicator;
        
        return $this;
    }
    /**
     * Get LoyaltyCard value
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard[]
     */
    public function getLoyaltyCard(): ?array
    {
        return $this->LoyaltyCard;
    }
    /**
     * Set LoyaltyCard value
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCard[] $loyaltyCard
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setLoyaltyCard(?array $loyaltyCard = null): self
    {
        $this->LoyaltyCard = $loyaltyCard;
        
        return $this;
    }
    /**
     * Add item to LoyaltyCard value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCard $item
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function addToLoyaltyCard(\Travelport\UniversalRecord\StructType\LoyaltyCard $item): self
    {
        $this->LoyaltyCard[] = $item;
        
        return $this;
    }
    /**
     * Get ReferencePoint value
     * @return string|null
     */
    public function getReferencePoint(): ?string
    {
        return $this->ReferencePoint;
    }
    /**
     * Set ReferencePoint value
     * @param string $referencePoint
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setReferencePoint(?string $referencePoint = null): self
    {
        $this->ReferencePoint = $referencePoint;
        
        return $this;
    }
    /**
     * Get BookingSource value
     * @return \Travelport\UniversalRecord\StructType\BookingSource|null
     */
    public function getBookingSource(): ?\Travelport\UniversalRecord\StructType\BookingSource
    {
        return $this->BookingSource;
    }
    /**
     * Set BookingSource value
     * @param \Travelport\UniversalRecord\StructType\BookingSource $bookingSource
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setBookingSource(?\Travelport\UniversalRecord\StructType\BookingSource $bookingSource = null): self
    {
        $this->BookingSource = $bookingSource;
        
        return $this;
    }
    /**
     * Get SpecialEquipment value
     * @return \Travelport\UniversalRecord\StructType\SpecialEquipment[]
     */
    public function getSpecialEquipment(): ?array
    {
        return $this->SpecialEquipment;
    }
    /**
     * Set SpecialEquipment value
     * @param \Travelport\UniversalRecord\StructType\SpecialEquipment[] $specialEquipment
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setSpecialEquipment(?array $specialEquipment = null): self
    {
        $this->SpecialEquipment = $specialEquipment;
        
        return $this;
    }
    /**
     * Add item to SpecialEquipment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SpecialEquipment $item
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function addToSpecialEquipment(\Travelport\UniversalRecord\StructType\SpecialEquipment $item): self
    {
        $this->SpecialEquipment[] = $item;
        
        return $this;
    }
    /**
     * Get SearchDistance value
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleSearchDistance|null
     */
    public function getSearchDistance(): ?\Travelport\UniversalRecord\StructType\TypeVehicleSearchDistance
    {
        return $this->SearchDistance;
    }
    /**
     * Set SearchDistance value
     * @param \Travelport\UniversalRecord\StructType\TypeVehicleSearchDistance $searchDistance
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setSearchDistance(?\Travelport\UniversalRecord\StructType\TypeVehicleSearchDistance $searchDistance = null): self
    {
        $this->SearchDistance = $searchDistance;
        
        return $this;
    }
    /**
     * Get Policy value
     * @return \Travelport\UniversalRecord\StructType\TypeKeyword[]
     */
    public function getPolicy(): ?array
    {
        return $this->Policy;
    }
    /**
     * Set Policy value
     * @param \Travelport\UniversalRecord\StructType\TypeKeyword[] $policy
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setPolicy(?array $policy = null): self
    {
        $this->Policy = $policy;
        
        return $this;
    }
    /**
     * Add item to Policy value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeKeyword $item
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function addToPolicy(\Travelport\UniversalRecord\StructType\TypeKeyword $item): self
    {
        $this->Policy[] = $item;
        
        return $this;
    }
    /**
     * Get DriverInfo value
     * @return \Travelport\UniversalRecord\StructType\DriverInfo|null
     */
    public function getDriverInfo(): ?\Travelport\UniversalRecord\StructType\DriverInfo
    {
        return $this->DriverInfo;
    }
    /**
     * Set DriverInfo value
     * @param \Travelport\UniversalRecord\StructType\DriverInfo $driverInfo
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setDriverInfo(?\Travelport\UniversalRecord\StructType\DriverInfo $driverInfo = null): self
    {
        $this->DriverInfo = $driverInfo;
        
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
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
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
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setPreferredCurrency(?string $preferredCurrency = null): self
    {
        $this->PreferredCurrency = $preferredCurrency;
        
        return $this;
    }
    /**
     * Get UnlimitedMileage value
     * @return bool|null
     */
    public function getUnlimitedMileage(): ?bool
    {
        return $this->UnlimitedMileage;
    }
    /**
     * Set UnlimitedMileage value
     * @param bool $unlimitedMileage
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setUnlimitedMileage(?bool $unlimitedMileage = null): self
    {
        $this->UnlimitedMileage = $unlimitedMileage;
        
        return $this;
    }
    /**
     * Get RateCategory value
     * @return string|null
     */
    public function getRateCategory(): ?string
    {
        return $this->RateCategory;
    }
    /**
     * Set RateCategory value
     * @param string $rateCategory
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setRateCategory(?string $rateCategory = null): self
    {
        $this->RateCategory = $rateCategory;
        
        return $this;
    }
    /**
     * Get RateGuaranteed value
     * @return bool|null
     */
    public function getRateGuaranteed(): ?bool
    {
        return $this->RateGuaranteed;
    }
    /**
     * Set RateGuaranteed value
     * @param bool $rateGuaranteed
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setRateGuaranteed(?bool $rateGuaranteed = false): self
    {
        $this->RateGuaranteed = $rateGuaranteed;
        
        return $this;
    }
    /**
     * Get RatePeriod value
     * @return string|null
     */
    public function getRatePeriod(): ?string
    {
        return $this->RatePeriod;
    }
    /**
     * Set RatePeriod value
     * @param string $ratePeriod
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setRatePeriod(?string $ratePeriod = null): self
    {
        $this->RatePeriod = $ratePeriod;
        
        return $this;
    }
    /**
     * Get SellableRatesOnly value
     * @return bool|null
     */
    public function getSellableRatesOnly(): ?bool
    {
        return $this->SellableRatesOnly;
    }
    /**
     * Set SellableRatesOnly value
     * @param bool $sellableRatesOnly
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setSellableRatesOnly(?bool $sellableRatesOnly = null): self
    {
        $this->SellableRatesOnly = $sellableRatesOnly;
        
        return $this;
    }
    /**
     * Get ReturnSourceCurrency value
     * @return bool|null
     */
    public function getReturnSourceCurrency(): ?bool
    {
        return $this->ReturnSourceCurrency;
    }
    /**
     * Set ReturnSourceCurrency value
     * @param bool $returnSourceCurrency
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setReturnSourceCurrency(?bool $returnSourceCurrency = false): self
    {
        $this->ReturnSourceCurrency = $returnSourceCurrency;
        
        return $this;
    }
}
