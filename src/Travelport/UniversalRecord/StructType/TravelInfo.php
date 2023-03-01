<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Traveler information details like Travel Purpose and Trip Name
 * @subpackage Structs
 */
class TravelInfo extends AbstractStructBase
{
    /**
     * The TripName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - use: optional
     * @var string|null
     */
    public ?string $TripName = null;
    /**
     * The TravelPurpose
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - use: optional
     * @var string|null
     */
    public ?string $TravelPurpose = null;
    /**
     * Constructor method for TravelInfo
     * @uses TravelInfo::setTripName()
     * @uses TravelInfo::setTravelPurpose()
     * @param string $tripName
     * @param string $travelPurpose
     */
    public function __construct(?string $tripName = null, ?string $travelPurpose = null)
    {
        $this
            ->setTripName($tripName)
            ->setTravelPurpose($travelPurpose);
    }
    /**
     * Get TripName value
     * @return string|null
     */
    public function getTripName(): ?string
    {
        return $this->TripName;
    }
    /**
     * Set TripName value
     * @param string $tripName
     * @return \Travelport\UniversalRecord\StructType\TravelInfo
     */
    public function setTripName(?string $tripName = null): self
    {
        $this->TripName = $tripName;
        
        return $this;
    }
    /**
     * Get TravelPurpose value
     * @return string|null
     */
    public function getTravelPurpose(): ?string
    {
        return $this->TravelPurpose;
    }
    /**
     * Set TravelPurpose value
     * @param string $travelPurpose
     * @return \Travelport\UniversalRecord\StructType\TravelInfo
     */
    public function setTravelPurpose(?string $travelPurpose = null): self
    {
        $this->TravelPurpose = $travelPurpose;
        
        return $this;
    }
}
