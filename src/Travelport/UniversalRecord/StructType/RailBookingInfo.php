<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailBookingInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Links journeys and fares together
 * @subpackage Structs
 */
class RailBookingInfo extends AbstractStructBase
{
    /**
     * The RailFareRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to a fare that applies to the journey below. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $RailFareRef;
    /**
     * The RailJourneyRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to a journeys on which the above fare applies. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $RailJourneyRef;
    /**
     * The OptionalService
     * Meta information extracted from the WSDL
     * - documentation: Indicate the OfferFareItem elements will be Optional or not.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $OptionalService = null;
    /**
     * Constructor method for RailBookingInfo
     * @uses RailBookingInfo::setRailFareRef()
     * @uses RailBookingInfo::setRailJourneyRef()
     * @uses RailBookingInfo::setOptionalService()
     * @param string $railFareRef
     * @param string $railJourneyRef
     * @param bool $optionalService
     */
    public function __construct(string $railFareRef, string $railJourneyRef, ?bool $optionalService = false)
    {
        $this
            ->setRailFareRef($railFareRef)
            ->setRailJourneyRef($railJourneyRef)
            ->setOptionalService($optionalService);
    }
    /**
     * Get RailFareRef value
     * @return string
     */
    public function getRailFareRef(): string
    {
        return $this->RailFareRef;
    }
    /**
     * Set RailFareRef value
     * @param string $railFareRef
     * @return \Travelport\UniversalRecord\StructType\RailBookingInfo
     */
    public function setRailFareRef(string $railFareRef): self
    {
        $this->RailFareRef = $railFareRef;
        
        return $this;
    }
    /**
     * Get RailJourneyRef value
     * @return string
     */
    public function getRailJourneyRef(): string
    {
        return $this->RailJourneyRef;
    }
    /**
     * Set RailJourneyRef value
     * @param string $railJourneyRef
     * @return \Travelport\UniversalRecord\StructType\RailBookingInfo
     */
    public function setRailJourneyRef(string $railJourneyRef): self
    {
        $this->RailJourneyRef = $railJourneyRef;
        
        return $this;
    }
    /**
     * Get OptionalService value
     * @return bool|null
     */
    public function getOptionalService(): ?bool
    {
        return $this->OptionalService;
    }
    /**
     * Set OptionalService value
     * @param bool $optionalService
     * @return \Travelport\UniversalRecord\StructType\RailBookingInfo
     */
    public function setOptionalService(?bool $optionalService = false): self
    {
        $this->OptionalService = $optionalService;
        
        return $this;
    }
}
