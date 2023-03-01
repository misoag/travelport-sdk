<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSpecificAirSegment StructType
 * @subpackage Structs
 */
class SearchSpecificAirSegment extends AbstractStructBase
{
    /**
     * The DepartureTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this entity departs. This does not include time zone information since it can be derived from the origin location.
     * - use: required
     * @var string
     */
    public string $DepartureTime;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: The carrier that is marketing this segment | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    public string $Carrier;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: The flight number under which the marketing carrier is marketing this flight | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: required
     * @var string
     */
    public string $FlightNumber;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this origination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $Origin;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this destination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $Destination;
    /**
     * The SegmentIndex
     * Meta information extracted from the WSDL
     * - documentation: The sequential AirSegment number that this segment connected to.
     * - use: optional
     * @var int|null
     */
    public ?int $SegmentIndex = null;
    /**
     * Constructor method for SearchSpecificAirSegment
     * @uses SearchSpecificAirSegment::setDepartureTime()
     * @uses SearchSpecificAirSegment::setCarrier()
     * @uses SearchSpecificAirSegment::setFlightNumber()
     * @uses SearchSpecificAirSegment::setOrigin()
     * @uses SearchSpecificAirSegment::setDestination()
     * @uses SearchSpecificAirSegment::setSegmentIndex()
     * @param string $departureTime
     * @param string $carrier
     * @param string $flightNumber
     * @param string $origin
     * @param string $destination
     * @param int $segmentIndex
     */
    public function __construct(string $departureTime, string $carrier, string $flightNumber, string $origin, string $destination, ?int $segmentIndex = null)
    {
        $this
            ->setDepartureTime($departureTime)
            ->setCarrier($carrier)
            ->setFlightNumber($flightNumber)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setSegmentIndex($segmentIndex);
    }
    /**
     * Get DepartureTime value
     * @return string
     */
    public function getDepartureTime(): string
    {
        return $this->DepartureTime;
    }
    /**
     * Set DepartureTime value
     * @param string $departureTime
     * @return \Travelport\Air\StructType\SearchSpecificAirSegment
     */
    public function setDepartureTime(string $departureTime): self
    {
        $this->DepartureTime = $departureTime;
        
        return $this;
    }
    /**
     * Get Carrier value
     * @return string
     */
    public function getCarrier(): string
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Travelport\Air\StructType\SearchSpecificAirSegment
     */
    public function setCarrier(string $carrier): self
    {
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Get FlightNumber value
     * @return string
     */
    public function getFlightNumber(): string
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \Travelport\Air\StructType\SearchSpecificAirSegment
     */
    public function setFlightNumber(string $flightNumber): self
    {
        $this->FlightNumber = $flightNumber;
        
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
     * @return \Travelport\Air\StructType\SearchSpecificAirSegment
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
     * @return \Travelport\Air\StructType\SearchSpecificAirSegment
     */
    public function setDestination(string $destination): self
    {
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get SegmentIndex value
     * @return int|null
     */
    public function getSegmentIndex(): ?int
    {
        return $this->SegmentIndex;
    }
    /**
     * Set SegmentIndex value
     * @param int $segmentIndex
     * @return \Travelport\Air\StructType\SearchSpecificAirSegment
     */
    public function setSegmentIndex(?int $segmentIndex = null): self
    {
        $this->SegmentIndex = $segmentIndex;
        
        return $this;
    }
}
