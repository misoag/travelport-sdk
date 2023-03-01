<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?\Travelport\UniversalRecord\StructType\TypeDateSpec $PickUpDate = null;
    /**
     * The VehicleConfirmation
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $VehicleConfirmation = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Location = null;
    /**
     * The VendorCode
     * Meta information extracted from the WSDL
     * - documentation: Vehicle Vendor Code | 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * @var string|null
     */
    public ?string $VendorCode = null;
    /**
     * The LocationNumber
     * @var string|null
     */
    public ?string $LocationNumber = null;
    /**
     * The PassiveOnly
     * Meta information extracted from the WSDL
     * - documentation: Search for Passives Only
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $PassiveOnly = null;
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
        $this->PassiveOnly = $passiveOnly;
        
        return $this;
    }
}
