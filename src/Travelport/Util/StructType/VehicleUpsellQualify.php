<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleUpsellQualify StructType
 * Meta information extracted from the WSDL
 * - documentation: Qualify data of Vehicle against which Vehicle Availability search is matched to get an upsell Offer. Each qualify should have an offer.
 * @subpackage Structs
 */
class VehicleUpsellQualify extends AbstractStructBase
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
     * The EffectiveDate
     * Meta information extracted from the WSDL
     * - documentation: Date without time zones YYYY-MM-DD
     * - base: xs:date
     * - pattern: [^:Z].*
     * - use: required
     * @var string
     */
    protected string $EffectiveDate;
    /**
     * The ExpirationDate
     * Meta information extracted from the WSDL
     * - documentation: Date without time zones YYYY-MM-DD
     * - base: xs:date
     * - pattern: [^:Z].*
     * - use: required
     * @var string
     */
    protected string $ExpirationDate;
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
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The PickupDateTime
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $PickupDateTime = null;
    /**
     * The PickupLocation
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $PickupLocation = null;
    /**
     * The ReturnDateTime
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ReturnDateTime = null;
    /**
     * The ReturnLocation
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ReturnLocation = null;
    /**
     * The PickupLocationType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $PickupLocationType = null;
    /**
     * The ReturnLocationType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ReturnLocationType = null;
    /**
     * The PickupLocationNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $PickupLocationNumber = null;
    /**
     * The ReturnLocationNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ReturnLocationNumber = null;
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
     * The RateCategory
     * Meta information extracted from the WSDL
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
     * The OfferRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $OfferRef = null;
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
     * Constructor method for VehicleUpsellQualify
     * @uses VehicleUpsellQualify::setVendorCode()
     * @uses VehicleUpsellQualify::setEffectiveDate()
     * @uses VehicleUpsellQualify::setExpirationDate()
     * @uses VehicleUpsellQualify::setKey()
     * @uses VehicleUpsellQualify::setProviderCode()
     * @uses VehicleUpsellQualify::setPickupDateTime()
     * @uses VehicleUpsellQualify::setPickupLocation()
     * @uses VehicleUpsellQualify::setReturnDateTime()
     * @uses VehicleUpsellQualify::setReturnLocation()
     * @uses VehicleUpsellQualify::setPickupLocationType()
     * @uses VehicleUpsellQualify::setReturnLocationType()
     * @uses VehicleUpsellQualify::setPickupLocationNumber()
     * @uses VehicleUpsellQualify::setReturnLocationNumber()
     * @uses VehicleUpsellQualify::setAirConditioning()
     * @uses VehicleUpsellQualify::setTransmissionType()
     * @uses VehicleUpsellQualify::setVehicleClass()
     * @uses VehicleUpsellQualify::setCategory()
     * @uses VehicleUpsellQualify::setDoorCount()
     * @uses VehicleUpsellQualify::setRateCode()
     * @uses VehicleUpsellQualify::setRateCategory()
     * @uses VehicleUpsellQualify::setDiscountNumber()
     * @uses VehicleUpsellQualify::setOfferRef()
     * @uses VehicleUpsellQualify::setElStat()
     * @uses VehicleUpsellQualify::setKeyOverride()
     * @param string $vendorCode
     * @param string $effectiveDate
     * @param string $expirationDate
     * @param string $key
     * @param string $providerCode
     * @param string $pickupDateTime
     * @param string $pickupLocation
     * @param string $returnDateTime
     * @param string $returnLocation
     * @param string $pickupLocationType
     * @param string $returnLocationType
     * @param string $pickupLocationNumber
     * @param string $returnLocationNumber
     * @param bool $airConditioning
     * @param string $transmissionType
     * @param string $vehicleClass
     * @param string $category
     * @param string $doorCount
     * @param string $rateCode
     * @param string $rateCategory
     * @param string $discountNumber
     * @param string $offerRef
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $vendorCode, string $effectiveDate, string $expirationDate, ?string $key = null, ?string $providerCode = null, ?string $pickupDateTime = null, ?string $pickupLocation = null, ?string $returnDateTime = null, ?string $returnLocation = null, ?string $pickupLocationType = null, ?string $returnLocationType = null, ?string $pickupLocationNumber = null, ?string $returnLocationNumber = null, ?bool $airConditioning = null, ?string $transmissionType = null, ?string $vehicleClass = null, ?string $category = null, ?string $doorCount = null, ?string $rateCode = null, ?string $rateCategory = null, ?string $discountNumber = null, ?string $offerRef = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setVendorCode($vendorCode)
            ->setEffectiveDate($effectiveDate)
            ->setExpirationDate($expirationDate)
            ->setKey($key)
            ->setProviderCode($providerCode)
            ->setPickupDateTime($pickupDateTime)
            ->setPickupLocation($pickupLocation)
            ->setReturnDateTime($returnDateTime)
            ->setReturnLocation($returnLocation)
            ->setPickupLocationType($pickupLocationType)
            ->setReturnLocationType($returnLocationType)
            ->setPickupLocationNumber($pickupLocationNumber)
            ->setReturnLocationNumber($returnLocationNumber)
            ->setAirConditioning($airConditioning)
            ->setTransmissionType($transmissionType)
            ->setVehicleClass($vehicleClass)
            ->setCategory($category)
            ->setDoorCount($doorCount)
            ->setRateCode($rateCode)
            ->setRateCategory($rateCategory)
            ->setDiscountNumber($discountNumber)
            ->setOfferRef($offerRef)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
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
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
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
     * Get EffectiveDate value
     * @return string
     */
    public function getEffectiveDate(): string
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
     */
    public function setEffectiveDate(string $effectiveDate): self
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveDate, true), gettype($effectiveDate)), __LINE__);
        }
        // validation for constraint: pattern([^:Z].*)
        if (!is_null($effectiveDate) && !preg_match('/[^:Z].*/', $effectiveDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[^:Z].*/', var_export($effectiveDate, true)), __LINE__);
        }
        $this->EffectiveDate = $effectiveDate;
        
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
     */
    public function setExpirationDate(string $expirationDate): self
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        // validation for constraint: pattern([^:Z].*)
        if (!is_null($expirationDate) && !preg_match('/[^:Z].*/', $expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[^:Z].*/', var_export($expirationDate, true)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        
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
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
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
     * Get ProviderCode value
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get PickupDateTime value
     * @return string|null
     */
    public function getPickupDateTime(): ?string
    {
        return $this->PickupDateTime;
    }
    /**
     * Set PickupDateTime value
     * @param string $pickupDateTime
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
     */
    public function setPickupDateTime(?string $pickupDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupDateTime) && !is_string($pickupDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupDateTime, true), gettype($pickupDateTime)), __LINE__);
        }
        $this->PickupDateTime = $pickupDateTime;
        
        return $this;
    }
    /**
     * Get PickupLocation value
     * @return string|null
     */
    public function getPickupLocation(): ?string
    {
        return $this->PickupLocation;
    }
    /**
     * Set PickupLocation value
     * @param string $pickupLocation
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
     */
    public function setPickupLocation(?string $pickupLocation = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupLocation) && !is_string($pickupLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupLocation, true), gettype($pickupLocation)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($pickupLocation) && mb_strlen((string) $pickupLocation) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $pickupLocation)), __LINE__);
        }
        $this->PickupLocation = $pickupLocation;
        
        return $this;
    }
    /**
     * Get ReturnDateTime value
     * @return string|null
     */
    public function getReturnDateTime(): ?string
    {
        return $this->ReturnDateTime;
    }
    /**
     * Set ReturnDateTime value
     * @param string $returnDateTime
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
     */
    public function setReturnDateTime(?string $returnDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDateTime) && !is_string($returnDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDateTime, true), gettype($returnDateTime)), __LINE__);
        }
        $this->ReturnDateTime = $returnDateTime;
        
        return $this;
    }
    /**
     * Get ReturnLocation value
     * @return string|null
     */
    public function getReturnLocation(): ?string
    {
        return $this->ReturnLocation;
    }
    /**
     * Set ReturnLocation value
     * @param string $returnLocation
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
     */
    public function setReturnLocation(?string $returnLocation = null): self
    {
        // validation for constraint: string
        if (!is_null($returnLocation) && !is_string($returnLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnLocation, true), gettype($returnLocation)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($returnLocation) && mb_strlen((string) $returnLocation) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $returnLocation)), __LINE__);
        }
        $this->ReturnLocation = $returnLocation;
        
        return $this;
    }
    /**
     * Get PickupLocationType value
     * @return string|null
     */
    public function getPickupLocationType(): ?string
    {
        return $this->PickupLocationType;
    }
    /**
     * Set PickupLocationType value
     * @uses \Travelport\Util\EnumType\TypeVehicleLocation::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeVehicleLocation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $pickupLocationType
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
     */
    public function setPickupLocationType(?string $pickupLocationType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeVehicleLocation::valueIsValid($pickupLocationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeVehicleLocation', is_array($pickupLocationType) ? implode(', ', $pickupLocationType) : var_export($pickupLocationType, true), implode(', ', \Travelport\Util\EnumType\TypeVehicleLocation::getValidValues())), __LINE__);
        }
        $this->PickupLocationType = $pickupLocationType;
        
        return $this;
    }
    /**
     * Get ReturnLocationType value
     * @return string|null
     */
    public function getReturnLocationType(): ?string
    {
        return $this->ReturnLocationType;
    }
    /**
     * Set ReturnLocationType value
     * @uses \Travelport\Util\EnumType\TypeVehicleLocation::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeVehicleLocation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $returnLocationType
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
     */
    public function setReturnLocationType(?string $returnLocationType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeVehicleLocation::valueIsValid($returnLocationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeVehicleLocation', is_array($returnLocationType) ? implode(', ', $returnLocationType) : var_export($returnLocationType, true), implode(', ', \Travelport\Util\EnumType\TypeVehicleLocation::getValidValues())), __LINE__);
        }
        $this->ReturnLocationType = $returnLocationType;
        
        return $this;
    }
    /**
     * Get PickupLocationNumber value
     * @return string|null
     */
    public function getPickupLocationNumber(): ?string
    {
        return $this->PickupLocationNumber;
    }
    /**
     * Set PickupLocationNumber value
     * @param string $pickupLocationNumber
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
     */
    public function setPickupLocationNumber(?string $pickupLocationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupLocationNumber) && !is_string($pickupLocationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupLocationNumber, true), gettype($pickupLocationNumber)), __LINE__);
        }
        $this->PickupLocationNumber = $pickupLocationNumber;
        
        return $this;
    }
    /**
     * Get ReturnLocationNumber value
     * @return string|null
     */
    public function getReturnLocationNumber(): ?string
    {
        return $this->ReturnLocationNumber;
    }
    /**
     * Set ReturnLocationNumber value
     * @param string $returnLocationNumber
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
     */
    public function setReturnLocationNumber(?string $returnLocationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($returnLocationNumber) && !is_string($returnLocationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnLocationNumber, true), gettype($returnLocationNumber)), __LINE__);
        }
        $this->ReturnLocationNumber = $returnLocationNumber;
        
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
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
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
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
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
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
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
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
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
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
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
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
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
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
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
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
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
     * Get OfferRef value
     * @return string|null
     */
    public function getOfferRef(): ?string
    {
        return $this->OfferRef;
    }
    /**
     * Set OfferRef value
     * @param string $offerRef
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
     */
    public function setOfferRef(?string $offerRef = null): self
    {
        // validation for constraint: string
        if (!is_null($offerRef) && !is_string($offerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offerRef, true), gettype($offerRef)), __LINE__);
        }
        $this->OfferRef = $offerRef;
        
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
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
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
     * @return \Travelport\Util\StructType\VehicleUpsellQualify
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
