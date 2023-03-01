<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeVehicleLocationInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Pickup/Return Location Hours of operation. Data is not always returned by the vendor. | Pickup location phone numbers.Data is not always returned by the vendor. | Valid for VehicleRulesRsp 1P only.
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
    public ?\Travelport\UniversalRecord\StructType\TypeStructuredAddress $Address = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: common:PhoneNumber
     * @var \Travelport\UniversalRecord\StructType\PhoneNumber[]
     */
    public ?array $PhoneNumber = null;
    /**
     * The OperationTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * - ref: OperationTime
     * @var string[]
     */
    public ?array $OperationTime = null;
    /**
     * The LocationName
     * Meta information extracted from the WSDL
     * - documentation: Pickup/Return Location Name.
     * - use: optional
     * @var string|null
     */
    public ?string $LocationName = null;
    /**
     * The CounterLocation
     * Meta information extracted from the WSDL
     * - documentation: Pickup CounterLocation Name .
     * - use: optional
     * @var string|null
     */
    public ?string $CounterLocation = null;
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
    public ?string $VendorCode = null;
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
    public ?string $LocationCode = null;
    /**
     * The LocationType
     * Meta information extracted from the WSDL
     * - documentation: Pickup/Return Location .
     * - use: optional
     * @var string|null
     */
    public ?string $LocationType = null;
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
    public ?string $LocationNumber = null;
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
     * Set PhoneNumber value
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber[] $phoneNumber
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleLocationInformation
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
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleLocationInformation
     */
    public function addToPhoneNumber(\Travelport\UniversalRecord\StructType\PhoneNumber $item): self
    {
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
     * Set OperationTime value
     * @param string[] $operationTime
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleLocationInformation
     */
    public function setOperationTime(?array $operationTime = null): self
    {
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
     * @param string $locationType
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleLocationInformation
     */
    public function setLocationType(?string $locationType = null): self
    {
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
        $this->LocationNumber = $locationNumber;
        
        return $this;
    }
}
