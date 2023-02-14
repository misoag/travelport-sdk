<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PolicyInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Policy Information required for File Finishing | Policy information associated with SavedTrip.
 * @subpackage Structs
 */
class PolicyInformation extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Policy Type - Air, Hotel, Car, Rail, Ticketing
     * - use: required
     * @var string
     */
    protected string $Type;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Booking Traveler associated to this policy information. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $BookingTravelerRef;
    /**
     * The ReasonCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ReasonCode|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ReasonCode $ReasonCode = null;
    /**
     * The Name
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The OutOfPolicy
     * Meta information extracted from the WSDL
     * - documentation: In Policy / Out of Policy Indicator
     * @var bool|null
     */
    protected ?bool $OutOfPolicy = null;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $SegmentRef = null;
    /**
     * The AirPolicy
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[]
     */
    protected ?array $AirPolicy = null;
    /**
     * The RailPolicy
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[]
     */
    protected ?array $RailPolicy = null;
    /**
     * The HotelPolicy
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[]
     */
    protected ?array $HotelPolicy = null;
    /**
     * The VehiclePolicy
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[]
     */
    protected ?array $VehiclePolicy = null;
    /**
     * Constructor method for PolicyInformation
     * @uses PolicyInformation::setType()
     * @uses PolicyInformation::setBookingTravelerRef()
     * @uses PolicyInformation::setReasonCode()
     * @uses PolicyInformation::setName()
     * @uses PolicyInformation::setOutOfPolicy()
     * @uses PolicyInformation::setSegmentRef()
     * @uses PolicyInformation::setAirPolicy()
     * @uses PolicyInformation::setRailPolicy()
     * @uses PolicyInformation::setHotelPolicy()
     * @uses PolicyInformation::setVehiclePolicy()
     * @param string $type
     * @param string $bookingTravelerRef
     * @param \Travelport\UniversalRecord\StructType\ReasonCode $reasonCode
     * @param string $name
     * @param bool $outOfPolicy
     * @param string $segmentRef
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[] $airPolicy
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[] $railPolicy
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[] $hotelPolicy
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[] $vehiclePolicy
     */
    public function __construct(string $type, string $bookingTravelerRef, ?\Travelport\UniversalRecord\StructType\ReasonCode $reasonCode = null, ?string $name = null, ?bool $outOfPolicy = null, ?string $segmentRef = null, ?array $airPolicy = null, ?array $railPolicy = null, ?array $hotelPolicy = null, ?array $vehiclePolicy = null)
    {
        $this
            ->setType($type)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setReasonCode($reasonCode)
            ->setName($name)
            ->setOutOfPolicy($outOfPolicy)
            ->setSegmentRef($segmentRef)
            ->setAirPolicy($airPolicy)
            ->setRailPolicy($railPolicy)
            ->setHotelPolicy($hotelPolicy)
            ->setVehiclePolicy($vehiclePolicy);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Travelport\UniversalRecord\EnumType\TypePolicy::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypePolicy::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypePolicy::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypePolicy', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypePolicy::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string
     */
    public function getBookingTravelerRef(): string
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation
     */
    public function setBookingTravelerRef(string $bookingTravelerRef): self
    {
        // validation for constraint: string
        if (!is_null($bookingTravelerRef) && !is_string($bookingTravelerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingTravelerRef, true), gettype($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Get ReasonCode value
     * @return \Travelport\UniversalRecord\StructType\ReasonCode|null
     */
    public function getReasonCode(): ?\Travelport\UniversalRecord\StructType\ReasonCode
    {
        return $this->ReasonCode;
    }
    /**
     * Set ReasonCode value
     * @param \Travelport\UniversalRecord\StructType\ReasonCode $reasonCode
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation
     */
    public function setReasonCode(?\Travelport\UniversalRecord\StructType\ReasonCode $reasonCode = null): self
    {
        $this->ReasonCode = $reasonCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation
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
     * Get OutOfPolicy value
     * @return bool|null
     */
    public function getOutOfPolicy(): ?bool
    {
        return $this->OutOfPolicy;
    }
    /**
     * Set OutOfPolicy value
     * @param bool $outOfPolicy
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation
     */
    public function setOutOfPolicy(?bool $outOfPolicy = null): self
    {
        // validation for constraint: boolean
        if (!is_null($outOfPolicy) && !is_bool($outOfPolicy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($outOfPolicy, true), gettype($outOfPolicy)), __LINE__);
        }
        $this->OutOfPolicy = $outOfPolicy;
        
        return $this;
    }
    /**
     * Get SegmentRef value
     * @return string|null
     */
    public function getSegmentRef(): ?string
    {
        return $this->SegmentRef;
    }
    /**
     * Set SegmentRef value
     * @param string $segmentRef
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation
     */
    public function setSegmentRef(?string $segmentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($segmentRef) && !is_string($segmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segmentRef, true), gettype($segmentRef)), __LINE__);
        }
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
    /**
     * Get AirPolicy value
     * @return \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[]
     */
    public function getAirPolicy(): ?array
    {
        return $this->AirPolicy;
    }
    /**
     * This method is responsible for validating the values passed to the setAirPolicy method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPolicy method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPolicyForArrayConstraintsFromSetAirPolicy(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $policyInformationAirPolicyItem) {
            // validation for constraint: itemType
            if (!$policyInformationAirPolicyItem instanceof \Travelport\UniversalRecord\StructType\TypeSegmentPolicy) {
                $invalidValues[] = is_object($policyInformationAirPolicyItem) ? get_class($policyInformationAirPolicyItem) : sprintf('%s(%s)', gettype($policyInformationAirPolicyItem), var_export($policyInformationAirPolicyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPolicy property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSegmentPolicy, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirPolicy value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[] $airPolicy
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation
     */
    public function setAirPolicy(?array $airPolicy = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPolicyArrayErrorMessage = self::validateAirPolicyForArrayConstraintsFromSetAirPolicy($airPolicy))) {
            throw new InvalidArgumentException($airPolicyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airPolicy) && count($airPolicy) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airPolicy)), __LINE__);
        }
        $this->AirPolicy = $airPolicy;
        
        return $this;
    }
    /**
     * Add item to AirPolicy value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentPolicy $item
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation
     */
    public function addToAirPolicy(\Travelport\UniversalRecord\StructType\TypeSegmentPolicy $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeSegmentPolicy) {
            throw new InvalidArgumentException(sprintf('The AirPolicy property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSegmentPolicy, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirPolicy) && count($this->AirPolicy) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirPolicy)), __LINE__);
        }
        $this->AirPolicy[] = $item;
        
        return $this;
    }
    /**
     * Get RailPolicy value
     * @return \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[]
     */
    public function getRailPolicy(): ?array
    {
        return $this->RailPolicy;
    }
    /**
     * This method is responsible for validating the values passed to the setRailPolicy method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailPolicy method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailPolicyForArrayConstraintsFromSetRailPolicy(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $policyInformationRailPolicyItem) {
            // validation for constraint: itemType
            if (!$policyInformationRailPolicyItem instanceof \Travelport\UniversalRecord\StructType\TypeSegmentPolicy) {
                $invalidValues[] = is_object($policyInformationRailPolicyItem) ? get_class($policyInformationRailPolicyItem) : sprintf('%s(%s)', gettype($policyInformationRailPolicyItem), var_export($policyInformationRailPolicyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailPolicy property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSegmentPolicy, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailPolicy value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[] $railPolicy
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation
     */
    public function setRailPolicy(?array $railPolicy = null): self
    {
        // validation for constraint: array
        if ('' !== ($railPolicyArrayErrorMessage = self::validateRailPolicyForArrayConstraintsFromSetRailPolicy($railPolicy))) {
            throw new InvalidArgumentException($railPolicyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railPolicy) && count($railPolicy) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railPolicy)), __LINE__);
        }
        $this->RailPolicy = $railPolicy;
        
        return $this;
    }
    /**
     * Add item to RailPolicy value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentPolicy $item
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation
     */
    public function addToRailPolicy(\Travelport\UniversalRecord\StructType\TypeSegmentPolicy $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeSegmentPolicy) {
            throw new InvalidArgumentException(sprintf('The RailPolicy property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSegmentPolicy, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailPolicy) && count($this->RailPolicy) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailPolicy)), __LINE__);
        }
        $this->RailPolicy[] = $item;
        
        return $this;
    }
    /**
     * Get HotelPolicy value
     * @return \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[]
     */
    public function getHotelPolicy(): ?array
    {
        return $this->HotelPolicy;
    }
    /**
     * This method is responsible for validating the values passed to the setHotelPolicy method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelPolicy method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelPolicyForArrayConstraintsFromSetHotelPolicy(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $policyInformationHotelPolicyItem) {
            // validation for constraint: itemType
            if (!$policyInformationHotelPolicyItem instanceof \Travelport\UniversalRecord\StructType\TypeSegmentPolicy) {
                $invalidValues[] = is_object($policyInformationHotelPolicyItem) ? get_class($policyInformationHotelPolicyItem) : sprintf('%s(%s)', gettype($policyInformationHotelPolicyItem), var_export($policyInformationHotelPolicyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelPolicy property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSegmentPolicy, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelPolicy value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[] $hotelPolicy
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation
     */
    public function setHotelPolicy(?array $hotelPolicy = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelPolicyArrayErrorMessage = self::validateHotelPolicyForArrayConstraintsFromSetHotelPolicy($hotelPolicy))) {
            throw new InvalidArgumentException($hotelPolicyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelPolicy) && count($hotelPolicy) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelPolicy)), __LINE__);
        }
        $this->HotelPolicy = $hotelPolicy;
        
        return $this;
    }
    /**
     * Add item to HotelPolicy value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentPolicy $item
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation
     */
    public function addToHotelPolicy(\Travelport\UniversalRecord\StructType\TypeSegmentPolicy $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeSegmentPolicy) {
            throw new InvalidArgumentException(sprintf('The HotelPolicy property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSegmentPolicy, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelPolicy) && count($this->HotelPolicy) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelPolicy)), __LINE__);
        }
        $this->HotelPolicy[] = $item;
        
        return $this;
    }
    /**
     * Get VehiclePolicy value
     * @return \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[]
     */
    public function getVehiclePolicy(): ?array
    {
        return $this->VehiclePolicy;
    }
    /**
     * This method is responsible for validating the values passed to the setVehiclePolicy method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehiclePolicy method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehiclePolicyForArrayConstraintsFromSetVehiclePolicy(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $policyInformationVehiclePolicyItem) {
            // validation for constraint: itemType
            if (!$policyInformationVehiclePolicyItem instanceof \Travelport\UniversalRecord\StructType\TypeSegmentPolicy) {
                $invalidValues[] = is_object($policyInformationVehiclePolicyItem) ? get_class($policyInformationVehiclePolicyItem) : sprintf('%s(%s)', gettype($policyInformationVehiclePolicyItem), var_export($policyInformationVehiclePolicyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehiclePolicy property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSegmentPolicy, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VehiclePolicy value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[] $vehiclePolicy
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation
     */
    public function setVehiclePolicy(?array $vehiclePolicy = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehiclePolicyArrayErrorMessage = self::validateVehiclePolicyForArrayConstraintsFromSetVehiclePolicy($vehiclePolicy))) {
            throw new InvalidArgumentException($vehiclePolicyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehiclePolicy) && count($vehiclePolicy) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehiclePolicy)), __LINE__);
        }
        $this->VehiclePolicy = $vehiclePolicy;
        
        return $this;
    }
    /**
     * Add item to VehiclePolicy value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentPolicy $item
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation
     */
    public function addToVehiclePolicy(\Travelport\UniversalRecord\StructType\TypeSegmentPolicy $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeSegmentPolicy) {
            throw new InvalidArgumentException(sprintf('The VehiclePolicy property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSegmentPolicy, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehiclePolicy) && count($this->VehiclePolicy) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehiclePolicy)), __LINE__);
        }
        $this->VehiclePolicy[] = $item;
        
        return $this;
    }
}
