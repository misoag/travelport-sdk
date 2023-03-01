<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CruiseSegment StructType
 * Meta information extracted from the WSDL
 * - documentation: An Cruise marketable travel segment.
 * @subpackage Structs
 */
class CruiseSegment extends Segment
{
    /**
     * The CruiseStay
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: CruiseStay
     * @var \Travelport\UniversalRecord\StructType\CruiseStay
     */
    public \Travelport\UniversalRecord\StructType\CruiseStay $CruiseStay;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: The location code for the origin of cruise segment. | Used for Character Strings, length 1 to 5.
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Origin;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: The location code for the destination of cruise segment. | Used for Character Strings, length 1 to 5.
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Destination;
    /**
     * The Vendor
     * Meta information extracted from the WSDL
     * - documentation: Cruise Vendor Code. | Used for Character Strings, length 1 to 3.
     * - base: xs:string
     * - maxLength: 3
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Vendor = null;
    /**
     * The VendorName
     * Meta information extracted from the WSDL
     * - documentation: Cruise Vendor Name. | Used for Character Strings, length 1 to 30.
     * - base: xs:string
     * - maxLength: 30
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $VendorName = null;
    /**
     * The DepartureTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this cruise segment departs from the origin.
     * - use: optional
     * @var string|null
     */
    public ?string $DepartureTime = null;
    /**
     * The ArrivalTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this cruise segment arrives at the destination.
     * - use: optional
     * @var string|null
     */
    public ?string $ArrivalTime = null;
    /**
     * Constructor method for CruiseSegment
     * @uses CruiseSegment::setCruiseStay()
     * @uses CruiseSegment::setOrigin()
     * @uses CruiseSegment::setDestination()
     * @uses CruiseSegment::setVendor()
     * @uses CruiseSegment::setVendorName()
     * @uses CruiseSegment::setDepartureTime()
     * @uses CruiseSegment::setArrivalTime()
     * @param \Travelport\UniversalRecord\StructType\CruiseStay $cruiseStay
     * @param string $origin
     * @param string $destination
     * @param string $vendor
     * @param string $vendorName
     * @param string $departureTime
     * @param string $arrivalTime
     */
    public function __construct(\Travelport\UniversalRecord\StructType\CruiseStay $cruiseStay, string $origin, string $destination, ?string $vendor = null, ?string $vendorName = null, ?string $departureTime = null, ?string $arrivalTime = null)
    {
        $this
            ->setCruiseStay($cruiseStay)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setVendor($vendor)
            ->setVendorName($vendorName)
            ->setDepartureTime($departureTime)
            ->setArrivalTime($arrivalTime);
    }
    /**
     * Get CruiseStay value
     * @return \Travelport\UniversalRecord\StructType\CruiseStay
     */
    public function getCruiseStay(): \Travelport\UniversalRecord\StructType\CruiseStay
    {
        return $this->CruiseStay;
    }
    /**
     * Set CruiseStay value
     * @param \Travelport\UniversalRecord\StructType\CruiseStay $cruiseStay
     * @return \Travelport\UniversalRecord\StructType\CruiseSegment
     */
    public function setCruiseStay(\Travelport\UniversalRecord\StructType\CruiseStay $cruiseStay): self
    {
        $this->CruiseStay = $cruiseStay;
        
        return $this;
    }
    /**
     * Get Origin value
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\UniversalRecord\StructType\CruiseSegment
     */
    public function setOrigin(string $origin): self
    {
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string
     */
    public function getDestination(): string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\UniversalRecord\StructType\CruiseSegment
     */
    public function setDestination(string $destination): self
    {
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get Vendor value
     * @return string|null
     */
    public function getVendor(): ?string
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param string $vendor
     * @return \Travelport\UniversalRecord\StructType\CruiseSegment
     */
    public function setVendor(?string $vendor = null): self
    {
        $this->Vendor = $vendor;
        
        return $this;
    }
    /**
     * Get VendorName value
     * @return string|null
     */
    public function getVendorName(): ?string
    {
        return $this->VendorName;
    }
    /**
     * Set VendorName value
     * @param string $vendorName
     * @return \Travelport\UniversalRecord\StructType\CruiseSegment
     */
    public function setVendorName(?string $vendorName = null): self
    {
        $this->VendorName = $vendorName;
        
        return $this;
    }
    /**
     * Get DepartureTime value
     * @return string|null
     */
    public function getDepartureTime(): ?string
    {
        return $this->DepartureTime;
    }
    /**
     * Set DepartureTime value
     * @param string $departureTime
     * @return \Travelport\UniversalRecord\StructType\CruiseSegment
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
        $this->DepartureTime = $departureTime;
        
        return $this;
    }
    /**
     * Get ArrivalTime value
     * @return string|null
     */
    public function getArrivalTime(): ?string
    {
        return $this->ArrivalTime;
    }
    /**
     * Set ArrivalTime value
     * @param string $arrivalTime
     * @return \Travelport\UniversalRecord\StructType\CruiseSegment
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
        $this->ArrivalTime = $arrivalTime;
        
        return $this;
    }
}
