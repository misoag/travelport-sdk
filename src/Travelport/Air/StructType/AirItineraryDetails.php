<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirItineraryDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Itinerary details containing brand details
 * @subpackage Structs
 */
class AirItineraryDetails extends AbstractStructBase
{
    /**
     * The AirSegmentDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 16
     * - minOccurs: 1
     * - ref: AirSegmentDetails
     * @var \Travelport\Air\StructType\AirSegmentDetails[]
     */
    public array $AirSegmentDetails;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Air itinerary details key | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The PassengerDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 15
     * - ref: PassengerDetails
     * @var \Travelport\Air\StructType\PassengerDetails[]
     */
    public ?array $PassengerDetails = null;
    /**
     * Constructor method for AirItineraryDetails
     * @uses AirItineraryDetails::setAirSegmentDetails()
     * @uses AirItineraryDetails::setKey()
     * @uses AirItineraryDetails::setPassengerDetails()
     * @param \Travelport\Air\StructType\AirSegmentDetails[] $airSegmentDetails
     * @param string $key
     * @param \Travelport\Air\StructType\PassengerDetails[] $passengerDetails
     */
    public function __construct(array $airSegmentDetails, string $key, ?array $passengerDetails = null)
    {
        $this
            ->setAirSegmentDetails($airSegmentDetails)
            ->setKey($key)
            ->setPassengerDetails($passengerDetails);
    }
    /**
     * Get AirSegmentDetails value
     * @return \Travelport\Air\StructType\AirSegmentDetails[]
     */
    public function getAirSegmentDetails(): array
    {
        return $this->AirSegmentDetails;
    }
    /**
     * Set AirSegmentDetails value
     * @param \Travelport\Air\StructType\AirSegmentDetails[] $airSegmentDetails
     * @return \Travelport\Air\StructType\AirItineraryDetails
     */
    public function setAirSegmentDetails(array $airSegmentDetails): self
    {
        $this->AirSegmentDetails = $airSegmentDetails;
        
        return $this;
    }
    /**
     * Add item to AirSegmentDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirSegmentDetails $item
     * @return \Travelport\Air\StructType\AirItineraryDetails
     */
    public function addToAirSegmentDetails(\Travelport\Air\StructType\AirSegmentDetails $item): self
    {
        $this->AirSegmentDetails[] = $item;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\AirItineraryDetails
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get PassengerDetails value
     * @return \Travelport\Air\StructType\PassengerDetails[]
     */
    public function getPassengerDetails(): ?array
    {
        return $this->PassengerDetails;
    }
    /**
     * Set PassengerDetails value
     * @param \Travelport\Air\StructType\PassengerDetails[] $passengerDetails
     * @return \Travelport\Air\StructType\AirItineraryDetails
     */
    public function setPassengerDetails(?array $passengerDetails = null): self
    {
        $this->PassengerDetails = $passengerDetails;
        
        return $this;
    }
    /**
     * Add item to PassengerDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\PassengerDetails $item
     * @return \Travelport\Air\StructType\AirItineraryDetails
     */
    public function addToPassengerDetails(\Travelport\Air\StructType\PassengerDetails $item): self
    {
        $this->PassengerDetails[] = $item;
        
        return $this;
    }
}
