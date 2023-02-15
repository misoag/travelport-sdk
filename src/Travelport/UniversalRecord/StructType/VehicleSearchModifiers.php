<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?\Travelport\UniversalRecord\StructType\PermittedVendors $PermittedVendors = null;
    /**
     * The ProhibitedVendors
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ProhibitedVendors|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ProhibitedVendors $ProhibitedVendors = null;
    /**
     * The VehicleModifier
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: VehicleModifier
     * @var \Travelport\UniversalRecord\StructType\VehicleModifier[]
     */
    protected ?array $VehicleModifier = null;
    /**
     * The VehicleType
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: VehicleType
     * @var \Travelport\UniversalRecord\StructType\VehicleType[]
     */
    protected ?array $VehicleType = null;
    /**
     * The RateModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RateModifiers
     * @var \Travelport\UniversalRecord\StructType\RateModifiers[]
     */
    protected ?array $RateModifiers = null;
    /**
     * The RateHostIndicator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeRateHostIndicator|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeRateHostIndicator $RateHostIndicator = null;
    /**
     * The LoyaltyCard
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:LoyaltyCard
     * @var \Travelport\UniversalRecord\StructType\LoyaltyCard[]
     */
    protected ?array $LoyaltyCard = null;
    /**
     * The ReferencePoint
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - minOccurs: 0
     * - ref: common:ReferencePoint
     * @var string|null
     */
    protected ?string $ReferencePoint = null;
    /**
     * The BookingSource
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:BookingSource
     * @var \Travelport\UniversalRecord\StructType\BookingSource|null
     */
    protected ?\Travelport\UniversalRecord\StructType\BookingSource $BookingSource = null;
    /**
     * The SpecialEquipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: common:SpecialEquipment
     * @var \Travelport\UniversalRecord\StructType\SpecialEquipment[]
     */
    protected ?array $SpecialEquipment = null;
    /**
     * The SearchDistance
     * Meta information extracted from the WSDL
     * - documentation: Distance from search location. Supported for standard car search. Providers: 1g/1v
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeVehicleSearchDistance|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeVehicleSearchDistance $SearchDistance = null;
    /**
     * The Policy
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Policy
     * @var \Travelport\UniversalRecord\StructType\TypeKeyword[]
     */
    protected ?array $Policy = null;
    /**
     * The DriverInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: DriverInfo
     * @var \Travelport\UniversalRecord\StructType\DriverInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\DriverInfo $DriverInfo = null;
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
     * The PreferredCurrency
     * Meta information extracted from the WSDL
     * - documentation: Alternate currency | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $PreferredCurrency = null;
    /**
     * The UnlimitedMileage
     * Meta information extracted from the WSDL
     * - documentation: Set to true to search for rates with unlimited mileage.Defaults to false.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $UnlimitedMileage = null;
    /**
     * The RateCategory
     * Meta information extracted from the WSDL
     * - documentation: The category of this rate (Best, etc)
     * - use: optional
     * @var string|null
     */
    protected ?string $RateCategory = null;
    /**
     * The RateGuaranteed
     * Meta information extracted from the WSDL
     * - documentation: Guarantee indicator for vehicle rate.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $RateGuaranteed = null;
    /**
     * The RatePeriod
     * Meta information extracted from the WSDL
     * - documentation: The period for the rate code (daily, weekly, etc)
     * - use: optional
     * @var string|null
     */
    protected ?string $RatePeriod = null;
    /**
     * The SellableRatesOnly
     * Meta information extracted from the WSDL
     * - documentation: Set to true to search for sellable rates only. Default is to search for all rates. Providers: 1p
     * - use: optional
     * @var bool|null
     */
    protected ?bool $SellableRatesOnly = null;
    /**
     * The ReturnSourceCurrency
     * Meta information extracted from the WSDL
     * - documentation: Set to true to return the rate details in Vendor filed currency. Defaults to false. Supported Providers: 1G,1V.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReturnSourceCurrency = null;
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
     * This method is responsible for validating the values passed to the setVehicleModifier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleModifier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleModifierForArrayConstraintsFromSetVehicleModifier(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehicleSearchModifiersVehicleModifierItem) {
            // validation for constraint: itemType
            if (!$vehicleSearchModifiersVehicleModifierItem instanceof \Travelport\UniversalRecord\StructType\VehicleModifier) {
                $invalidValues[] = is_object($vehicleSearchModifiersVehicleModifierItem) ? get_class($vehicleSearchModifiersVehicleModifierItem) : sprintf('%s(%s)', gettype($vehicleSearchModifiersVehicleModifierItem), var_export($vehicleSearchModifiersVehicleModifierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleModifier property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleModifier, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VehicleModifier value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleModifier[] $vehicleModifier
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setVehicleModifier(?array $vehicleModifier = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleModifierArrayErrorMessage = self::validateVehicleModifierForArrayConstraintsFromSetVehicleModifier($vehicleModifier))) {
            throw new InvalidArgumentException($vehicleModifierArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicleModifier) && count($vehicleModifier) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicleModifier)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VehicleModifier) {
            throw new InvalidArgumentException(sprintf('The VehicleModifier property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleModifier, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehicleModifier) && count($this->VehicleModifier) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehicleModifier)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setVehicleType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleTypeForArrayConstraintsFromSetVehicleType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehicleSearchModifiersVehicleTypeItem) {
            // validation for constraint: itemType
            if (!$vehicleSearchModifiersVehicleTypeItem instanceof \Travelport\UniversalRecord\StructType\VehicleType) {
                $invalidValues[] = is_object($vehicleSearchModifiersVehicleTypeItem) ? get_class($vehicleSearchModifiersVehicleTypeItem) : sprintf('%s(%s)', gettype($vehicleSearchModifiersVehicleTypeItem), var_export($vehicleSearchModifiersVehicleTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleType property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VehicleType value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleType[] $vehicleType
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setVehicleType(?array $vehicleType = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleTypeArrayErrorMessage = self::validateVehicleTypeForArrayConstraintsFromSetVehicleType($vehicleType))) {
            throw new InvalidArgumentException($vehicleTypeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicleType) && count($vehicleType) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicleType)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VehicleType) {
            throw new InvalidArgumentException(sprintf('The VehicleType property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehicleType) && count($this->VehicleType) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehicleType)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setRateModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRateModifiers method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRateModifiersForArrayConstraintsFromSetRateModifiers(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehicleSearchModifiersRateModifiersItem) {
            // validation for constraint: itemType
            if (!$vehicleSearchModifiersRateModifiersItem instanceof \Travelport\UniversalRecord\StructType\RateModifiers) {
                $invalidValues[] = is_object($vehicleSearchModifiersRateModifiersItem) ? get_class($vehicleSearchModifiersRateModifiersItem) : sprintf('%s(%s)', gettype($vehicleSearchModifiersRateModifiersItem), var_export($vehicleSearchModifiersRateModifiersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RateModifiers property can only contain items of type \Travelport\UniversalRecord\StructType\RateModifiers, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RateModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RateModifiers[] $rateModifiers
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setRateModifiers(?array $rateModifiers = null): self
    {
        // validation for constraint: array
        if ('' !== ($rateModifiersArrayErrorMessage = self::validateRateModifiersForArrayConstraintsFromSetRateModifiers($rateModifiers))) {
            throw new InvalidArgumentException($rateModifiersArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($rateModifiers) && count($rateModifiers) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($rateModifiers)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RateModifiers) {
            throw new InvalidArgumentException(sprintf('The RateModifiers property can only contain items of type \Travelport\UniversalRecord\StructType\RateModifiers, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RateModifiers) && count($this->RateModifiers) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RateModifiers)), __LINE__);
        }
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
        foreach ($values as $vehicleSearchModifiersLoyaltyCardItem) {
            // validation for constraint: itemType
            if (!$vehicleSearchModifiersLoyaltyCardItem instanceof \Travelport\UniversalRecord\StructType\LoyaltyCard) {
                $invalidValues[] = is_object($vehicleSearchModifiersLoyaltyCardItem) ? get_class($vehicleSearchModifiersLoyaltyCardItem) : sprintf('%s(%s)', gettype($vehicleSearchModifiersLoyaltyCardItem), var_export($vehicleSearchModifiersLoyaltyCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LoyaltyCard property can only contain items of type \Travelport\UniversalRecord\StructType\LoyaltyCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LoyaltyCard value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCard[] $loyaltyCard
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setLoyaltyCard(?array $loyaltyCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($loyaltyCardArrayErrorMessage = self::validateLoyaltyCardForArrayConstraintsFromSetLoyaltyCard($loyaltyCard))) {
            throw new InvalidArgumentException($loyaltyCardArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($loyaltyCard) && count($loyaltyCard) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($loyaltyCard)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\LoyaltyCard) {
            throw new InvalidArgumentException(sprintf('The LoyaltyCard property can only contain items of type \Travelport\UniversalRecord\StructType\LoyaltyCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->LoyaltyCard) && count($this->LoyaltyCard) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->LoyaltyCard)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($referencePoint) && !is_string($referencePoint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referencePoint, true), gettype($referencePoint)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($referencePoint) && mb_strlen((string) $referencePoint) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $referencePoint)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setSpecialEquipment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpecialEquipment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSpecialEquipmentForArrayConstraintsFromSetSpecialEquipment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehicleSearchModifiersSpecialEquipmentItem) {
            // validation for constraint: itemType
            if (!$vehicleSearchModifiersSpecialEquipmentItem instanceof \Travelport\UniversalRecord\StructType\SpecialEquipment) {
                $invalidValues[] = is_object($vehicleSearchModifiersSpecialEquipmentItem) ? get_class($vehicleSearchModifiersSpecialEquipmentItem) : sprintf('%s(%s)', gettype($vehicleSearchModifiersSpecialEquipmentItem), var_export($vehicleSearchModifiersSpecialEquipmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SpecialEquipment property can only contain items of type \Travelport\UniversalRecord\StructType\SpecialEquipment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SpecialEquipment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SpecialEquipment[] $specialEquipment
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setSpecialEquipment(?array $specialEquipment = null): self
    {
        // validation for constraint: array
        if ('' !== ($specialEquipmentArrayErrorMessage = self::validateSpecialEquipmentForArrayConstraintsFromSetSpecialEquipment($specialEquipment))) {
            throw new InvalidArgumentException($specialEquipmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($specialEquipment) && count($specialEquipment) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($specialEquipment)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\SpecialEquipment) {
            throw new InvalidArgumentException(sprintf('The SpecialEquipment property can only contain items of type \Travelport\UniversalRecord\StructType\SpecialEquipment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->SpecialEquipment) && count($this->SpecialEquipment) >= 5) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->SpecialEquipment)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setPolicy method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPolicy method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePolicyForArrayConstraintsFromSetPolicy(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehicleSearchModifiersPolicyItem) {
            // validation for constraint: itemType
            if (!$vehicleSearchModifiersPolicyItem instanceof \Travelport\UniversalRecord\StructType\TypeKeyword) {
                $invalidValues[] = is_object($vehicleSearchModifiersPolicyItem) ? get_class($vehicleSearchModifiersPolicyItem) : sprintf('%s(%s)', gettype($vehicleSearchModifiersPolicyItem), var_export($vehicleSearchModifiersPolicyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Policy property can only contain items of type \Travelport\UniversalRecord\StructType\TypeKeyword, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Policy value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeKeyword[] $policy
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setPolicy(?array $policy = null): self
    {
        // validation for constraint: array
        if ('' !== ($policyArrayErrorMessage = self::validatePolicyForArrayConstraintsFromSetPolicy($policy))) {
            throw new InvalidArgumentException($policyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($policy) && count($policy) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($policy)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeKeyword) {
            throw new InvalidArgumentException(sprintf('The Policy property can only contain items of type \Travelport\UniversalRecord\StructType\TypeKeyword, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Policy) && count($this->Policy) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Policy)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($unlimitedMileage) && !is_bool($unlimitedMileage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($unlimitedMileage, true), gettype($unlimitedMileage)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeRateCategory::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeRateCategory::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rateCategory
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setRateCategory(?string $rateCategory = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeRateCategory::valueIsValid($rateCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeRateCategory', is_array($rateCategory) ? implode(', ', $rateCategory) : var_export($rateCategory, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeRateCategory::getValidValues())), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($rateGuaranteed) && !is_bool($rateGuaranteed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($rateGuaranteed, true), gettype($rateGuaranteed)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeRateTimePeriod::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeRateTimePeriod::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ratePeriod
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers
     */
    public function setRatePeriod(?string $ratePeriod = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeRateTimePeriod::valueIsValid($ratePeriod)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeRateTimePeriod', is_array($ratePeriod) ? implode(', ', $ratePeriod) : var_export($ratePeriod, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeRateTimePeriod::getValidValues())), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($sellableRatesOnly) && !is_bool($sellableRatesOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sellableRatesOnly, true), gettype($sellableRatesOnly)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($returnSourceCurrency) && !is_bool($returnSourceCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnSourceCurrency, true), gettype($returnSourceCurrency)), __LINE__);
        }
        $this->ReturnSourceCurrency = $returnSourceCurrency;
        
        return $this;
    }
}
