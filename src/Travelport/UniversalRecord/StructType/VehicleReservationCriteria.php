<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleReservationCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Criteria for searching the Vehicle reservations
 * @subpackage Structs
 */
class VehicleReservationCriteria extends AbstractStructBase
{
    /**
     * The PickUpDate
     * Meta information extracted from the WSDL
     * - documentation: Vehicle PickUp Date or Date Range
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeDateSpec|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeDateSpec $PickUpDate = null;
    /**
     * The VehicleConfirmation
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $VehicleConfirmation = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * The VendorCode
     * Meta information extracted from the WSDL
     * - documentation: Vehicle Vendor Code | 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * @var string|null
     */
    protected ?string $VendorCode = null;
    /**
     * The LocationNumber
     * @var string|null
     */
    protected ?string $LocationNumber = null;
    /**
     * The PassiveOnly
     * Meta information extracted from the WSDL
     * - documentation: Search for Passives Only
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $PassiveOnly = null;
    /**
     * Constructor method for VehicleReservationCriteria
     * @uses VehicleReservationCriteria::setPickUpDate()
     * @uses VehicleReservationCriteria::setVehicleConfirmation()
     * @uses VehicleReservationCriteria::setLocation()
     * @uses VehicleReservationCriteria::setVendorCode()
     * @uses VehicleReservationCriteria::setLocationNumber()
     * @uses VehicleReservationCriteria::setPassiveOnly()
     * @param \Travelport\UniversalRecord\StructType\TypeDateSpec $pickUpDate
     * @param string $vehicleConfirmation
     * @param string $location
     * @param string $vendorCode
     * @param string $locationNumber
     * @param bool $passiveOnly
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\TypeDateSpec $pickUpDate = null, ?string $vehicleConfirmation = null, ?string $location = null, ?string $vendorCode = null, ?string $locationNumber = null, ?bool $passiveOnly = false)
    {
        $this
            ->setPickUpDate($pickUpDate)
            ->setVehicleConfirmation($vehicleConfirmation)
            ->setLocation($location)
            ->setVendorCode($vendorCode)
            ->setLocationNumber($locationNumber)
            ->setPassiveOnly($passiveOnly);
    }
    /**
     * Get PickUpDate value
     * @return \Travelport\UniversalRecord\StructType\TypeDateSpec|null
     */
    public function getPickUpDate(): ?\Travelport\UniversalRecord\StructType\TypeDateSpec
    {
        return $this->PickUpDate;
    }
    /**
     * Set PickUpDate value
     * @param \Travelport\UniversalRecord\StructType\TypeDateSpec $pickUpDate
     * @return \Travelport\UniversalRecord\StructType\VehicleReservationCriteria
     */
    public function setPickUpDate(?\Travelport\UniversalRecord\StructType\TypeDateSpec $pickUpDate = null): self
    {
        $this->PickUpDate = $pickUpDate;
        
        return $this;
    }
    /**
     * Get VehicleConfirmation value
     * @return string|null
     */
    public function getVehicleConfirmation(): ?string
    {
        return $this->VehicleConfirmation;
    }
    /**
     * Set VehicleConfirmation value
     * @param string $vehicleConfirmation
     * @return \Travelport\UniversalRecord\StructType\VehicleReservationCriteria
     */
    public function setVehicleConfirmation(?string $vehicleConfirmation = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicleConfirmation) && !is_string($vehicleConfirmation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleConfirmation, true), gettype($vehicleConfirmation)), __LINE__);
        }
        $this->VehicleConfirmation = $vehicleConfirmation;
        
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \Travelport\UniversalRecord\StructType\VehicleReservationCriteria
     */
    public function setLocation(?string $location = null): self
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($location) && mb_strlen((string) $location) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $location)), __LINE__);
        }
        $this->Location = $location;
        
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
     * @return \Travelport\UniversalRecord\StructType\VehicleReservationCriteria
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
     * @return \Travelport\UniversalRecord\StructType\VehicleReservationCriteria
     */
    public function setLocationNumber(?string $locationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($locationNumber) && !is_string($locationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationNumber, true), gettype($locationNumber)), __LINE__);
        }
        $this->LocationNumber = $locationNumber;
        
        return $this;
    }
    /**
     * Get PassiveOnly value
     * @return bool|null
     */
    public function getPassiveOnly(): ?bool
    {
        return $this->PassiveOnly;
    }
    /**
     * Set PassiveOnly value
     * @param bool $passiveOnly
     * @return \Travelport\UniversalRecord\StructType\VehicleReservationCriteria
     */
    public function setPassiveOnly(?bool $passiveOnly = false): self
    {
        // validation for constraint: boolean
        if (!is_null($passiveOnly) && !is_bool($passiveOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($passiveOnly, true), gettype($passiveOnly)), __LINE__);
        }
        $this->PassiveOnly = $passiveOnly;
        
        return $this;
    }
}
