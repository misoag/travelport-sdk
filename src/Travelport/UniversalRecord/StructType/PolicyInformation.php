<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $Type;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Booking Traveler associated to this policy information. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $BookingTravelerRef;
    /**
     * The ReasonCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ReasonCode|null
     */
    public ?\Travelport\UniversalRecord\StructType\ReasonCode $ReasonCode = null;
    /**
     * The Name
     * @var string|null
     */
    public ?string $Name = null;
    /**
     * The OutOfPolicy
     * Meta information extracted from the WSDL
     * - documentation: In Policy / Out of Policy Indicator
     * @var bool|null
     */
    public ?bool $OutOfPolicy = null;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $SegmentRef = null;
    /**
     * The AirPolicy
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[]
     */
    public ?array $AirPolicy = null;
    /**
     * The RailPolicy
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[]
     */
    public ?array $RailPolicy = null;
    /**
     * The HotelPolicy
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[]
     */
    public ?array $HotelPolicy = null;
    /**
     * The VehiclePolicy
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[]
     */
    public ?array $VehiclePolicy = null;
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
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation
     */
    public function setType(string $type): self
    {
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
     * Set AirPolicy value
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[] $airPolicy
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation
     */
    public function setAirPolicy(?array $airPolicy = null): self
    {
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
     * Set RailPolicy value
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[] $railPolicy
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation
     */
    public function setRailPolicy(?array $railPolicy = null): self
    {
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
     * Set HotelPolicy value
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[] $hotelPolicy
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation
     */
    public function setHotelPolicy(?array $hotelPolicy = null): self
    {
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
     * Set VehiclePolicy value
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentPolicy[] $vehiclePolicy
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation
     */
    public function setVehiclePolicy(?array $vehiclePolicy = null): self
    {
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
        $this->VehiclePolicy[] = $item;
        
        return $this;
    }
}
