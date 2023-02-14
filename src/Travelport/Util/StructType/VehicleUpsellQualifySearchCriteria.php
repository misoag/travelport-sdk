<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleUpsellQualifySearchCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Search criteria for VehicleUpsellQualify.
 * @subpackage Structs
 */
class VehicleUpsellQualifySearchCriteria extends UpsellSearchCriteria
{
    /**
     * The VendorCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $VendorCode;
    /**
     * The VehicleClass
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $VehicleClass = null;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Category = null;
    /**
     * The AirConditioning
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AirConditioning = null;
    /**
     * The TransmissionType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $TransmissionType = null;
    /**
     * The DoorCount
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $DoorCount = null;
    /**
     * The RateCode
     * Meta information extracted from the WSDL
     * - documentation: The code of this rate.
     * - base: xs:string
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    protected ?string $RateCode = null;
    /**
     * The DiscountNumber
     * Meta information extracted from the WSDL
     * - documentation: A supplier-specific number which may identify a special rate associated with a traveler's organization
     * - base: xs:string
     * - maxLength: 25
     * - use: optional
     * @var string|null
     */
    protected ?string $DiscountNumber = null;
    /**
     * Constructor method for VehicleUpsellQualifySearchCriteria
     * @uses VehicleUpsellQualifySearchCriteria::setVendorCode()
     * @uses VehicleUpsellQualifySearchCriteria::setVehicleClass()
     * @uses VehicleUpsellQualifySearchCriteria::setCategory()
     * @uses VehicleUpsellQualifySearchCriteria::setAirConditioning()
     * @uses VehicleUpsellQualifySearchCriteria::setTransmissionType()
     * @uses VehicleUpsellQualifySearchCriteria::setDoorCount()
     * @uses VehicleUpsellQualifySearchCriteria::setRateCode()
     * @uses VehicleUpsellQualifySearchCriteria::setDiscountNumber()
     * @param string $vendorCode
     * @param string $vehicleClass
     * @param string $category
     * @param bool $airConditioning
     * @param string $transmissionType
     * @param string $doorCount
     * @param string $rateCode
     * @param string $discountNumber
     */
    public function __construct(string $vendorCode, ?string $vehicleClass = null, ?string $category = null, ?bool $airConditioning = null, ?string $transmissionType = null, ?string $doorCount = null, ?string $rateCode = null, ?string $discountNumber = null)
    {
        $this
            ->setVendorCode($vendorCode)
            ->setVehicleClass($vehicleClass)
            ->setCategory($category)
            ->setAirConditioning($airConditioning)
            ->setTransmissionType($transmissionType)
            ->setDoorCount($doorCount)
            ->setRateCode($rateCode)
            ->setDiscountNumber($discountNumber);
    }
    /**
     * Get VendorCode value
     * @return string
     */
    public function getVendorCode(): string
    {
        return $this->VendorCode;
    }
    /**
     * Set VendorCode value
     * @param string $vendorCode
     * @return \Travelport\Util\StructType\VehicleUpsellQualifySearchCriteria
     */
    public function setVendorCode(string $vendorCode): self
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
     * Get VehicleClass value
     * @return string|null
     */
    public function getVehicleClass(): ?string
    {
        return $this->VehicleClass;
    }
    /**
     * Set VehicleClass value
     * @uses \Travelport\Util\EnumType\TypeVehicleClass::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeVehicleClass::getValidValues()
     * @throws InvalidArgumentException
     * @param string $vehicleClass
     * @return \Travelport\Util\StructType\VehicleUpsellQualifySearchCriteria
     */
    public function setVehicleClass(?string $vehicleClass = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeVehicleClass::valueIsValid($vehicleClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeVehicleClass', is_array($vehicleClass) ? implode(', ', $vehicleClass) : var_export($vehicleClass, true), implode(', ', \Travelport\Util\EnumType\TypeVehicleClass::getValidValues())), __LINE__);
        }
        $this->VehicleClass = $vehicleClass;
        
        return $this;
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @uses \Travelport\Util\EnumType\TypeVehicleCategory::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeVehicleCategory::getValidValues()
     * @throws InvalidArgumentException
     * @param string $category
     * @return \Travelport\Util\StructType\VehicleUpsellQualifySearchCriteria
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeVehicleCategory::valueIsValid($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeVehicleCategory', is_array($category) ? implode(', ', $category) : var_export($category, true), implode(', ', \Travelport\Util\EnumType\TypeVehicleCategory::getValidValues())), __LINE__);
        }
        $this->Category = $category;
        
        return $this;
    }
    /**
     * Get AirConditioning value
     * @return bool|null
     */
    public function getAirConditioning(): ?bool
    {
        return $this->AirConditioning;
    }
    /**
     * Set AirConditioning value
     * @param bool $airConditioning
     * @return \Travelport\Util\StructType\VehicleUpsellQualifySearchCriteria
     */
    public function setAirConditioning(?bool $airConditioning = null): self
    {
        // validation for constraint: boolean
        if (!is_null($airConditioning) && !is_bool($airConditioning)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($airConditioning, true), gettype($airConditioning)), __LINE__);
        }
        $this->AirConditioning = $airConditioning;
        
        return $this;
    }
    /**
     * Get TransmissionType value
     * @return string|null
     */
    public function getTransmissionType(): ?string
    {
        return $this->TransmissionType;
    }
    /**
     * Set TransmissionType value
     * @uses \Travelport\Util\EnumType\TypeVehicleTransmission::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeVehicleTransmission::getValidValues()
     * @throws InvalidArgumentException
     * @param string $transmissionType
     * @return \Travelport\Util\StructType\VehicleUpsellQualifySearchCriteria
     */
    public function setTransmissionType(?string $transmissionType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeVehicleTransmission::valueIsValid($transmissionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeVehicleTransmission', is_array($transmissionType) ? implode(', ', $transmissionType) : var_export($transmissionType, true), implode(', ', \Travelport\Util\EnumType\TypeVehicleTransmission::getValidValues())), __LINE__);
        }
        $this->TransmissionType = $transmissionType;
        
        return $this;
    }
    /**
     * Get DoorCount value
     * @return string|null
     */
    public function getDoorCount(): ?string
    {
        return $this->DoorCount;
    }
    /**
     * Set DoorCount value
     * @uses \Travelport\Util\EnumType\TypeDoorCount::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeDoorCount::getValidValues()
     * @throws InvalidArgumentException
     * @param string $doorCount
     * @return \Travelport\Util\StructType\VehicleUpsellQualifySearchCriteria
     */
    public function setDoorCount(?string $doorCount = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeDoorCount::valueIsValid($doorCount)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeDoorCount', is_array($doorCount) ? implode(', ', $doorCount) : var_export($doorCount, true), implode(', ', \Travelport\Util\EnumType\TypeDoorCount::getValidValues())), __LINE__);
        }
        $this->DoorCount = $doorCount;
        
        return $this;
    }
    /**
     * Get RateCode value
     * @return string|null
     */
    public function getRateCode(): ?string
    {
        return $this->RateCode;
    }
    /**
     * Set RateCode value
     * @param string $rateCode
     * @return \Travelport\Util\StructType\VehicleUpsellQualifySearchCriteria
     */
    public function setRateCode(?string $rateCode = null): self
    {
        // validation for constraint: string
        if (!is_null($rateCode) && !is_string($rateCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rateCode, true), gettype($rateCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($rateCode) && mb_strlen((string) $rateCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $rateCode)), __LINE__);
        }
        $this->RateCode = $rateCode;
        
        return $this;
    }
    /**
     * Get DiscountNumber value
     * @return string|null
     */
    public function getDiscountNumber(): ?string
    {
        return $this->DiscountNumber;
    }
    /**
     * Set DiscountNumber value
     * @param string $discountNumber
     * @return \Travelport\Util\StructType\VehicleUpsellQualifySearchCriteria
     */
    public function setDiscountNumber(?string $discountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($discountNumber) && !is_string($discountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discountNumber, true), gettype($discountNumber)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($discountNumber) && mb_strlen((string) $discountNumber) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen((string) $discountNumber)), __LINE__);
        }
        $this->DiscountNumber = $discountNumber;
        
        return $this;
    }
}
