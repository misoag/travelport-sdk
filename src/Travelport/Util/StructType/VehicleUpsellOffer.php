<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleUpsellOffer StructType
 * Meta information extracted from the WSDL
 * - documentation: Offer data of Vehicle which is used to send an upsell request. Offer is found for a matching qualify.
 * @subpackage Structs
 */
class VehicleUpsellOffer extends AbstractStructBase
{
    /**
     * The AirConditioning
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $AirConditioning;
    /**
     * The TransmissionType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $TransmissionType;
    /**
     * The VehicleClass
     * Meta information extracted from the WSDL
     * - documentation: Class of vehicle
     * - use: required
     * @var string
     */
    protected string $VehicleClass;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: Category of vehicle. Each supplier decides how these categories map to a vehicle class.
     * - use: required
     * @var string
     */
    protected string $Category;
    /**
     * The DoorCount
     * Meta information extracted from the WSDL
     * - documentation: The number of doors on the vehicle. Could be a range like '2-4'
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
     * The RateCategory
     * Meta information extracted from the WSDL
     * - documentation: The category of this rate (Best, etc)
     * - use: optional
     * @var string|null
     */
    protected ?string $RateCategory = null;
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
     * The FuelType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $FuelType = null;
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
     * The ElStat
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
    /**
     * Constructor method for VehicleUpsellOffer
     * @uses VehicleUpsellOffer::setAirConditioning()
     * @uses VehicleUpsellOffer::setTransmissionType()
     * @uses VehicleUpsellOffer::setVehicleClass()
     * @uses VehicleUpsellOffer::setCategory()
     * @uses VehicleUpsellOffer::setDoorCount()
     * @uses VehicleUpsellOffer::setRateCode()
     * @uses VehicleUpsellOffer::setRateCategory()
     * @uses VehicleUpsellOffer::setDiscountNumber()
     * @uses VehicleUpsellOffer::setFuelType()
     * @uses VehicleUpsellOffer::setKey()
     * @uses VehicleUpsellOffer::setElStat()
     * @uses VehicleUpsellOffer::setKeyOverride()
     * @param bool $airConditioning
     * @param string $transmissionType
     * @param string $vehicleClass
     * @param string $category
     * @param string $doorCount
     * @param string $rateCode
     * @param string $rateCategory
     * @param string $discountNumber
     * @param string $fuelType
     * @param string $key
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(bool $airConditioning, string $transmissionType, string $vehicleClass, string $category, ?string $doorCount = null, ?string $rateCode = null, ?string $rateCategory = null, ?string $discountNumber = null, ?string $fuelType = null, ?string $key = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setAirConditioning($airConditioning)
            ->setTransmissionType($transmissionType)
            ->setVehicleClass($vehicleClass)
            ->setCategory($category)
            ->setDoorCount($doorCount)
            ->setRateCode($rateCode)
            ->setRateCategory($rateCategory)
            ->setDiscountNumber($discountNumber)
            ->setFuelType($fuelType)
            ->setKey($key)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get AirConditioning value
     * @return bool
     */
    public function getAirConditioning(): bool
    {
        return $this->AirConditioning;
    }
    /**
     * Set AirConditioning value
     * @param bool $airConditioning
     * @return \Travelport\Util\StructType\VehicleUpsellOffer
     */
    public function setAirConditioning(bool $airConditioning): self
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
     * @return string
     */
    public function getTransmissionType(): string
    {
        return $this->TransmissionType;
    }
    /**
     * Set TransmissionType value
     * @uses \Travelport\Util\EnumType\TypeVehicleTransmission::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeVehicleTransmission::getValidValues()
     * @throws InvalidArgumentException
     * @param string $transmissionType
     * @return \Travelport\Util\StructType\VehicleUpsellOffer
     */
    public function setTransmissionType(string $transmissionType): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeVehicleTransmission::valueIsValid($transmissionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeVehicleTransmission', is_array($transmissionType) ? implode(', ', $transmissionType) : var_export($transmissionType, true), implode(', ', \Travelport\Util\EnumType\TypeVehicleTransmission::getValidValues())), __LINE__);
        }
        $this->TransmissionType = $transmissionType;
        
        return $this;
    }
    /**
     * Get VehicleClass value
     * @return string
     */
    public function getVehicleClass(): string
    {
        return $this->VehicleClass;
    }
    /**
     * Set VehicleClass value
     * @uses \Travelport\Util\EnumType\TypeVehicleClass::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeVehicleClass::getValidValues()
     * @throws InvalidArgumentException
     * @param string $vehicleClass
     * @return \Travelport\Util\StructType\VehicleUpsellOffer
     */
    public function setVehicleClass(string $vehicleClass): self
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
     * @return string
     */
    public function getCategory(): string
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @uses \Travelport\Util\EnumType\TypeVehicleCategory::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeVehicleCategory::getValidValues()
     * @throws InvalidArgumentException
     * @param string $category
     * @return \Travelport\Util\StructType\VehicleUpsellOffer
     */
    public function setCategory(string $category): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeVehicleCategory::valueIsValid($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeVehicleCategory', is_array($category) ? implode(', ', $category) : var_export($category, true), implode(', ', \Travelport\Util\EnumType\TypeVehicleCategory::getValidValues())), __LINE__);
        }
        $this->Category = $category;
        
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
     * @return \Travelport\Util\StructType\VehicleUpsellOffer
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
     * @return \Travelport\Util\StructType\VehicleUpsellOffer
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
     * Get RateCategory value
     * @return string|null
     */
    public function getRateCategory(): ?string
    {
        return $this->RateCategory;
    }
    /**
     * Set RateCategory value
     * @uses \Travelport\Util\EnumType\TypeRateCategory::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeRateCategory::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rateCategory
     * @return \Travelport\Util\StructType\VehicleUpsellOffer
     */
    public function setRateCategory(?string $rateCategory = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeRateCategory::valueIsValid($rateCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeRateCategory', is_array($rateCategory) ? implode(', ', $rateCategory) : var_export($rateCategory, true), implode(', ', \Travelport\Util\EnumType\TypeRateCategory::getValidValues())), __LINE__);
        }
        $this->RateCategory = $rateCategory;
        
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
     * @return \Travelport\Util\StructType\VehicleUpsellOffer
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
    /**
     * Get FuelType value
     * @return string|null
     */
    public function getFuelType(): ?string
    {
        return $this->FuelType;
    }
    /**
     * Set FuelType value
     * @uses \Travelport\Util\EnumType\TypeFuel::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeFuel::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fuelType
     * @return \Travelport\Util\StructType\VehicleUpsellOffer
     */
    public function setFuelType(?string $fuelType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeFuel::valueIsValid($fuelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeFuel', is_array($fuelType) ? implode(', ', $fuelType) : var_export($fuelType, true), implode(', ', \Travelport\Util\EnumType\TypeFuel::getValidValues())), __LINE__);
        }
        $this->FuelType = $fuelType;
        
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
     * @return \Travelport\Util\StructType\VehicleUpsellOffer
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
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @uses \Travelport\Util\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\Util\StructType\VehicleUpsellOffer
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\Util\EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\Util\StructType\VehicleUpsellOffer
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
