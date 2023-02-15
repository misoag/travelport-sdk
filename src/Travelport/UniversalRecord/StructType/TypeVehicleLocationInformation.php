<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeVehicleLocationInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Pickup/Return Location Hours of operation. Data is not always returned by the vendor. | Pickup location phone numbers.Data is not always returned by the vendor. | Valid for VehicleRulesRsp 1P, 1J only.
 * @subpackage Structs
 */
class TypeVehicleLocationInformation extends AbstractStructBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - documentation: Pickup/Return Location Address.Data is not always returned by the vendor.
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeStructuredAddress|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeStructuredAddress $Address = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: common:PhoneNumber
     * @var \Travelport\UniversalRecord\StructType\PhoneNumber[]
     */
    protected ?array $PhoneNumber = null;
    /**
     * The OperationTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * - ref: OperationTime
     * @var string[]
     */
    protected ?array $OperationTime = null;
    /**
     * The LocationName
     * Meta information extracted from the WSDL
     * - documentation: Pickup/Return Location Name.
     * - use: optional
     * @var string|null
     */
    protected ?string $LocationName = null;
    /**
     * The CounterLocation
     * Meta information extracted from the WSDL
     * - documentation: Pickup CounterLocation Name .
     * - use: optional
     * @var string|null
     */
    protected ?string $CounterLocation = null;
    /**
     * The VendorCode
     * Meta information extracted from the WSDL
     * - documentation: Pickup/Return Location Vendor Code. | 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $VendorCode = null;
    /**
     * The LocationCode
     * Meta information extracted from the WSDL
     * - documentation: Pickup/Return Location City/Airport Code . | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $LocationCode = null;
    /**
     * The LocationType
     * Meta information extracted from the WSDL
     * - documentation: Pickup/Return Location .
     * - use: optional
     * @var string|null
     */
    protected ?string $LocationType = null;
    /**
     * The LocationNumber
     * Meta information extracted from the WSDL
     * - documentation: Pickup/Return Location Number. | Used for Character Strings, length 3.
     * - base: xs:string
     * - maxLength: 3
     * - minLength: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $LocationNumber = null;
    /**
     * Constructor method for typeVehicleLocationInformation
     * @uses TypeVehicleLocationInformation::setAddress()
     * @uses TypeVehicleLocationInformation::setPhoneNumber()
     * @uses TypeVehicleLocationInformation::setOperationTime()
     * @uses TypeVehicleLocationInformation::setLocationName()
     * @uses TypeVehicleLocationInformation::setCounterLocation()
     * @uses TypeVehicleLocationInformation::setVendorCode()
     * @uses TypeVehicleLocationInformation::setLocationCode()
     * @uses TypeVehicleLocationInformation::setLocationType()
     * @uses TypeVehicleLocationInformation::setLocationNumber()
     * @param \Travelport\UniversalRecord\StructType\TypeStructuredAddress $address
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber[] $phoneNumber
     * @param string[] $operationTime
     * @param string $locationName
     * @param string $counterLocation
     * @param string $vendorCode
     * @param string $locationCode
     * @param string $locationType
     * @param string $locationNumber
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\TypeStructuredAddress $address = null, ?array $phoneNumber = null, ?array $operationTime = null, ?string $locationName = null, ?string $counterLocation = null, ?string $vendorCode = null, ?string $locationCode = null, ?string $locationType = null, ?string $locationNumber = null)
    {
        $this
            ->setAddress($address)
            ->setPhoneNumber($phoneNumber)
            ->setOperationTime($operationTime)
            ->setLocationName($locationName)
            ->setCounterLocation($counterLocation)
            ->setVendorCode($vendorCode)
            ->setLocationCode($locationCode)
            ->setLocationType($locationType)
            ->setLocationNumber($locationNumber);
    }
    /**
     * Get Address value
     * @return \Travelport\UniversalRecord\StructType\TypeStructuredAddress|null
     */
    public function getAddress(): ?\Travelport\UniversalRecord\StructType\TypeStructuredAddress
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Travelport\UniversalRecord\StructType\TypeStructuredAddress $address
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleLocationInformation
     */
    public function setAddress(?\Travelport\UniversalRecord\StructType\TypeStructuredAddress $address = null): self
    {
        $this->Address = $address;
        
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
        foreach ($values as $typeVehicleLocationInformationPhoneNumberItem) {
            // validation for constraint: itemType
            if (!$typeVehicleLocationInformationPhoneNumberItem instanceof \Travelport\UniversalRecord\StructType\PhoneNumber) {
                $invalidValues[] = is_object($typeVehicleLocationInformationPhoneNumberItem) ? get_class($typeVehicleLocationInformationPhoneNumberItem) : sprintf('%s(%s)', gettype($typeVehicleLocationInformationPhoneNumberItem), var_export($typeVehicleLocationInformationPhoneNumberItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleLocationInformation
     */
    public function setPhoneNumber(?array $phoneNumber = null): self
    {
        // validation for constraint: array
        if ('' !== ($phoneNumberArrayErrorMessage = self::validatePhoneNumberForArrayConstraintsFromSetPhoneNumber($phoneNumber))) {
            throw new InvalidArgumentException($phoneNumberArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($phoneNumber) && count($phoneNumber) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Add item to PhoneNumber value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber $item
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleLocationInformation
     */
    public function addToPhoneNumber(\Travelport\UniversalRecord\StructType\PhoneNumber $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PhoneNumber) {
            throw new InvalidArgumentException(sprintf('The PhoneNumber property can only contain items of type \Travelport\UniversalRecord\StructType\PhoneNumber, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->PhoneNumber) && count($this->PhoneNumber) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->PhoneNumber)), __LINE__);
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
     * This method is responsible for validating the values passed to the setOperationTime method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOperationTime method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOperationTimeForArrayConstraintsFromSetOperationTime(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeVehicleLocationInformationOperationTimeItem) {
            // validation for constraint: itemType
            if (!is_string($typeVehicleLocationInformationOperationTimeItem)) {
                $invalidValues[] = is_object($typeVehicleLocationInformationOperationTimeItem) ? get_class($typeVehicleLocationInformationOperationTimeItem) : sprintf('%s(%s)', gettype($typeVehicleLocationInformationOperationTimeItem), var_export($typeVehicleLocationInformationOperationTimeItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleLocationInformation
     */
    public function setOperationTime(?array $operationTime = null): self
    {
        // validation for constraint: array
        if ('' !== ($operationTimeArrayErrorMessage = self::validateOperationTimeForArrayConstraintsFromSetOperationTime($operationTime))) {
            throw new InvalidArgumentException($operationTimeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($operationTime) && count($operationTime) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($operationTime)), __LINE__);
        }
        $this->OperationTime = $operationTime;
        
        return $this;
    }
    /**
     * Add item to OperationTime value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleLocationInformation
     */
    public function addToOperationTime(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The OperationTime property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->OperationTime) && count($this->OperationTime) >= 100) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->OperationTime)), __LINE__);
        }
        $this->OperationTime[] = $item;
        
        return $this;
    }
    /**
     * Get LocationName value
     * @return string|null
     */
    public function getLocationName(): ?string
    {
        return $this->LocationName;
    }
    /**
     * Set LocationName value
     * @param string $locationName
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleLocationInformation
     */
    public function setLocationName(?string $locationName = null): self
    {
        // validation for constraint: string
        if (!is_null($locationName) && !is_string($locationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationName, true), gettype($locationName)), __LINE__);
        }
        $this->LocationName = $locationName;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleLocationInformation
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
     * Get VendorCode value
     * @return string|null
     */
    public function getVendorCode(): ?string
    {
        return $this->VendorCode;
    }
    /**
     * Set VendorCode value
     * @param string $vendorCode
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleLocationInformation
     */
    public function setVendorCode(?string $vendorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vendorCode) && !is_string($vendorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendorCode, true), gettype($vendorCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($vendorCode) && mb_strlen((string) $vendorCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $vendorCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($vendorCode) && mb_strlen((string) $vendorCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $vendorCode)), __LINE__);
        }
        $this->VendorCode = $vendorCode;
        
        return $this;
    }
    /**
     * Get LocationCode value
     * @return string|null
     */
    public function getLocationCode(): ?string
    {
        return $this->LocationCode;
    }
    /**
     * Set LocationCode value
     * @param string $locationCode
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleLocationInformation
     */
    public function setLocationCode(?string $locationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($locationCode) && !is_string($locationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationCode, true), gettype($locationCode)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($locationCode) && mb_strlen((string) $locationCode) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $locationCode)), __LINE__);
        }
        $this->LocationCode = $locationCode;
        
        return $this;
    }
    /**
     * Get LocationType value
     * @return string|null
     */
    public function getLocationType(): ?string
    {
        return $this->LocationType;
    }
    /**
     * Set LocationType value
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleLocation::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleLocation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $locationType
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleLocationInformation
     */
    public function setLocationType(?string $locationType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeVehicleLocation::valueIsValid($locationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeVehicleLocation', is_array($locationType) ? implode(', ', $locationType) : var_export($locationType, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeVehicleLocation::getValidValues())), __LINE__);
        }
        $this->LocationType = $locationType;
        
        return $this;
    }
    /**
     * Get LocationNumber value
     * @return string|null
     */
    public function getLocationNumber(): ?string
    {
        return $this->LocationNumber;
    }
    /**
     * Set LocationNumber value
     * @param string $locationNumber
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleLocationInformation
     */
    public function setLocationNumber(?string $locationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($locationNumber) && !is_string($locationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationNumber, true), gettype($locationNumber)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($locationNumber) && mb_strlen((string) $locationNumber) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $locationNumber)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($locationNumber) && mb_strlen((string) $locationNumber) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $locationNumber)), __LINE__);
        }
        $this->LocationNumber = $locationNumber;
        
        return $this;
    }
}
