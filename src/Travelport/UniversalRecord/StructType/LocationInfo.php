<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationInfo StructType
 * @subpackage Structs
 */
class LocationInfo extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: A descriptive name (Los Angeles Intl Airport)
     * - use: required
     * @var string
     */
    protected string $Name;
    /**
     * The LocationAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: common:LocationAddress
     * @var \Travelport\UniversalRecord\StructType\TypeStructuredAddress[]
     */
    protected ?array $LocationAddress = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: common:PhoneNumber
     * @var \Travelport\UniversalRecord\StructType\PhoneNumber[]
     */
    protected ?array $PhoneNumber = null;
    /**
     * The OperationTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: OperationTime
     * @var string[]
     */
    protected ?array $OperationTime = null;
    /**
     * The ShuttleInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShuttleInfo = null;
    /**
     * The CounterLocation
     * Meta information extracted from the WSDL
     * - documentation: Where is the counter located
     * - use: optional
     * @var string|null
     */
    protected ?string $CounterLocation = null;
    /**
     * The PreferredOption
     * Meta information extracted from the WSDL
     * - documentation: Preferred Option marker for Location.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $PreferredOption = null;
    /**
     * Constructor method for LocationInfo
     * @uses LocationInfo::setName()
     * @uses LocationInfo::setLocationAddress()
     * @uses LocationInfo::setPhoneNumber()
     * @uses LocationInfo::setOperationTime()
     * @uses LocationInfo::setShuttleInfo()
     * @uses LocationInfo::setCounterLocation()
     * @uses LocationInfo::setPreferredOption()
     * @param string $name
     * @param \Travelport\UniversalRecord\StructType\TypeStructuredAddress[] $locationAddress
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber[] $phoneNumber
     * @param string[] $operationTime
     * @param string $shuttleInfo
     * @param string $counterLocation
     * @param bool $preferredOption
     */
    public function __construct(string $name, ?array $locationAddress = null, ?array $phoneNumber = null, ?array $operationTime = null, ?string $shuttleInfo = null, ?string $counterLocation = null, ?bool $preferredOption = null)
    {
        $this
            ->setName($name)
            ->setLocationAddress($locationAddress)
            ->setPhoneNumber($phoneNumber)
            ->setOperationTime($operationTime)
            ->setShuttleInfo($shuttleInfo)
            ->setCounterLocation($counterLocation)
            ->setPreferredOption($preferredOption);
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\UniversalRecord\StructType\LocationInfo
     */
    public function setName(string $name): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get LocationAddress value
     * @return \Travelport\UniversalRecord\StructType\TypeStructuredAddress[]
     */
    public function getLocationAddress(): ?array
    {
        return $this->LocationAddress;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setLocationAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocationAddress method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocationAddressForArrayConstraintFromSetLocationAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $locationInfoLocationAddressItem) {
            // validation for constraint: itemType
            if (!$locationInfoLocationAddressItem instanceof \Travelport\UniversalRecord\StructType\TypeStructuredAddress) {
                $invalidValues[] = is_object($locationInfoLocationAddressItem) ? get_class($locationInfoLocationAddressItem) : sprintf('%s(%s)', gettype($locationInfoLocationAddressItem), var_export($locationInfoLocationAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LocationAddress property can only contain items of type \Travelport\UniversalRecord\StructType\TypeStructuredAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LocationAddress value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeStructuredAddress[] $locationAddress
     * @return \Travelport\UniversalRecord\StructType\LocationInfo
     */
    public function setLocationAddress(?array $locationAddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($locationAddressArrayErrorMessage = self::validateLocationAddressForArrayConstraintFromSetLocationAddress($locationAddress))) {
            throw new InvalidArgumentException($locationAddressArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($locationAddress) && count($locationAddress) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($locationAddress)), __LINE__);
        }
        $this->LocationAddress = $locationAddress;
        
        return $this;
    }
    /**
     * Add item to LocationAddress value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeStructuredAddress $item
     * @return \Travelport\UniversalRecord\StructType\LocationInfo
     */
    public function addToLocationAddress(\Travelport\UniversalRecord\StructType\TypeStructuredAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeStructuredAddress) {
            throw new InvalidArgumentException(sprintf('The LocationAddress property can only contain items of type \Travelport\UniversalRecord\StructType\TypeStructuredAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->LocationAddress) && count($this->LocationAddress) >= 5) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->LocationAddress)), __LINE__);
        }
        $this->LocationAddress[] = $item;
        
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
     * This method is responsible for validating the value(s) passed to the setPhoneNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhoneNumber method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhoneNumberForArrayConstraintFromSetPhoneNumber(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $locationInfoPhoneNumberItem) {
            // validation for constraint: itemType
            if (!$locationInfoPhoneNumberItem instanceof \Travelport\UniversalRecord\StructType\PhoneNumber) {
                $invalidValues[] = is_object($locationInfoPhoneNumberItem) ? get_class($locationInfoPhoneNumberItem) : sprintf('%s(%s)', gettype($locationInfoPhoneNumberItem), var_export($locationInfoPhoneNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PhoneNumber property can only contain items of type \Travelport\UniversalRecord\StructType\PhoneNumber, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PhoneNumber value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber[] $phoneNumber
     * @return \Travelport\UniversalRecord\StructType\LocationInfo
     */
    public function setPhoneNumber(?array $phoneNumber = null): self
    {
        // validation for constraint: array
        if ('' !== ($phoneNumberArrayErrorMessage = self::validatePhoneNumberForArrayConstraintFromSetPhoneNumber($phoneNumber))) {
            throw new InvalidArgumentException($phoneNumberArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($phoneNumber) && count($phoneNumber) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Add item to PhoneNumber value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber $item
     * @return \Travelport\UniversalRecord\StructType\LocationInfo
     */
    public function addToPhoneNumber(\Travelport\UniversalRecord\StructType\PhoneNumber $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PhoneNumber) {
            throw new InvalidArgumentException(sprintf('The PhoneNumber property can only contain items of type \Travelport\UniversalRecord\StructType\PhoneNumber, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->PhoneNumber) && count($this->PhoneNumber) >= 5) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->PhoneNumber)), __LINE__);
        }
        $this->PhoneNumber[] = $item;
        
        return $this;
    }
    /**
     * Get OperationTime value
     * @return string[]
     */
    public function getOperationTime(): ?array
    {
        return $this->OperationTime;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOperationTime method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOperationTime method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOperationTimeForArrayConstraintFromSetOperationTime(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $locationInfoOperationTimeItem) {
            // validation for constraint: itemType
            if (!is_string($locationInfoOperationTimeItem)) {
                $invalidValues[] = is_object($locationInfoOperationTimeItem) ? get_class($locationInfoOperationTimeItem) : sprintf('%s(%s)', gettype($locationInfoOperationTimeItem), var_export($locationInfoOperationTimeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OperationTime property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OperationTime value
     * @throws InvalidArgumentException
     * @param string[] $operationTime
     * @return \Travelport\UniversalRecord\StructType\LocationInfo
     */
    public function setOperationTime(?array $operationTime = null): self
    {
        // validation for constraint: array
        if ('' !== ($operationTimeArrayErrorMessage = self::validateOperationTimeForArrayConstraintFromSetOperationTime($operationTime))) {
            throw new InvalidArgumentException($operationTimeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($operationTime) && count($operationTime) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($operationTime)), __LINE__);
        }
        $this->OperationTime = $operationTime;
        
        return $this;
    }
    /**
     * Add item to OperationTime value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\LocationInfo
     */
    public function addToOperationTime(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The OperationTime property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->OperationTime) && count($this->OperationTime) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->OperationTime)), __LINE__);
        }
        $this->OperationTime[] = $item;
        
        return $this;
    }
    /**
     * Get ShuttleInfo value
     * @return string|null
     */
    public function getShuttleInfo(): ?string
    {
        return $this->ShuttleInfo;
    }
    /**
     * Set ShuttleInfo value
     * @param string $shuttleInfo
     * @return \Travelport\UniversalRecord\StructType\LocationInfo
     */
    public function setShuttleInfo(?string $shuttleInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($shuttleInfo) && !is_string($shuttleInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shuttleInfo, true), gettype($shuttleInfo)), __LINE__);
        }
        $this->ShuttleInfo = $shuttleInfo;
        
        return $this;
    }
    /**
     * Get CounterLocation value
     * @return string|null
     */
    public function getCounterLocation(): ?string
    {
        return $this->CounterLocation;
    }
    /**
     * Set CounterLocation value
     * @param string $counterLocation
     * @return \Travelport\UniversalRecord\StructType\LocationInfo
     */
    public function setCounterLocation(?string $counterLocation = null): self
    {
        // validation for constraint: string
        if (!is_null($counterLocation) && !is_string($counterLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($counterLocation, true), gettype($counterLocation)), __LINE__);
        }
        $this->CounterLocation = $counterLocation;
        
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
     * @return \Travelport\UniversalRecord\StructType\LocationInfo
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
}
